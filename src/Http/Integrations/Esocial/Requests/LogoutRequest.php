<?php

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Requisição POST para logout de usuário.
 */
class LogoutRequest extends Request
{
    protected Method $method = Method::POST;

    private string $body;

    /**
     * Monta o 'body' da Request
     * 
     * @param string $email Email do usuário.
     * @param string $password Senha do usuário.
     */
    public function __construct(string $email, string $password)
    {
        $this->body = json_encode([
            "email" => $email,
            "password" => $password,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/logout';
    }
}