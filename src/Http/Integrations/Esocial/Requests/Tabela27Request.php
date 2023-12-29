<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição GET para listar a tabela 27.
 */
class Tabela27Request extends Request
{
    protected Method $method = Method::GET;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Lista a tabela 27.
     * 
     */
    public function __construct()
    {

    }

    public function resolveEndpoint(): string
    {
        return 'tabela/27';
    }
}