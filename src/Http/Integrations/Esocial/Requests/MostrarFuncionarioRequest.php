<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição GET para mostrar um Empregador.
 */
class MostrarFuncionarioRequest extends Request
{
    protected Method $method = Method::GET;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Mostra um empregador específico.
     * 
     * @param string $idFuncionario Id do Funcionario a ser mostrado.
     */
    public function __construct(public string $idFuncionario)
    {

    }

    public function resolveEndpoint(): string
    {
        return '/funcionarios/' . $this->idFuncionario;
    }
}