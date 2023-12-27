<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição DELETE para deletar Setor de Trabalho.
 */
class DeletarSetorRequest extends Request
{
    protected Method $method = Method::DELETE;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Deleta um Setor de Trabalho do Empregador
     * 
     * @param string $idEmpregador Id do Empregador.
     * @param string $idSetor Id do Setor de Trabalho
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