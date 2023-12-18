<?php

namespace RweDevs\EsocialApiConnector\Esocial;

use Saloon\Http\Connector;

class EsocialConnector extends Connector
{
    protected string $url;

    /**
     * Define a URL base da API
     * 
     * @param string $url URL da API.
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function resolveBaseUrl(): string
    {
        return $this->url;
    }
}