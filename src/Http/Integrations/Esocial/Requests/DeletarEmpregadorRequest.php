<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição DELETE para deletar Empregador.
 */
class DeletarEmpregadorRequest extends Request
{
    protected Method $method = Method::DELETE;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Deleta um empregador específico.
     * 
     * @param string $id Id do Empregador a ser deletado.
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