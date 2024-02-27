<?php

namespace RweDevs\EsocialApiConnector\DTO;

use Illuminate\Http\Request;

class MostrarFuncoesDoSetorDTO
{
    /**
     * DTO para mostrar as funções de vários Setores a partir das Grades Funcionais.
     * 
     * @param string $idLocal Id do Local de Trabalho.
     * @param array $setores Array de setores.
     */
    public function __construct(
        public string $idLocal,
        public array $setores,

    ) {
    }

    /**
     * Cria uma instância de MostrarFuncoesDoSetorDTO a partir de uma requisição.
     *
     * @param Request $request A requisição do Laravel.
     * @return self
     */
    public static function fromRequest(Request $request): self
    {
        return new self(
            idLocal: $request->input('idLocal'),
            setores: $request->input('setores'),

        );
    }
}
