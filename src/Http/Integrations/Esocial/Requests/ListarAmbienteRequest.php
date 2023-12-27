<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição GET para listar todos os Ambientes do Local.
 */
class ListarAmbienteRequest extends Request
{
    protected Method $method = Method::GET;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Lista todos os Ambientees do Local
     * 
     * @param string $idLocal Id do Local.
     */
    public function __construct(public string $idLocal)
    {

    }

    public function resolveEndpoint(): string
    {
        return '/local/' . $this->idLocal . '/ambientes';
    }
}