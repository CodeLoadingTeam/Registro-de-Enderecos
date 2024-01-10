<?php

namespace App\Models;

use App\Exceptions\AddressAlreadyExistsException;
use App\Exceptions\AddressNullFieldsException;
use Illuminate\Support\Facades\DB;

class Address
{  
    public function store(array $addressProperty): string
    {
        $postalCode = $addressProperty['cep'];

        if (empty($postalCode) || empty($addressProperty['numero'])) {
            throw new AddressNullFieldsException();
        }

        if ($this->areThereAPostalCode($postalCode)) {
            throw new AddressAlreadyExistsException();
        }

        try {
            DB::insert(
                'INSERT INTO enderecos (cep, logradouro, complemento, bairro, cidade, numero, uf, ibge, ddd) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)', 
                [
                    $addressProperty['cep'],
                    $addressProperty['logradouro'],
                    $addressProperty['complemento'],
                    $addressProperty['bairro'],
                    $addressProperty['localidade'],
                    $addressProperty['numero'],
                    $addressProperty['uf'],
                    $addressProperty['ibge'],
                    $addressProperty['ddd']
                ]
            ); 
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return 'ok';
    }

    private function areThereAPostalCode(string $postalCode): bool
    {
        $address = DB::select('SELECT * FROM enderecos e WHERE e.cep = ?', [$postalCode]);

        return !empty($address) ? true : false;
    }
}
