<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\FlareClient\Http\Exceptions\NotFound;

class Address extends Model
{
    use HasFactory;

    public function store(array $addressProperty): void
    {
        if (empty($addressProperty['cep'])) {
            throw new NotFound();
        }
    }
}
