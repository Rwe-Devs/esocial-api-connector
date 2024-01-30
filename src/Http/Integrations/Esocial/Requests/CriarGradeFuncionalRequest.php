<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\DTO\CriarGradeFuncionalDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição POST para criação de nova Grade Funcional.
 */
class CriarGradeFuncionalRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::POST;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Monta o 'body' da Request para criar Grade Funcional.
     * 
     * @param string $idLocal Id do Local.
     * @param CriarGradeFuncionalDTO $criarGradeFuncionalDTO Recebe um objeto CriarGradeFuncionalDTO que representa o body da requisição.
     */
    public function __construct(
        public string $idLocal,
        protected CriarGradeFuncionalDTO $criarGradeFuncionalDTO
    ) {
    }
    protected function defaultBody(): array
    {
        return [
            'nome' => $this->criarGradeFuncionalDTO->nome,
            'setor_id' => $this->criarGradeFuncionalDTO->setor_id,
            'funcoes' => $this->criarGradeFuncionalDTO->funcoes,
        ];
    }

    public function resolveEndpoint(): string
    {
        return '/local/' . $this->idLocal . '/grade_funcional';
    }
}