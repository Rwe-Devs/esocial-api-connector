<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição GET para mostrar Logo Empregador.
 */
class MostrarEmpregadorLogoRequest extends Request
{
    protected Method $method = Method::GET;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Mostra Logo de um empregador específico.
     * 
     * @param string $idEmpregador Id do Empregador a ser mostrado a logo.
     */
    public function __construct(public string $idEmpregador)
    {

    }

    public function resolveEndpoint(): string
    {
        return '/empregadores/' . 'imagem/' . $this->idEmpregador;
    }
}