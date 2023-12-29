<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\DTO\AtualizarResponsavelTecnicoDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição PUT para atualização de Responsável Técnico.
 */
class AtualizarResponsavelTecnicoRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::PUT;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Monta o 'body' da Request para atualizar Responsável Técnico.
     * 
     * @param string $idEmpregador Id do Empregador.
     * @param string $idResponsavel ID do Responsável Técnico
     * @param AtualizarResponsavelTecnicoDTO $atualizarResponsavelTecnicoDTO Recebe um objeto AtualizarResponsavelTecnicoDTO que representa o body da requisição.
     */
    public function __construct(
        public string $idEmpregador,
        public string $idResponsavel,
        protected AtualizarResponsavelTecnicoDTO $atualizarResponsavelTecnicoDTO
    ) {
    }
    protected function defaultBody(): array
    {
        return [
            'codigo' => $this->atualizarResponsavelTecnicoDTO->codigo,
            'nome' => $this->atualizarResponsavelTecnicoDTO->nome,
            'funcao' => $this->atualizarResponsavelTecnicoDTO->funcao,
            'ativo' => $this->atualizarResponsavelTecnicoDTO->ativo,
            'crm_crea_mte' => $this->atualizarResponsavelTecnicoDTO->crm_crea_mte,
            'especialidade' => $this->atualizarResponsavelTecnicoDTO->especialidade,
            'rg' => $this->atualizarResponsavelTecnicoDTO->rg,
            'cpf' => $this->atualizarResponsavelTecnicoDTO->cpf,
            'nascimento' => $this->atualizarResponsavelTecnicoDTO->nascimento,
            'nacionalidade' => $this->atualizarResponsavelTecnicoDTO->nacionalidade,
            'naturalidade' => $this->atualizarResponsavelTecnicoDTO->naturalidade,
            'sexo' => $this->atualizarResponsavelTecnicoDTO->sexo,
            'telefone' => $this->atualizarResponsavelTecnicoDTO->telefone,
            'celular' => $this->atualizarResponsavelTecnicoDTO->celular,
            'endereco' => $this->atualizarResponsavelTecnicoDTO->endereco,
            'numero' => $this->atualizarResponsavelTecnicoDTO->numero,
            'bairro' => $this->atualizarResponsavelTecnicoDTO->bairro,
            'municipio' => $this->atualizarResponsavelTecnicoDTO->municipio,
            'cep' => $this->atualizarResponsavelTecnicoDTO->cep,
            'uf' => $this->atualizarResponsavelTecnicoDTO->uf,
        ];
    }

    public function resolveEndpoint(): string
    {
        return '/empregador/' . $this->idEmpregador . '/responsavel/' . $this->idResponsavel;
    }
}