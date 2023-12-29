<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição GET para mostrar apenas um Responsável Técnico específico.
 */
class MostrarResponsavelTecnicoRequest extends Request
{
    protected Method $method = Method::GET;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Mostra um Responsável Técnico do Empregador
     * 
     * @param string $idEmpregador Id do Empregador.
     * @param string $idResponsavel Id do Responsável Técnico.
     */
    public function __construct(
        public string $idEmpregador,
        public string $idResponsavel
    ) {

    }

    public function resolveEndpoint(): string
    {
        return '/empregador/' . $this->idEmpregador . '/responsavel/' . $this->idResponsavel;
    }
}