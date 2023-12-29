<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\DTO\AtualizarGradeFuncionalDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição PUT para atualização de Grade Funcional.
 */
class AtualizarGradeFuncionalRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::PUT;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Monta o 'body' da Request para atualizar Grade Funcional.
     * 
     * @param string $idLocal Id do Local.
     * @param string $idGrade Id da Grade Funcional.
     * @param AtualizarGradeFuncionalDTO $atualizarGradeFuncionalDTO Recebe um objeto AtualizarGradeFuncionalDTO que representa o body da requisição.
     */
    public function __construct(
        public string $idLocal,
        public string $idGrade,
        protected AtualizarGradeFuncionalDTO $atualizarGradeFuncionalDTO
    ) {
    }
    protected function defaultBody(): array
    {
        return [
            'nome' => $this->atualizarGradeFuncionalDTO->nome,
            'ambiente_id' => $this->atualizarGradeFuncionalDTO->ambiente_id,
            'funcao_id' => $this->atualizarGradeFuncionalDTO->funcao_id,
        ];
    }

    public function resolveEndpoint(): string
    {
        return '/local/' . $this->idLocal . '/grade_funcional/' . $this->idGrade;
    }
}