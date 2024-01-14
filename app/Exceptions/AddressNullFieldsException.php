<?php

namespace App\Exceptions;

use Exception;

class AddressNullFieldsException extends Exception
{
    function __construct(string $message = 'O CEP ou o Número residencial não podem estar vazios')
    {
        parent::__construct($message);
    }
}
