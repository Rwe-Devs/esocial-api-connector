<?php

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Requisição POST para registro de novo usuário.
 */
class RegisterRequest extends Request
{
    protected Method $method = Method::POST;

    private string $body;

    /**
     * Monta o 'body' da Request
     * 
     * @param string $name Nome do usuário.
     * @param string $email Email do usuário.
     * @param string $password Senha do usuário.
     * @param string $password_confirmation Confirmação de senha do usuário.
     * @param int $tpInsc Tipo de Inscrição. 0 ou 1.
     * @param int $nrInsc Número de inscrição.
     */
    public function __construct(string $name,
        string $email,
        string $password,
        string $password_confirmation,
        int $tpInsc,
        int $nrInsc)
    {
        $this->body = json_encode([
            "name" => $name,
            "email" => $email,
            "password" => $password,
            "password_confirmation" => $password_confirmation,
            "tpInsc" => $tpInsc,
            "nrInsc" => $nrInsc
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/register';
    }
}