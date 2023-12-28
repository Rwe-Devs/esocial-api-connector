<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\DTO\AtualizarFuncionarioDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição PUT para criação de novo Funcionário.
 */
class AtualizarFuncionarioRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;
    protected ?string $connector = EsocialConnector::class;

    /**
     * Monta o 'body' da Request para atualizar Funcionário.
     * @param string $idFuncionario Id do Funcionario.
     * @param AtualizarFuncionarioDTO $atualizarFuncionarioDTO Recebe um objeto AtualizarFuncionarioDTO que representa o body da requisição.
     */
    public function __construct(
        public string $idFuncionario,
        protected AtualizarFuncionarioDTO $atualizarFuncionarioDTO
    ) {
    }

    protected function defaultBody(): array
    {
        return [
            'nome' => $this->atualizarFuncionarioDTO->nome,
            'codigo' => $this->atualizarFuncionarioDTO->codigo,
            'apelido' => $this->atualizarFuncionarioDTO->apelido,
            'nascimento' => $this->atualizarFuncionarioDTO->nascimento,
            'naturalidade' => $this->atualizarFuncionarioDTO->naturalidade,
            'nacionalidade' => $this->atualizarFuncionarioDTO->nacionalidade,
            'estado_civil' => $this->atualizarFuncionarioDTO->estado_civil,
            'raca' => $this->atualizarFuncionarioDTO->raca,
            'sexo' => $this->atualizarFuncionarioDTO->sexo,
            'cpf' => $this->atualizarFuncionarioDTO->cpf,
            'rg' => $this->atualizarFuncionarioDTO->rg,
            'nit' => $this->atualizarFuncionarioDTO->nit,
            'ctps' => $this->atualizarFuncionarioDTO->ctps,
            'escolaridade' => $this->atualizarFuncionarioDTO->escolaridade,
            'endereco' => $this->atualizarFuncionarioDTO->endereco,
            'numero' => $this->atualizarFuncionarioDTO->numero,
            'complemento' => $this->atualizarFuncionarioDTO->complemento,
            'bairro' => $this->atualizarFuncionarioDTO->bairro,
            'municipio' => $this->atualizarFuncionarioDTO->municipio,
            'cep' => $this->atualizarFuncionarioDTO->cep,
            'uf' => $this->atualizarFuncionarioDTO->uf,
            'telefone1' => $this->atualizarFuncionarioDTO->telefone1,
            'telefone2' => $this->atualizarFuncionarioDTO->telefone2,
            'email' => $this->atualizarFuncionarioDTO->email,
            'tipo_de_registro' => $this->atualizarFuncionarioDTO->tipo_de_registro,
            'valido_a_partir' => $this->atualizarFuncionarioDTO->valido_a_partir,
            'matricula' => $this->atualizarFuncionarioDTO->matricula,
            'local_id' => $this->atualizarFuncionarioDTO->local_id,
            'setor_id' => $this->atualizarFuncionarioDTO->setor_id,
            'ambiente_id' => $this->atualizarFuncionarioDTO->ambiente_id,
            'funcao_id' => $this->atualizarFuncionarioDTO->funcao_id,
            'cargo' => $this->atualizarFuncionarioDTO->cargo,
            'identificacao_esocial' => $this->atualizarFuncionarioDTO->identificacao_esocial,
            'cnpj' => $this->atualizarFuncionarioDTO->cnpj,
            'parecer_aso' => $this->atualizarFuncionarioDTO->parecer_aso,
            'filial_prev_social' => $this->atualizarFuncionarioDTO->filial_prev_social,
            'area' => $this->atualizarFuncionarioDTO->area,
            'br_pdh' => $this->atualizarFuncionarioDTO->br_pdh,
            'gfip' => $this->atualizarFuncionarioDTO->gfip,
            'turno' => $this->atualizarFuncionarioDTO->turno,
            'carga_horaria' => $this->atualizarFuncionarioDTO->carga_horaria,
            'regime_de_revezamento' => $this->atualizarFuncionarioDTO->regime_de_revezamento,
            'trabalho_em_altura' => $this->atualizarFuncionarioDTO->trabalho_em_altura
        ];
    }


    public function resolveEndpoint(): string
    {
        return '/funcionarios/' . $this->idFuncionario;
    }
}
