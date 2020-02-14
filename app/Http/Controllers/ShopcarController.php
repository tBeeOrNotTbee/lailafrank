<?php

namespace App\Http\Controllers;

/* require __DIR__ .  '/vendor/autoload.php'; */

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Shoe;
use App\Stock;
use App\Shopcar;
use App\Address;
use App\Custom\Oca;
use App\Custom\Helper;
use App\OrdersOutOfStock;
use App\Payment_Order;
use MercadoPago\Item;
use MercadoPago\MerchantOrder;
use MercadoPago\Payer;
use MercadoPago\Payment;
use MercadoPago\Preference;
use MercadoPago\SDK;

use function App\Custom\discountProcess;

class ShopcarController extends Controller
{
    public function add($stock_id)
    {
        $user = Auth::user();
        $stock = Stock::find($stock_id);

        $shopcar = Shopcar::where('ordered', '=', '0')
            ->where('user_id', '=', $user->id)
            ->take(1)
            ->first();

        if (is_null($shopcar)) {
            //debe crearlo
            $shopcar = $user->shopcar()->create([
                'user_id' => $user->id
            ]);
        }

        //continua proceso
        $shopcar->stock()->attach($stock_id);

        return redirect('/backend/shopcar/list/');
    }

    public function list()
    {
        $user = Auth::user();

        $shopcar = Shopcar::where('ordered', '=', '0')
            ->where('user_id', '=', $user->id)
            ->take(1)
            ->first();

        if (is_null($shopcar) || $shopcar->stock->isEmpty()) {
            //dd($shopcar->stock);
            return view('backend.backendVerCarrito', ['vacio' => 'ok']);
        }
        //dd($shopcar);
        $stocks = $shopcar->stock;

        $addresses = Address::where('user_id', '=', $user->id)->get();

        /*   INTEGRACION OCA   */
        ### Unicamente para tarifar un envío requiere un número de operativa y CUIT válidos,
        ### autorizados por OCA para operar (at. al cliente 0800-999-7700). 
        ### Otros métodos no requieren esta autorización

        /* $oca = new Oca($cuit = '27-31879156-1', $operativa = 298450);
        //dd($oca);
        $price = $oca->tarifarEnvioCorporativo(1, 1, 1128, 1900, 1, 0);
        dd($price); 
        //$envios = $oca->listEnvios($fechaDesde = '08-08-2015', $fechaHasta = '13-08-2015');

        print_r($envios);
        print_r($price); */

        /* FIN INTEGRACION OCA */

        return view('backend.backendVerCarrito', compact('shopcar', 'stocks', 'addresses'));
    }

    public function removeStock($shopcar_id, $stock_id)
    {
        $shopcar = Shopcar::find($shopcar_id);
        $stock = Stock::find($stock_id);

        $shopcar->stock()->toggle($stock);

        //dd($shopcar->stock($stock_id));
        /* ->detach() */
        return back();
    }

    public function add2(Request $req)
    {
        if (Auth::user()) {
            $user = Auth::user();

            $stock = Shoe::find($req->shoeId)->stock()->where('size', '=', $req->size)->first();

            if (is_null($stock)) {
                /** Graba en OrdersOutOfStock el pedido rechazado */
                $ordersOutOfStock = new OrdersOutOfStock;

                $ordersOutOfStock->create([
                    'user_id' => $user->id,
                    'shoe_id' => $req->shoeId,
                    'size' => $req->size
                ]);

                $state = ['state' => false];
                return json_encode($state);
            }

            $shopcar = Shopcar::where('ordered', '=', '0')
                ->where('user_id', '=', $user->id)
                ->take(1)
                ->first();

            if (is_null($shopcar)) {
                //debe crearlo
                $shopcar = $user->shopcar()->create([
                    'user_id' => $user->id
                ]);
            }

            //continua proceso
            $shopcar->stock()->attach($stock->id);
            $state = ['state' => true];
            return json_encode($state);
        } else {
            $state = ['state' => 'notLogged'];
            return json_encode($state);
        }
    }

    public function add3($shoeId, $size)
    {
        $user = Auth::user();
        /** Graba en OrdersOutOfStock el pedido rechazado */
        $ordersOutOfStock = new OrdersOutOfStock;

        $ordersOutOfStock->create([
            'user_id' => $user->id,
            'shoe_id' => $shoeId,
            'size' => $size
        ]);

        $printi = Shoe::find($shoeId)->stock()->where('size', '=', $size)->first();
        return json_encode($printi);
    }

