<?php

namespace RweDevs\EsocialApiConnector\DTO;

use Illuminate\Http\Request;

class RegistroDTO
{
    /**
     * Monta o 'body' da Request de Registro
     * 
     * @param string $name Nome do usuário.
     * @param string $email Email do usuário.
     * @param string $password Senha do usuário.
     * @param string $password_confirmation Confirmação de senha do usuário.
     * @param int $tpInsc Tipo de Inscrição. 0 ou 1.
     * @param int $nrInsc Número de inscrição.
     */
    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $password,
        public readonly string $password_confirmation,
        public readonly int $tpInsc,
        public readonly int $nrInsc
    ) {
        $this->validate();
    }

    public static function fromRequest(Request $request): self
    {
        return new self(
            $request->input('name'),
            $request->input('email'),
            $request->input('password'),
            $request->input('password_confirmation'),
            $request->input('tpInsc'),
            $request->input('nrInsc'),
        );
    }

    public function validate()
    {
    }
}