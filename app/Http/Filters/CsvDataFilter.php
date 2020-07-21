<?php
namespace App\Http\Filters;

use App\CsvData;
use Illuminate\Database\Eloquent\Builder;

class CsvDataFilter extends QueryFilter
{
    public function getModelClass()
    {
        return CsvData::class;
    }

    public function name($name)
    {
        return $this->builder->where('name', $name);
    }

    public function price($price)
    {
        return $this->builder->WhereRaw("price like '%$price%'");
    }

    public function bedrooms($bedrooms)
    {
        return $this->builder->where('bedrooms', $bedrooms);
    }

    public function bathrooms($bathrooms)
    {
        return $this->builder->where('bathrooms', $bathrooms);
    }

    public function storeys($storeys)
    {
        return $this->builder->where('storeys', $storeys);
    }

    public function garages($garages)
    {
        return $this->builder->where('garages', $garages);
    }
}
