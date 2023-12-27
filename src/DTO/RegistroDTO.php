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
     */
    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $password,
        public readonly string $password_confirmation,

    ) {
        $this->validate();
    }

    public static function fromRequest(Request $request): self
    {
        return new self(
            name: $request->input('name'),
            email: $request->input('email'),
            password: $request->input('password'),
            password_confirmation: $request->input('password_confirmation'),
        );
    }

    public function validate()
    {
    }
}