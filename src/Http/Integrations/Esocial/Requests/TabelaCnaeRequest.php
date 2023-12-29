<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição GET para listar a tabela de CNAE.
 */
class TabelaCnaeRequest extends Request
{
    protected Method $method = Method::GET;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Lista a tabela de CNAE
     * 
     */
    public function __construct()
    {

    }

    public function resolveEndpoint(): string
    {
        return 'tabela/cnae';
    }
}