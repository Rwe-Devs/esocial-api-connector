<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição GET para listar uma Grade Funcional.
 */
class MostrarGradeFuncionalRequest extends Request
{
    protected Method $method = Method::GET;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Lista uma Grade Funcional.
     * 
     * @param string $idLocal Id do Local.
     * @param string $idGrade Id da Grade Funcional.
     */
    public function __construct(public string $idLocal, public string $idGrade)
    {

    }

    public function resolveEndpoint(): string
    {
        return '/local/' . $this->idLocal . '/grade_funcional/' . $this->idGrade;
    }
}