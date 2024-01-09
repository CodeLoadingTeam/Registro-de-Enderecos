<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AddressController extends Controller
{
    private $address;

    function __construct()
    {
        $this->address = new Address();
    }

    public function storeAddress(Request $request): View
    {
        $addressProperty = $request->only([
            'cep',
            'logradouro',
            'complemento',
            'bairro',
            'localidade',
            'uf',
            'ibge',
            'ddd'
        ]);

        $this->address->store($addressProperty);

        return view('home');
    }
}
