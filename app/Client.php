<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'client', 'codFiscal', 'oras', 'strada', 'numar', 'codPostal', 'persoanaContact', 'numarTelefon'
    ];
}