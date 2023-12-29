<?php

namespace RweDevs\EsocialApiConnector\DTO;

use Illuminate\Http\Request;

class AtualizarGradeFuncionalDTO
{
    /**
     * DTO para atualizar Grade Funcional.
     *
     * @param string|null $nome Nome da Grade Funcional.
     * @param string|null $ambiente_id Id do Ambiente.
     * @param string|null $funcao_id Id da Função (opcional).
     */
    public function __construct(
        public ?string $nome,
        public ?string $ambiente_id,
        public ?string $funcao_id = null,
    ) {
    }

    /**
     * Cria uma instância de AtualizarGradeFuncionalDTO a partir de uma requisição.
     *
     * @param Request $request A requisição do Laravel.
     * @return self
     */
    public static function fromRequest(Request $request): self
    {
        return new self(
            nome: $request->input('nome'),
            ambiente_id: $request->input('ambiente_id'),
            funcao_id: $request->input('funcao_id'),
        );
    }
}
