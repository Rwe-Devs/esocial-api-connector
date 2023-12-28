<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição GET para mostrar apenas um Ambiente específico.
 */
class MostrarAmbienteRequest extends Request
{
    protected Method $method = Method::GET;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Mostra um Ambiente do local
     * 
     * @param string $idlocal Id do local.
     * @param string $idAmbiente Id do Ambiente.
     */
    public function __construct(
        public string $idlocal,
        public string $idAmbiente
    ) {

    }

    public function resolveEndpoint(): string
    {
        return '/local/' . $this->idlocal . '/ambiente/' . $this->idAmbiente;
    }
}