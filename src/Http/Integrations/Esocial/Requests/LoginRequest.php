<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\DTO\LoginDTO;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição POST para login de usuário.
 */
class LoginRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::POST;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Monta o 'body' da Request
     * 
     * @param LoginDTO $loginDTO Recebe um objeto RegistroDTO que representa o body da requisição.
     */
    public function __construct(protected LoginDTO $loginDTO)
    {
    }
    protected function defaultBody(): array
    {
        return [
            'email' => $this->loginDTO->email,
            'password' => $this->loginDTO->password,
        ];
    }

    public function resolveEndpoint(): string
    {
        return '/login';
    }
}