<?php

namespace App\Exceptions;

use Exception;

class AddressAlreadyExistsException extends Exception
{
    function __construct(string $message = 'O CEP informado já está registrado no sistema')
    {
        parent::__construct($message);
    }
}
