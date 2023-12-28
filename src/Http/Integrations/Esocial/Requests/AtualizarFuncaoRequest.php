<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\DTO\AtualizarFuncaoDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição POST para criação de nova Função.
 */
class AtualizarFuncaoRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::PUT;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Monta o 'body' da Request para atualizar Função.
     * 
     * @param string $idEmpregador Id do Empregador.
     * @param AtualizarFuncaoDTO $atualizarFuncaoDTO Recebe um objeto AtualizarFuncaoDTO que representa o body da requisição.
     */
    public function __construct(
        public string $idEmpregador,
        public string $idFuncao,
        protected AtualizarFuncaoDTO $atualizarFuncaoDTO
    ) {
    }
    protected function defaultBody(): array
    {
        return [
            'codigo' => $this->atualizarFuncaoDTO->codigo,
            'nome' => $this->atualizarFuncaoDTO->nome,
            'cbo' => $this->atualizarFuncaoDTO->cbo,
            'atividade' => $this->atualizarFuncaoDTO->atividade,
            'requisitos' => $this->atualizarFuncaoDTO->requisitos,
            'data_de_inicio' => $this->atualizarFuncaoDTO->data_de_inicio,
            'data_fim' => $this->atualizarFuncaoDTO->data_fim,

        ];
    }

    public function resolveEndpoint(): string
    {
        return '/empregador/' . $this->idEmpregador . '/funcao/' . $this->idFuncao;
    }
}