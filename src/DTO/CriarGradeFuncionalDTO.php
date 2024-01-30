<?php

namespace RweDevs\EsocialApiConnector\DTO;

use Illuminate\Http\Request;

class CriarGradeFuncionalDTO
{
    /**
     * DTO para criar uma nova Grade Funcional.
     *
     * @param string $nome Nome da Grade Funcional.
     * @param string $setor_id Id do Setor.
     * @param array|null $funcoes Array de id das Funções (opcional).
     */
    public function __construct(
        public string $nome,
        public string $setor_id,
        public ?array $funcoes = null,
    ) {
    }

    /**
     * Cria uma instância de CriarGradeFuncionalDTO a partir de uma requisição.
     *
     * @param Request $request A requisição do Laravel.
     * @return self
     */
    public static function fromRequest(Request $request): self
    {
        return new self(
            nome: $request->input('nome'),
            setor_id: $request->input('setor_id'),
            funcoes: $request->input('funcoes'),
        );
    }
}
