<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição GET para listar todos os Responsáveis técnicos do Empregador.
 */
class ListarResponsavelTecnicoRequest extends Request
{
    protected Method $method = Method::GET;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Lista todos os Responsáveis Técnicos do Empregador.
     * 
     * @param string $idEmpregador Id do Empregador.
     */
    public function __construct(public string $idEmpregador)
    {

    }

    public function resolveEndpoint(): string
    {
        return '/empregador/' . $this->idEmpregador . '/responsaveis';
    }
}