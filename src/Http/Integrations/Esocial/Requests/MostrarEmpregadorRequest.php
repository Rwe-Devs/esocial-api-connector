<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição POST para registro de novo usuário.
 */
class MostrarEmpregadorRequest extends Request
{
    protected Method $method = Method::GET;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Mostra um empregador específico.
     * 
     * @param string $id Id do Empregador a ser mostrado.
     */
    public function __construct(
        public string $id
    ) {

    }

    public function resolveEndpoint(): string
    {
        return '/empregadores' . '/' . $this->id;
    }
}