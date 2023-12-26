<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição DELETE para deletar Local de Trabalho.
 */
class DeletarLocalRequest extends Request
{
    protected Method $method = Method::DELETE;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Deleta um Local de Trabalho do Empregador
     * 
     * @param string $idEmpregador Id do Empregador.
     * @param string $idLocal Id do Local de Trabalho
     */
    public function __construct(
        public string $idEmpregador,
        public string $idLocal
    ) {

    }

    public function resolveEndpoint(): string
    {
        return '/empregador/' . $this->idEmpregador . '/local/' . $this->idLocal;
    }
}