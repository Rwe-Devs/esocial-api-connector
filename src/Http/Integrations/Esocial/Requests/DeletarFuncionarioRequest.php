<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição DELETE para deletar Função.
 */
class DeletarFuncionarioRequest extends Request
{
    protected Method $method = Method::DELETE;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Deleta uma Função do Empregador
     * @param string $idFuncionario Id do Funcionario.
     */
    public function __construct(
        public string $idFuncionario,
    ) {

    }

    public function resolveEndpoint(): string
    {
        return '/funcionarios/' . $this->idFuncionario;
    }
}