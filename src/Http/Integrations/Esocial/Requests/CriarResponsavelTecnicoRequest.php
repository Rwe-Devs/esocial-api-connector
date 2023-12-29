<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\DTO\CriarResponsavelTecnicoDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição POST para criação de novo Responsável Técnico.
 */
class CriarResponsavelTecnicoRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::POST;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Monta o 'body' da Request para criar Responsável Técnico.
     * 
     * @param string $idEmpregador Id do Empregador.
     * @param CriarResponsavelTecnicoDTO $criarResponsavelTecnicoDTO Recebe um objeto CriarResponsavelTecnicoDTO que representa o body da requisição.
     */
    public function __construct(
        public string $idEmpregador,
        protected CriarResponsavelTecnicoDTO $criarResponsavelTecnicoDTO
    ) {
    }
    protected function defaultBody(): array
    {
        return [
            'codigo' => $this->criarResponsavelTecnicoDTO->codigo,
            'nome' => $this->criarResponsavelTecnicoDTO->nome,
            'funcao' => $this->criarResponsavelTecnicoDTO->funcao,
            'ativo' => $this->criarResponsavelTecnicoDTO->ativo,
            'crm_crea_mte' => $this->criarResponsavelTecnicoDTO->crm_crea_mte,
            'especialidade' => $this->criarResponsavelTecnicoDTO->especialidade,
            'rg' => $this->criarResponsavelTecnicoDTO->rg,
            'cpf' => $this->criarResponsavelTecnicoDTO->cpf,
            'nascimento' => $this->criarResponsavelTecnicoDTO->nascimento,
            'nacionalidade' => $this->criarResponsavelTecnicoDTO->nacionalidade,
            'naturalidade' => $this->criarResponsavelTecnicoDTO->naturalidade,
            'sexo' => $this->criarResponsavelTecnicoDTO->sexo,
            'telefone' => $this->criarResponsavelTecnicoDTO->telefone,
            'celular' => $this->criarResponsavelTecnicoDTO->celular,
            'endereco' => $this->criarResponsavelTecnicoDTO->endereco,
            'numero' => $this->criarResponsavelTecnicoDTO->numero,
            'bairro' => $this->criarResponsavelTecnicoDTO->bairro,
            'municipio' => $this->criarResponsavelTecnicoDTO->municipio,
            'cep' => $this->criarResponsavelTecnicoDTO->cep,
            'uf' => $this->criarResponsavelTecnicoDTO->uf,
        ];
    }

    public function resolveEndpoint(): string
    {
        return '/empregador/' . $this->idEmpregador . '/responsavel';
    }
}