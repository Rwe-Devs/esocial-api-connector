<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição DELETE para deletar Logo do Empregador.
 */
class DeletarEmpregadorLogoRequest extends Request
{
    protected Method $method = Method::DELETE;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Deleta um empregador específico.
     * 
     * @param string $idEmpregador Id do Empregador a ser deletado a logo.
     */
    public function __construct(
        public string $idEmpregador
    ) {

    }

    public function resolveEndpoint(): string
    {
        return '/empregadores/' . 'imagem/' . $this->idEmpregador;

    }
}