<?php

namespace RweDevs\EsocialApiConnector\DTO;

use Illuminate\Http\Request;

class AtualizarResponsavelTecnicoDTO
{
    /**
     * DTO para criar um novo responsável técnico.
     *
     * @param string|null $codigo Código identificador do responsável técnico.
     * @param string|null $nome Nome do responsável técnico.
     * @param string|null $funcao Função do responsável técnico.
     * @param string|null $crm_crea_mte CRM, CREA ou MTE do responsável técnico (opcional).
     * @param string|null $especialidade Especialidade do responsável técnico (opcional).
     * @param string|null $rg RG do responsável técnico (opcional).
     * @param string|null $cpf CPF do responsável técnico (opcional).
     * @param string|null $nascimento Data de nascimento do responsável técnico (formato AAAA-MM-DD, opcional).
     * @param string|null $nacionalidade Nacionalidade do responsável técnico (opcional).
     * @param string|null $naturalidade Naturalidade do responsável técnico (opcional).
     * @param string|null $sexo Sexo do responsável técnico (opcional).
     * @param bool $ativo Status de ativação do responsável técnico.
     * @param string|null $telefone Telefone do responsável técnico (opcional).
     * @param string|null $celular Celular do responsável técnico (opcional).
     * @param string|null $endereco Endereço do responsável técnico (opcional).
     * @param string|null $numero Número do endereço do responsável técnico (opcional).
     * @param string|null $bairro Bairro do responsável técnico (opcional).
     * @param string|null $municipio Município do responsável técnico (opcional).
     * @param string|null $cep CEP do responsável técnico (opcional).
     * @param string|null $uf UF do responsável técnico (opcional).
     */
    public function __construct(
        public ?string $codigo,
        public ?string $nome,
        public ?string $funcao,
        public ?string $crm_crea_mte = null,
        public ?string $especialidade = null,
        public ?string $rg = null,
        public ?string $cpf = null,
        public ?string $nascimento = null,
        public ?string $nacionalidade = null,
        public ?string $naturalidade = null,
        public ?string $sexo = null,
        public ?bool $ativo = true,
        public ?string $telefone = null,
        public ?string $celular = null,
        public ?string $endereco = null,
        public ?string $numero = null,
        public ?string $bairro = null,
        public ?string $municipio = null,
        public ?string $cep = null,
        public ?string $uf = null
    ) {
    }

    /**
     * Cria uma instância de AtualizarResponsavelTecnicoDTO a partir de uma requisição.
     *
     * @param Request $request A requisição do Laravel.
     * @return self
     */
    public static function fromRequest(Request $request): self
    {
        return new self(
            codigo: $request->input('codigo'),
            nome: $request->input('nome'),
            funcao: $request->input('funcao'),
            crm_crea_mte: $request->input('crm_crea_mte'),
            especialidade: $request->input('especialidade'),
            rg: $request->input('rg'),
            cpf: $request->input('cpf'),
            nascimento: $request->input('nascimento'),
            nacionalidade: $request->input('nacionalidade'),
            naturalidade: $request->input('naturalidade'),
            sexo: $request->input('sexo'),
            ativo: $request->boolean('ativo'),
            telefone: $request->input('telefone'),
            celular: $request->input('celular'),
            endereco: $request->input('endereco'),
            numero: $request->input('numero'),
            bairro: $request->input('bairro'),
            municipio: $request->input('municipio'),
            cep: $request->input('cep'),
            uf: $request->input('uf')
        );
    }
}
