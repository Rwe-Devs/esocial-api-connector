<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\DTO\RegistroDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição POST para registro de novo usuário.
 */
class RegistroRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::POST;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Monta o 'body' da Request de Registro
     * 
     * @param RegistroDTO $registroDTO Recebe um objeto RegistroDTO que representa o body da requisição.
     */
    public function __construct(
        protected RegistroDTO $registroDTO
    ) {
    }
    protected function defaultBody(): array
    {
        return [
            'name' => $this->registroDTO->name,
            'email' => $this->registroDTO->email,
            'password' => $this->registroDTO->password,
            'password_confirmation' => $this->registroDTO->password_confirmation,
            'tpInsc' => $this->registroDTO->tpInsc,
            'nrInsc' => $this->registroDTO->nrInsc,
        ];
    }

    public function resolveEndpoint(): string
    {
        return '/register';
    }
}