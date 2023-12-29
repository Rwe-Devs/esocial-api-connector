<?php

namespace RweDevs\EsocialApiConnector\DTO;

use Illuminate\Http\Request;

class AtualizarAmbienteDTO
{
    /**
     * DTO para atualizar um ambiente.
     *
     * @param string|null $codigo Código do ambiente.
     * @param string|null $nome Nome do ambiente.
     * @param string|null $identificacao_esocial Identificação eSocial do ambiente (opcional).
     * @param string|null $area Área do ambiente (opcional).
     * @param string|null $pe_direito Pé direito do ambiente (opcional).
     * @param string|null $piso Piso do ambiente (opcional).
     * @param string|null $teto Teto do ambiente (opcional).
     * @param string|null $iluminacao Iluminação do ambiente (opcional).
     * @param string|null $paredes Paredes do ambiente (opcional).
     * @param string|null $ventilacao Ventilação do ambiente (opcional).
     * @param string|null $forro Forro do ambiente (opcional).
     * @param string|null $descricao_complementar Descrição complementar do ambiente (opcional).
     * @param string|null $data_de_inicio Data de início do uso do ambiente (opcional).
     * @param string|null $data_fim Data de término do uso do ambiente (opcional).
     */
    public function __construct(
        public ?string $codigo = null,
        public ?string $nome = null,
        public ?string $identificacao_esocial = null,
        public ?string $area = null,
        public ?string $pe_direito = null,
        public ?string $piso = null,
        public ?string $teto = null,
        public ?string $iluminacao = null,
        public ?string $paredes = null,
        public ?string $ventilacao = null,
        public ?string $forro = null,
        public ?string $descricao_complementar = null,
        public ?string $data_de_inicio = null,
        public ?string $data_fim = null,
    ) {
    }

    /**
     * Cria uma instância de AtualizarAmbienteDTO a partir de uma requisição.
     *
     * @param Request $request A requisição do Laravel.
     * @return self
     */
    public static function fromRequest(Request $request): self
    {
        return new self(
            codigo: $request->input('codigo'),
            nome: $request->input('nome'),
            identificacao_esocial: $request->input('identificacao_esocial'),
            area: $request->input('area'),
            pe_direito: $request->input('pe_direito'),
            piso: $request->input('piso'),
            teto: $request->input('teto'),
            iluminacao: $request->input('iluminacao'),
            paredes: $request->input('paredes'),
            ventilacao: $request->input('ventilacao'),
            forro: $request->input('forro'),
            descricao_complementar: $request->input('descricao_complementar'),
            data_de_inicio: $request->input('data_de_inicio'),
            data_fim: $request->input('data_fim'),
        );
    }
}
