<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição POST para logout de usuário.
 */
class LogoutRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::POST;
    protected ?string $connector = EsocialConnector::class;


    private array $bodyArr;

    /**
     * Monta o 'body' da Request
     * 
     * @param string $email Email do usuário.
     * @param string $password Senha do usuário.
     */
    public function __construct(string $email, string $password)
    {
        $this->bodyArr = [
            "email" => $email,
            "password" => $password,
        ];
    }
    protected function defaultBody(): array
    {
        return $this->bodyArr;
    }

    public function resolveEndpoint(): string
    {
        return '/logout';
    }
}