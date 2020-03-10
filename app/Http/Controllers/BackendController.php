<?php

namespace App\Http\Controllers;

use App\Shoe;
use App\Shoe_img;
use App\Color;
use App\Contact;
use App\Stock;
use App\Discount;
use App\Mail\ClientContact;
use App\Mail\Contact as MailContact;
use App\Payment_Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BackendController extends Controller
{
    public function pedidos()
    {
        $payments = Payment_Order::where('ordered', '1')->get();
        //$payments = Payment_Order::all();
        return view('backend.backendPedidos', compact('payments'));
    }

    public function productos()
    {
        $shoes = Shoe::all();

        return view('backend.backendProductos', compact('shoes'));
    }

    public function ventas()
    {
        return view('backend.backendVentas');
    }

    public function reporte()
    {
        return view('backend.backendReporte');
    }

    public function misGustos()
    {
        return view('backend.backendMisGustos');
    }

    public function usuarios()
    {
        $users = User::all();
        return view('backend.backendUsuarios', compact('users'));
    }

    public function ventaMes()
    {
        return view('backend.backendVentaMes');
    }
    public function editarProducto($id)
    {
        $shoe = Shoe::find($id);
        return view('backend.backendEditarProducto', compact('shoe'));
    }
    public function editarUsuario($id)
    {
        $user = User::find($id);
        $favorites = $user->favorites;
        return view('backend.backendEditarUsuario', compact('user', 'favorites'));
    }

    public function nuevoProducto()
    {
        return view('backend.backendNuevoProducto');
    }

    public function verProducto($id, $updateOK = 0)
    {
        $shoe = Shoe::find($id);
        return view('backend.backendVerProducto', compact('shoe'));
    }

    public function editarPreview($id)
    {
        $shoe = Shoe::find($id);
        return view('backend.backendEditarPreview', compact('shoe'));
    }

    public function subirImagenes($id)
    {
        $shoe = Shoe::find($id);
        return view('backend.backendSubirImagenes', compact('shoe'));
    }

    public function verColores($id)
    {
        $shoe = Shoe::find($id);
        return view('backend.backendVerColores', compact('shoe'));
    }

    public function guardarColor($id)
    {
        $shoe = Shoe::find($id);

        return view('backend.backendVerColores', compact('shoe'));
    }

    public function borrarColor($shoe_id, $id)
    {
        Color::destroy($id);
        $stocks = Stock::where('color_id', '=', $id)->get();
        $stocks->destroy;
        return redirect('/backend/verProducto/' . $shoe_id . '#color');
    }

    public function discounts()
    {
        $discounts = Discount::all();
        return view('backend.backendDescuentos', compact('discounts'));
    }

    public function create_contact(Request $request)
    {
        $datos = [
            "name" => $request["name"],
            "surname" => $request["surname"],
            "email" => $request["email"],
            "phone" => $request["phone"],
            "about" => $request["about"],
            "description" => $request["description"]
        ];
        $contact = new Contact($datos);
        $contact->save();

        // Enviar mails
        // A Laila Frank
        Mail::to('shoes@lailafrankshoes.com')->queue(new MailContact($datos));

        //Mail a cliente
        Mail::to($request["email"])->queue(new ClientContact($datos));

        return redirect('/contact?mail=ok');
    }

    public function show_contacts()
    {
        $contacts = Contact::all();
        return view('backend.backendContacto', compact('contacts'));
    }

    public function showPayment($paymentId)
    {
        $payment = Payment_Order::find($paymentId);
        return view('backend.backendPedidoDetalle', compact('payment'));
    }
}
