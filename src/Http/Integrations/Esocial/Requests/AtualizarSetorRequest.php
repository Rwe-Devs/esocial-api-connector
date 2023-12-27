<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\DTO\AtualizarSetorDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição PUT para atualizar Setor.
 */
class AtualizarSetorRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::PUT;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Monta o 'body' da Request para atualizar Setor.
     * 
     * @param string $idEmpregador Id do Empregador.
     * @param string $idSetor Id do Setor a ser atualizado.
     * @param AtualizarSetorDTO $atualizarSetorDTO Recebe um objeto AtualizarSetorDTO que representa o body da requisição.
     */
    public function __construct(
        public string $idEmpregador,
        public string $idSetor,
        protected AtualizarSetorDTO $atualizarSetorDTO
    ) {
    }
    protected function defaultBody(): array
    {
        return [
            'codigo_rh' => $this->atualizarSetorDTO->codigo_rh,
            'nome' => $this->atualizarSetorDTO->nome,
            'descricao' => $this->atualizarSetorDTO->descricao,
            'ativo' => $this->atualizarSetorDTO->ativo,
            'observacao_aso' => $this->atualizarSetorDTO->observacao_aso,
            'data_de_inicio' => $this->atualizarSetorDTO->data_de_inicio,
            'data_fim' => $this->atualizarSetorDTO->data_fim,

        ];
    }

    public function resolveEndpoint(): string
    {
        return '/empregador/' . $this->idEmpregador . '/setor/' . $this->idSetor;
    }
}