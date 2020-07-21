<?php

namespace App;

use App\Http\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
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
    
    public function scopeFilter(Builder $builder, QueryFilter $filter)
    {
        $filter->apply($builder);
    }
}
