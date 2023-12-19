<?php

namespace RweDevs\EsocialApiConnector\DTO;

use Illuminate\Http\Request;

class LoginDTO
{
    /**
     * Monta o 'body' da Request de Login
     * 
     * @param string $email Email do usuário.
     * @param string $password Senha do usuário.
     */
    public function __construct(
        public readonly string $email,
        public readonly string $password,
    ) {
        $this->validate();
    }

    public static function fromRequest(Request $request): self
    {
        return new self(
            $request->input('email'),
            $request->input('password'),
        );
    }

    public function validate()
    {
    }
}