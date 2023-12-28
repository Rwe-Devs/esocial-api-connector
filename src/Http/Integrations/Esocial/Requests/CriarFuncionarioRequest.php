<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\DTO\CriarFuncionarioDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição POST para criação de novo Funcionário.
 */
class CriarFuncionarioRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;
    protected ?string $connector = EsocialConnector::class;

    /**
     * Monta o 'body' da Request para criar Funcionário.
     * 
     * @param CriarFuncionarioDTO $criarFuncionarioDTO Recebe um objeto CriarFuncionarioDTO que representa o body da requisição.
     */
    public function __construct(
        protected CriarFuncionarioDTO $criarFuncionarioDTO
    ) {
    }

    protected function defaultBody(): array
    {
        return [
            'nome' => $this->criarFuncionarioDTO->nome,
            'codigo' => $this->criarFuncionarioDTO->codigo,
            'apelido' => $this->criarFuncionarioDTO->apelido,
            'nascimento' => $this->criarFuncionarioDTO->nascimento,
            'naturalidade' => $this->criarFuncionarioDTO->naturalidade,
            'nacionalidade' => $this->criarFuncionarioDTO->nacionalidade,
            'estado_civil' => $this->criarFuncionarioDTO->estado_civil,
            'raca' => $this->criarFuncionarioDTO->raca,
            'sexo' => $this->criarFuncionarioDTO->sexo,
            'cpf' => $this->criarFuncionarioDTO->cpf,
            'rg' => $this->criarFuncionarioDTO->rg,
            'nit' => $this->criarFuncionarioDTO->nit,
            'ctps' => $this->criarFuncionarioDTO->ctps,
            'escolaridade' => $this->criarFuncionarioDTO->escolaridade,
            'endereco' => $this->criarFuncionarioDTO->endereco,
            'numero' => $this->criarFuncionarioDTO->numero,
            'complemento' => $this->criarFuncionarioDTO->complemento,
            'bairro' => $this->criarFuncionarioDTO->bairro,
            'municipio' => $this->criarFuncionarioDTO->municipio,
            'cep' => $this->criarFuncionarioDTO->cep,
            'uf' => $this->criarFuncionarioDTO->uf,
            'telefone1' => $this->criarFuncionarioDTO->telefone1,
            'telefone2' => $this->criarFuncionarioDTO->telefone2,
            'email' => $this->criarFuncionarioDTO->email,
            'tipo_de_registro' => $this->criarFuncionarioDTO->tipo_de_registro,
            'valido_a_partir' => $this->criarFuncionarioDTO->valido_a_partir,
            'matricula' => $this->criarFuncionarioDTO->matricula,
            'local_id' => $this->criarFuncionarioDTO->local_id,
            'setor_id' => $this->criarFuncionarioDTO->setor_id,
            'ambiente_id' => $this->criarFuncionarioDTO->ambiente_id,
            'funcao_id' => $this->criarFuncionarioDTO->funcao_id,
            'cargo' => $this->criarFuncionarioDTO->cargo,
            'identificacao_esocial' => $this->criarFuncionarioDTO->identificacao_esocial,
            'cnpj' => $this->criarFuncionarioDTO->cnpj,
            'parecer_aso' => $this->criarFuncionarioDTO->parecer_aso,
            'filial_prev_social' => $this->criarFuncionarioDTO->filial_prev_social,
            'area' => $this->criarFuncionarioDTO->area,
            'br_pdh' => $this->criarFuncionarioDTO->br_pdh,
            'gfip' => $this->criarFuncionarioDTO->gfip,
            'turno' => $this->criarFuncionarioDTO->turno,
            'carga_horaria' => $this->criarFuncionarioDTO->carga_horaria,
            'regime_de_revezamento' => $this->criarFuncionarioDTO->regime_de_revezamento,
            'trabalho_em_altura' => $this->criarFuncionarioDTO->trabalho_em_altura
        ];
    }


    public function resolveEndpoint(): string
    {
        // Defina o endpoint correto para a criação do funcionário. Este é apenas um exemplo.
        return '/funcionarios';
    }
}