    public function forcheckout(Request $req)
    {
        $user = Auth::user();

        $shopcar = Shopcar::where('ordered', '=', '0')
            ->where('user_id', '=', $user->id)
            ->take(1)
            ->first();


        $stocks = $shopcar->stock;
        $total = 0;
        foreach ($stocks as $product) {
            $total += $product->shoe->price;
        }

        //CUPON DE DESCUENTO
        $discounter = Helper::discountProcess($req->discount_quantity, $req->discount_type, $total);

        $total = $discounter[0];
        $discount = $discounter[1];

        //FALTA COSTO DE ENVIO

        $costoEnvio = Address::sendingCost($req->address_id);
        
        $address = Address::find($req->address_id);

        $total = round($total, 2);

        //COMENZAR CON CREACION DE PAYMENT_ORDER Y PASAJE DE DATA A MP
        SDK::setClientId(
            config("payment-methods.mercadopago.client")
        );
        SDK::setClientSecret(
            config("payment-methods.mercadopago.secret")
        );

        $item = new Item();
        /* if($req->address_id == "showroom"){
            $address_id = 1;
        }else {
            $address_id = $req->address_id;
        } */
        $payment = new Payment_Order([
            "user_id" => $user->id,
            "shopcar_id" => $shopcar->id,
            "address_id" => $req->address_id,
        ]);
        
        $payment->save();

        //ITEM A VENDER

        $item->id = $payment->id;
        $item->title = "Laila Frank Shoes" ;
        $item->quantity = 1;
        $item->currency_id = "ARS";
        $item->unit_price = $total;

        //PAYER DATA
        $payer = new Payer();
        $payer->name = $user->name;
        $payer->surname = $user->surname;
        $payer->email = $user->email;
        /* $payer->date_created = date(); */
        /* $payer->phone = array(
            "area_code" => "",
            "number" => "949 128 866"
        ); */
        /* $payer->identification = array(
            "type" => "DNI",
            "number" => "12345678"
        ); */

        $payer->address = array(
            "street_name" => $address->street,
            "street_number" => $address->number,
            "zip_code" => $address->post_code
        );
        
        //PREFERENCIAS A ENVIAR
        $preference = new Preference();
        $preference->items = [$item];
        $preference->payer = $payer;
        $preference->external_reference = $payment->id;

        //Decidir si usar las rutas de redirect 
        /* $preference->back_urls = [
            "success" => route('checkout.thanks'),
            "pending" => route('checkout.pending'),
            "failure" => route('checkout.error'),
        ]; */

        $preference->back_urls = [
            "success" => '/HOME',
            "pending" => '/HOME',
            "failure" => '/HOME',
        ];

        $preference->auto_return = "approved"; //DEVUELVE AL sitio en todos los casos, puede ser on APPROVED
/*         $preference->notification_url = route('/mp/notificacion'); //Por ahora no se usa */

        $preference->save();

        //DESCONTAR DEL STOCK EL PRODUCTO
        //STOCK->QUANTITY

        if (config('payment-methods.use_sandbox')) {
            return redirect($preference->sandbox_init_point);
        }

        /* $preference->init_point; */
        return view('shopCheckout', compact('preference','shopcar', 'stocks', 'address', 'total', 'discount', 'costoEnvio', 'payment'));
    }

    
  /*   public function createOrder(PreOrder $preOrder, Request $request)
    {
        $allowedPaymentMethods = config('payment-methods.enabled');

        $request->validate([
            'payment_method' => [
                'required',
                Rule::in($allowedPaymentMethods),
            ],
            'terms' => 'accepted',
        ]);

        $order = $this->setUpOrder($preOrder, $request);

        $this->notify($order);
        $url = $this->generatePaymentGateway(
            $request->get('payment_method'),
            $order
        );
        return redirect()->to($url);
    }

    protected function generatePaymentGateway($paymentMethod, Order $order) : string
    {
        $method = new \App\PaymentMethods\MercadoPago;

        return $method->setupPaymentAndGetRedirectURL($order);
    } */
}
