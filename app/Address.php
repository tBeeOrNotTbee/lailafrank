<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/** DHL Libraries */

use DHL\Entity\AM\GetQuote;
use DHL\Datatype\AM\PieceType;
use DHL\Client\Web as WebserviceClient;

class Address extends Model
{
    public $table = 'addresses';
    public $guarded = [];
    use SoftDeletes;

    public function shipping_methods()
    {
        return $this->hasMany('App\Shipping_method', 'address_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function fullName()
    {
        return $this->name . ' ' . $this->surname;
    }

    public function cardLineOne()
    {
        return $this->street . ' ' . $this->number . ', PISO ' . ' ' . $this->floor . ', ' . $this->apartment;
    }

    public function cardLineTwo()
    {
        return $this->city . ', ' . $this->post_code;
    }

    public function cardLineThree()
    {
        return $this->state . ', ' . $this->country;
    }

    public static function sendingCostDHL($id, $shopcarId)
    {
        $address = Address::find($id);
        $shopcar = Shopcar::find($shopcarId);

        //contar productos en el carrito

        //Comienza DHL
        // DHL Settings
        require('../vendor/alfallouji/dhl_api/conf/config.php');
        $dhl = $config['dhl'];

        // Test a getQuote using DHL XML API
        $sample = new GetQuote();
        $sample->SiteID = $dhl['id'];
        $sample->Password = $dhl['pass'];


        // Set values of the request
        $sample->MessageTime = date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
        $sample->MessageReference = '1234567890123456789012345678901';
        $sample->BkgDetails->Date = date('Y-m-d');

        $piece = new PieceType();
        $piece->PieceID = 1;
        $piece->Height = 10;
        $piece->Depth = 5;
        $piece->Width = 10;
        $piece->Weight = 10;
        $sample->BkgDetails->addPiece($piece);
        $sample->BkgDetails->IsDutiable = 'Y';
        $sample->BkgDetails->QtdShp->QtdShpExChrg->SpecialServiceType = 'WY';
        $sample->BkgDetails->ReadyTime = 'PT10H21M';
        $sample->BkgDetails->ReadyTimeGMTOffset = '+01:00';
        $sample->BkgDetails->DimensionUnit = 'CM';
        $sample->BkgDetails->WeightUnit = 'KG';
        $sample->BkgDetails->PaymentCountryCode = 'CA';
        $sample->BkgDetails->IsDutiable = 'Y';

        // Request Paperless trade
        $sample->BkgDetails->QtdShp->QtdShpExChrg->SpecialServiceType = 'WY';

        $sample->From->CountryCode = 'AR';
        $sample->From->Postalcode = 'C1428AHD';
        $sample->From->City = 'Buenos Aires';

        $sample->To->CountryCode = $address->country_id;
        $sample->To->Postalcode = $address->post_code;
        $sample->To->City = $address->city;
        $sample->Dutiable->DeclaredValue = '100.00';
        $sample->Dutiable->DeclaredCurrency = 'CHF';

        
        return 0;
    }
}
