<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'cursa', 'clientID', 'plecareData', 'plecareLocatie', 'sosireData', 'sosireLocatie', 'intoarcereData', 'intoarcereLocatie', 'europaletiIncarcat', 'europaletiDescarcat', 'pret', 'kilometriParcurs', 'notes'
    ];

    //Course belongTo one Client
    public function client()
    {
        return $this->belongsTo('App\Client');
    }
}