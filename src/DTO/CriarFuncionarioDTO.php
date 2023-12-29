<?php

namespace RweDevs\EsocialApiConnector\DTO;

use Illuminate\Http\Request;

class CriarFuncionarioDTO
{
    /**
     * DTO para criar um novo funcionário.
     *
     * @param string $nome Nome completo do funcionário.
     * @param string|null $codigo Código identificador do funcionário na empresa (opcional).
     * @param string|null $apelido Apelido pelo qual o funcionário é conhecido (opcional).
     * @param string|null $nascimento Data de nascimento do funcionário (formato AAAA-MM-DD, opcional).
     * @param string|null $naturalidade Naturalidade do funcionário (opcional).
     * @param string|null $nacionalidade Nacionalidade do funcionário (opcional).
     * @param string|null $estado_civil Estado civil do funcionário (opcional).
     * @param string|null $raca Raça ou cor a qual o funcionário se identifica (opcional).
     * @param string|null $sexo Sexo do funcionário (opcional).
     * @param string|null $cpf CPF do funcionário (opcional).
     * @param string|null $rg RG do funcionário (opcional).
     * @param string|null $nit Número de Identificação do Trabalhador (NIT/PIS/PASEP) do funcionário (opcional).
     * @param string|null $ctps Número da Carteira de Trabalho e Previdência Social (CTPS) do funcionário (opcional).
     * @param string|null $escolaridade Escolaridade do funcionário (opcional).
     * @param string|null $endereco Endereço residencial do funcionário (opcional).
     * @param string|null $numero Número residencial do funcionário (opcional).
     * @param string|null $complemento Complemento do endereço residencial do funcionário (opcional).
     * @param string|null $bairro Bairro residencial do funcionário (opcional).
     * @param string|null $municipio Município residencial do funcionário (opcional).
     * @param string|null $cep CEP residencial do funcionário (opcional).
     * @param string|null $uf Unidade Federativa do endereço residencial do funcionário (opcional).
     * @param string|null $telefone1 Número de telefone principal do funcionário (opcional).
     * @param string|null $telefone2 Número de telefone secundário do funcionário (opcional).
     * @param string|null $email Endereço de e-mail do funcionário (opcional).
     * @param string|null $tipo_de_registro Tipo de registro do funcionário na empresa (opcional).
     * @param string|null $valido_a_partir Data a partir da qual o registro é válido (formato AAAA-MM-DD, opcional).
     * @param string|null $matricula Matrícula única do funcionário na empresa (opcional).
     * @param int|null $local_id Identificador do local de trabalho do funcionário (opcional).
     * @param int|null $setor_id Identificador do setor de trabalho do funcionário (opcional).
     * @param int|null $ambiente_id Identificador do ambiente de trabalho do funcionário (opcional).
     * @param int|null $funcao_id Identificador da função do funcionário na empresa (opcional).
     * @param string|null $cargo Cargo ocupado pelo funcionário na empresa (opcional).
     * @param string|null $identificacao_esocial Identificação do funcionário para o eSocial (opcional).
     * @param string|null $cnpj Número do CNPJ associado ao funcionário (opcional).
     * @param string|null $parecer_aso Parecer do Atestado de Saúde Ocupacional (ASO) do funcionário (opcional).
     * @param string|null $filial_prev_social Identificador da filial para a previdência social (opcional).
     * @param string|null $area Área de trabalho do funcionário na empresa (opcional).
     * @param string|null $br_pdh Indicativo de BR/PDH (opcional).
     * @param string|null $gfip Código GFIP do funcionário (opcional).
     * @param string|null $turno Turno de trabalho do funcionário (opcional).
     * @param string|null $carga_horaria Carga horária de trabalho do funcionário (opcional).
     * @param string|null $regime_de_revezamento Indicativo se o funcionário trabalha em regime de revezamento (opcional).
     * @param bool|null $trabalho_em_altura Indicativo se o funcionário realiza trabalho em altura (opcional).
     */
    public function __construct(
        public string $nome,
        public ?string $codigo = null,
        public ?string $apelido = null,
        public ?string $nascimento = null,
        public ?string $naturalidade = null,
        public ?string $nacionalidade = null,
        public ?string $estado_civil = null,
        public ?string $raca = null,
        public ?string $sexo = null,
        public ?string $cpf = null,
        public ?string $rg = null,
        public ?string $nit = null,
        public ?string $ctps = null,
        public ?string $escolaridade = null,
        public ?string $endereco = null,
        public ?string $numero = null,
        public ?string $complemento = null,
        public ?string $bairro = null,
        public ?string $municipio = null,
        public ?string $cep = null,
        public ?string $uf = null,
        public ?string $telefone1 = null,
        public ?string $telefone2 = null,
        public ?string $email = null,
        public ?string $tipo_de_registro = null,
        public ?string $valido_a_partir = null,
        public ?string $matricula = null,
        public ?int $local_id = null,
        public ?int $setor_id = null,
        public ?int $ambiente_id = null,
        public ?int $funcao_id = null,
        public ?string $cargo = null,
        public ?string $identificacao_esocial = null,
        public ?string $cnpj = null,
        public ?string $parecer_aso = null,
        public ?string $filial_prev_social = null,
        public ?string $area = null,
        public ?string $br_pdh = null,
        public ?string $gfip = null,
        public ?string $turno = null,
        public ?string $carga_horaria = null,
        public ?string $regime_de_revezamento = null,
        public ?bool $trabalho_em_altura = null
    ) {
    }

    /**
     * Cria uma instância de CriarFuncionarioDTO a partir de uma requisição.
     *
     * @param Request $request A requisição do Laravel.
     * @return self
     */
    public static function fromRequest(Request $request): self
    {
        return new self(
            nome: $request->input('nome'),
            codigo: $request->input('codigo'),
            apelido: $request->input('apelido'),
            nascimento: $request->input('nascimento'),
            naturalidade: $request->input('naturalidade'),
            nacionalidade: $request->input('nacionalidade'),
            estado_civil: $request->input('estado_civil'),
            raca: $request->input('raca'),
            sexo: $request->input('sexo'),
            cpf: $request->input('cpf'),
            rg: $request->input('rg'),
            nit: $request->input('nit'),
            ctps: $request->input('ctps'),
            escolaridade: $request->input('escolaridade'),
            endereco: $request->input('endereco'),
            numero: $request->input('numero'),
            complemento: $request->input('complemento'),
            bairro: $request->input('bairro'),
            municipio: $request->input('municipio'),
            cep: $request->input('cep'),
            uf: $request->input('uf'),
            telefone1: $request->input('telefone1'),
            telefone2: $request->input('telefone2'),
            email: $request->input('email'),
            tipo_de_registro: $request->input('tipo_de_registro'),
            valido_a_partir: $request->input('valido_a_partir'),
            matricula: $request->input('matricula'),
            local_id: $request->input('local_id'),
            setor_id: $request->input('setor_id'),
            ambiente_id: $request->input('ambiente_id'),
            funcao_id: $request->input('funcao_id'),
            cargo: $request->input('cargo'),
            identificacao_esocial: $request->input('identificacao_esocial'),
            cnpj: $request->input('cnpj'),
            parecer_aso: $request->input('parecer_aso'),
            filial_prev_social: $request->input('filial_prev_social'),
            area: $request->input('area'),
            br_pdh: $request->input('br_pdh'),
            gfip: $request->input('gfip'),
            turno: $request->input('turno'),
            carga_horaria: $request->input('carga_horaria'),
            regime_de_revezamento: $request->input('regime_de_revezamento'),
            trabalho_em_altura: $request->boolean('trabalho_em_altura')
        );
    }
}
