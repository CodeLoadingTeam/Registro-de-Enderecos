<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
// use Illuminate\View\View;

class AddressController extends Controller
{
    private $address;

    function __construct()
    {
        $this->address = new Address();
    }

    public function storeAddress(Request $request): string // View
    {
        dd($request->all());
        //dd('teste request');
        $addressProperty = $request->only([
            'cep',
            'logradouro',
            'complemento',
            'bairro',
            'localidade',
            'numero',
            'uf',
            'ibge',
            'ddd'
        ]);

        dd($addressProperty);
        //dd('teste property');

        return $this->address->store($addressProperty);
        
        // return view('home');
    }

}
