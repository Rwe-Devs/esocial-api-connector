<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\DTO\CriarAmbienteDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição POST para criação de novo Ambiente.
 */
class CriarAmbienteRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::POST;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Monta o 'body' da Request para criar Ambiente.
     * 
     * @param string $idLocal Id do Local.
     * @param CriarAmbienteDTO $criarAmbienteDTO Recebe um objeto CriarAmbienteDTO que representa o body da requisição.
     */
    public function __construct(
        public string $idLocal,
        protected CriarAmbienteDTO $criarAmbienteDTO
    ) {
    }
    protected function defaultBody(): array
    {
        return [
            'codigo' => $this->criarAmbienteDTO->codigo,
            'nome' => $this->criarAmbienteDTO->nome,
            'identificacao_esocial' => $this->criarAmbienteDTO->identificacao_esocial,
            'area' => $this->criarAmbienteDTO->area,
            'pe_direito' => $this->criarAmbienteDTO->pe_direito,
            'piso' => $this->criarAmbienteDTO->piso,
            'teto' => $this->criarAmbienteDTO->teto,
            'iluminacao' => $this->criarAmbienteDTO->iluminacao,
            'paredes' => $this->criarAmbienteDTO->paredes,
            'ventilacao' => $this->criarAmbienteDTO->ventilacao,
            'forro' => $this->criarAmbienteDTO->forro,
            'descricao_complementar' => $this->criarAmbienteDTO->descricao_complementar,
            'data_de_inicio' => $this->criarAmbienteDTO->data_de_inicio,
            'data_fim' => $this->criarAmbienteDTO->data_fim,

        ];
    }

    public function resolveEndpoint(): string
    {
        return '/local/' . $this->idLocal . '/ambiente';
    }
}