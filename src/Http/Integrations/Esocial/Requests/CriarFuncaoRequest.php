<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\DTO\CriarFuncaoDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição POST para criação de nova Função.
 */
class CriarFuncaoRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::POST;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Monta o 'body' da Request para criar Setor.
     * 
     * @param string $idEmpregador Id do Empregador.
     * @param CriarFuncaoDTO $criarFuncaoDTO Recebe um objeto CriarFuncaoDTO que representa o body da requisição.
     */
    public function __construct(
        public string $idEmpregador,
        protected CriarFuncaoDTO $criarFuncaoDTO
    ) {
    }
    protected function defaultBody(): array
    {
        return [
            'codigo' => $this->criarFuncaoDTO->codigo,
            'nome' => $this->criarFuncaoDTO->nome,
            'cbo' => $this->criarFuncaoDTO->cbo,
            'atividade' => $this->criarFuncaoDTO->atividade,
            'requisitos' => $this->criarFuncaoDTO->requisitos,
            'data_de_inicio' => $this->criarFuncaoDTO->data_de_inicio,
            'data_fim' => $this->criarFuncaoDTO->data_fim,

        ];
    }

    public function resolveEndpoint(): string
    {
        return '/empregador/' . $this->idEmpregador . '/funcao';
    }
}