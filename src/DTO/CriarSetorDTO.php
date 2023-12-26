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
     * @param bool $ativo Status de ativação do setor.
     * @param string|null $observacao_aso Observações do ASO (opcional).
     * @param \DateTime|null $data_de_inicio Data de início do setor (opcional).
     * @param \DateTime|null $data_fim Data de término do setor (opcional).
     */
    public function __construct(
        public ?string $codigo_rh,
        public string $nome,
        public ?string $descricao,
        public bool $ativo,
        public ?string $observacao_aso,
        public ?\DateTime $data_de_inicio = null,
        public ?\DateTime $data_fim = null,
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
            $request->input('codigo_rh'),
            $request->input('nome'),
            $request->input('descricao'),
            $request->boolean('ativo'),
            $request->input('observacao_aso'),
            $request->input('data_de_inicio'),
            $request->input('data_fim'),
        );
    }
}
