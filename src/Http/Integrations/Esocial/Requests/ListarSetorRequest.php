<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição GET para listar todos os Empregadores.
 */
class ListarSetorRequest extends Request
{
    protected Method $method = Method::GET;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Lista todos os Setores do Empregador
     * 
     * @param string $idEmpregador Id do Empregador.
     */
    public function __construct(public string $idEmpregador)
    {

    }

    public function resolveEndpoint(): string
    {
        return '/empregador/' . $this->idEmpregador . '/setores';
    }
}