<?php

namespace RweDevs\EsocialApiConnector\DTO;

use Illuminate\Http\Request;

class CriarFuncaoDTO
{
    /**
     * DTO para criar uma nova função.
     * 
     * @param string $codigo Código da função.
     * @param string $nome Nome da função.
     * @param string $cbo Código Brasileiro de Ocupações da função.
     * @param string|null $atividade Atividades da função (opcional).
     * @param string|null $requisitos Requisitos da função (opcional).
     * @param string|null $data_de_inicio Data de início da função (opcional).
     * @param string|null $data_fim Data de término da função (opcional).
     */
    public function __construct(
        public string $codigo,
        public string $nome,
        public string $cbo,
        public ?string $atividade = null,
        public ?string $requisitos = null,
        public ?string $data_de_inicio = null,
        public ?string $data_fim = null,
    ) {
    }

    /**
     * Cria uma instância de CriarFuncaoDTO a partir de uma requisição.
     *
     * @param Request $request A requisição do Laravel.
     * @return self
     */
    public static function fromRequest(Request $request): self
    {
        return new self(
            codigo: $request->input('codigo'),
            nome: $request->input('nome'),
            cbo: $request->input('cbo'),
            atividade: $request->input('atividade'),
            requisitos: $request->input('requisitos'),
            data_de_inicio: $request->input('data_de_inicio'),
            data_fim: $request->input('data_fim'),
        );
    }
}
