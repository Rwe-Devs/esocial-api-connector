<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição GET para listar a tabela de Indicativo de Produtor Rural.
 */
class TabelaIndopccpRequest extends Request
{
    protected Method $method = Method::GET;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Lista a tabela de Indicativo de Produtor Rural
     * 
     */
    public function __construct()
    {

    }

    public function resolveEndpoint(): string
    {
        return 'tabela/indopccp';
    }
}