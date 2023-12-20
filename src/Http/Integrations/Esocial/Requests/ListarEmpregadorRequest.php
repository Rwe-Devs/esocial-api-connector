<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição POST para registro de novo usuário.
 */
class ListarEmpregadorRequest extends Request
{
    protected Method $method = Method::GET;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Lista todos os empregadores
     * 
     */
    public function __construct()
    {

    }

    public function resolveEndpoint(): string
    {
        return '/empregadores';
    }
}