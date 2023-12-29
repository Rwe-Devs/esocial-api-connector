<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição GET para mostrar apenas uma Função específica.
 */
class MostrarFuncaoRequest extends Request
{
    protected Method $method = Method::GET;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Mostra uma função no Empregador
     * 
     * @param string $idEmpregador Id do Empregador.
     * @param string $idFuncao Id do Local de Trabalho
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