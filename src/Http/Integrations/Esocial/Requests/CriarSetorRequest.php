<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\DTO\CriarSetorDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição POST para criação de novo Setor.
 */
class CriarSetorRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::POST;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Monta o 'body' da Request para criar Setor.
     * 
     * @param string $idEmpregador Id do Empregador.
     * @param CriarSetorDTO $criarSetorDTO Recebe um objeto CriarSetorDTO que representa o body da requisição.
     */
    public function __construct(
        public string $idEmpregador,
        protected CriarSetorDTO $criarSetorDTO
    ) {
    }
    protected function defaultBody(): array
    {
        return [
            'codigo_rh' => $this->criarSetorDTO->codigo_rh,
            'nome' => $this->criarSetorDTO->nome,
            'descricao' => $this->criarSetorDTO->descricao,
            'ativo' => $this->criarSetorDTO->ativo,
            'observacao_aso' => $this->criarSetorDTO->observacao_aso,
            'data_de_inicio' => $this->criarSetorDTO->data_de_inicio,
            'data_fim' => $this->criarSetorDTO->data_fim,

        ];
    }

    public function resolveEndpoint(): string
    {
        return '/empregador/' . $this->idEmpregador . '/setor';
    }
}