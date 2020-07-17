<?php

namespace App\JsonApi\Csvs;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'csvs';

    /**
     * @param \App\CsvData $resource
     *      the domain record being serialized.
     * @return string
     */
    public function getId($resource)
    {
        return (string) $resource->getRouteKey();
    }

    /**
     * @param \App\CsvData $resource
     *      the domain record being serialized.
     * @return array
     */
    public function getAttributes($resource)
    {
        return [
            'name' => $resource->name,
            'price' => $resource->price,
            'bedrooms' => $resource->bedrooms,
            'bathrooms' => $resource->bathrooms,
            'storeys' => $resource->storeys,
            'garages' => $resource->garages
        ];
    }
}
