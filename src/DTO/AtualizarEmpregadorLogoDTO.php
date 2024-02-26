<?php

namespace RweDevs\EsocialApiConnector\DTO;

use Illuminate\Http\Request;

class AtualizarEmpregadorLogoDTO
{
    /**
     * DTO para atualizar a logo do Empregador.
     * @param $logo Logo do empregador.
     */
    public function __construct(
        public $logo = null,


    ) {
    }

    /**
     * Cria uma instância de AtualizarEmpregadorLogoDTO a partir de uma requisição.
     *
     * @param Request $request A requisição do Laravel.
     * @return self
     */
    public static function fromRequest(Request $request): self
    {
        return new self(
            logo: $request->file('logo')

        );
    }
}
