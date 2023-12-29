<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição GET para listar todas as Grades Funcionais do Local.
 */
class ListarGradeFuncionalRequest extends Request
{
    protected Method $method = Method::GET;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Lista todas as Grades Funcionais do Local.
     * 
     * @param string $idLocal Id do Local.
     */
    public function __construct(public string $idLocal)
    {

    }

    public function resolveEndpoint(): string
    {
        return '/local/' . $this->idLocal . '/grade_funcional';
    }
}