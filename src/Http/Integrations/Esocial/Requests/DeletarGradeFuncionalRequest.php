<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

/**
 * Requisição DELETE para deletar Grade Funcional.
 */
class DeletarGradeFuncionalRequest extends Request
{
    protected Method $method = Method::DELETE;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Deleta uma Grade Funcional.
     * 
     * @param string $idLocal Id do Local.
     * @param string $idGrade Id do Grade Funcional
     */
    public function __construct(
        public string $idLocal,
        public string $idGrade
    ) {

    }

    public function resolveEndpoint(): string
    {
        return '/local/' . $this->idLocal . '/grade_funcional/' . $this->idGrade;
    }
}