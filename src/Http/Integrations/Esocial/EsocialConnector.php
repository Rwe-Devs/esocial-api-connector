<?php

namespace RweDevs\EsocialApiConnector\Esocial;

use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;

class EsocialConnector extends Connector
{
    protected string $url;
    protected string $token;

    /**
     * Define a URL base da API
     * 
     * @param string $url URL da API.
     * @param string $token (optional) Token de autorização da API para rotas autenticadas.
     */
    public function __construct(string $url, ?string $token = '')
    {
        $this->url = $url;
        $this->token = $token;
    }
    protected function defaultAuth(): TokenAuthenticator
    {
        return new TokenAuthenticator($this->token);
    }

    public function resolveBaseUrl(): string
    {
        return $this->url;
    }
}