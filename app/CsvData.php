<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CsvData extends Model
{
    protected $fillable = [
        'name', 
        'price', 
        'bedrooms', 
        'bathrooms', 
        'storeys', 
        'garages'
    ];
}
