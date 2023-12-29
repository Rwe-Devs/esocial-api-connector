<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição DELETE para deletar Ambiente de Trabalho.
 */
class DeletarAmbienteRequest extends Request
{
    protected Method $method = Method::DELETE;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Deleta um Ambiente de Trabalho de um Local.
     * 
     * @param string $idLocal Id do Local.
     * @param string $idAmbiente Id do Ambiente de Trabalho
     */
    public function __construct(
        public string $idLocal,
        public string $idAmbiente
    ) {

    }

    public function resolveEndpoint(): string
    {
        return '/local/' . $this->idLocal . '/ambiente/' . $this->idAmbiente;
    }
}