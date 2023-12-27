<?php

namespace RweDevs\EsocialApiConnector\DTO;

use Illuminate\Http\Request;

class CriarSetorDTO
{
    /**
     * DTO para criar um novo setor.
     *
     * @param string|null $codigo_rh Código RH do setor (opcional).
     * @param string $nome Nome do setor.
     * @param string|null $descricao Descrição do setor (opcional).
     * @param bool|null $ativo Status de ativação do setor.
     * @param string|null $observacao_aso Observações do ASO (opcional).
     * @param string|null $data_de_inicio Data de início do setor (opcional).
     * @param string|null $data_fim Data de término do setor (opcional).
     */
    public function __construct(
        public string $nome,
        public ?bool $ativo = null,
        public ?string $observacao_aso = null,
        public ?string $data_de_inicio = null,
        public ?string $data_fim = null,
        public ?string $descricao = null,
        public ?string $codigo_rh = null,


    ) {
    }

    /**
     * Cria uma instância de CriarSetorDTO a partir de uma requisição.
     *
     * @param Request $request A requisição do Laravel.
     * @return self
     */
    public static function fromRequest(Request $request): self
    {
        return new self(
            codigo_rh: $request->input('codigo_rh'),
            nome: $request->input('nome'),
            descricao: $request->input('descricao'),
            ativo: $request->boolean('ativo'),
            observacao_aso: $request->input('observacao_aso'),
            data_de_inicio: $request->input('data_de_inicio'),
            data_fim: $request->input('data_fim'),
        );
    }
}
