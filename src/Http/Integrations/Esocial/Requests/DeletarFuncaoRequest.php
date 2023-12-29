<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição DELETE para deletar Função.
 */
class DeletarFuncaoRequest extends Request
{
    protected Method $method = Method::DELETE;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Deleta uma Função do Empregador
     * 
     * @param string $idEmpregador Id do Empregador.
     * @param string $idFuncao Id do Funcao de Trabalho
     */
    public function __construct(
        public string $idEmpregador,
        public string $idFuncao
    ) {

    }

    public function resolveEndpoint(): string
    {
        return '/empregador/' . $this->idEmpregador . '/funcao/' . $this->idFuncao;
    }
}