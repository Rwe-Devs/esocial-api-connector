<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição GET para listar a tabela de Construtoras.
 */
class TabelaConstrutorasRequest extends Request
{
    protected Method $method = Method::GET;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Lista a tabela de Construtoras
     * 
     */
    public function __construct()
    {

    }

    public function resolveEndpoint(): string
    {
        return 'tabela/construtoras';
    }
}