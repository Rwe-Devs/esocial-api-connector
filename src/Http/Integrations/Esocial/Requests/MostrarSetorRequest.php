<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição GET para mostrar apenas um Setor específico.
 */
class MostrarSetorRequest extends Request
{
    protected Method $method = Method::GET;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Mostra um Setor do Empregador
     * 
     * @param string $idEmpregador Id do Empregador.
     * @param string $idSetor Id do Setor.
     */
    public function __construct(
        public string $idEmpregador,
        public string $idSetor
    ) {

    }

    public function resolveEndpoint(): string
    {
        return '/empregador/' . $this->idEmpregador . '/setor/' . $this->idSetor;
    }
}