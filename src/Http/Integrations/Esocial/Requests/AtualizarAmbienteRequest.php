<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\DTO\AtualizarAmbienteDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição PUT para atualização de Ambiente.
 */
class AtualizarAmbienteRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::PUT;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Monta o 'body' da Request para criar Ambiente.
     * 
     * @param string $idLocal Id do Local.
     * @param string $idAmbiente Id do Ambiente de trabalho.
     * @param AtualizarAmbienteDTO $atualizarAmbienteDTO Recebe um objeto AtualizarAmbienteDTO que representa o body da requisição.
     */
    public function __construct(
        public string $idLocal,
        public string $idAmbiente,
        protected AtualizarAmbienteDTO $atualizarAmbienteDTO
    ) {
    }
    protected function defaultBody(): array
    {
        return [
            'codigo' => $this->atualizarAmbienteDTO->codigo,
            'nome' => $this->atualizarAmbienteDTO->nome,
            'identificacao_esocial' => $this->atualizarAmbienteDTO->identificacao_esocial,
            'area' => $this->atualizarAmbienteDTO->area,
            'pe_direito' => $this->atualizarAmbienteDTO->pe_direito,
            'piso' => $this->atualizarAmbienteDTO->piso,
            'teto' => $this->atualizarAmbienteDTO->teto,
            'iluminacao' => $this->atualizarAmbienteDTO->iluminacao,
            'paredes' => $this->atualizarAmbienteDTO->paredes,
            'ventilacao' => $this->atualizarAmbienteDTO->ventilacao,
            'forro' => $this->atualizarAmbienteDTO->forro,
            'descricao_complementar' => $this->atualizarAmbienteDTO->descricao_complementar,
            'data_de_inicio' => $this->atualizarAmbienteDTO->data_de_inicio,
            'data_fim' => $this->atualizarAmbienteDTO->data_fim,

        ];
    }

    public function resolveEndpoint(): string
    {
        return '/local/' . $this->idLocal . '/ambiente/' . $this->idAmbiente;
    }
}