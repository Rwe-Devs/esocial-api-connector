<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Connector;
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

    private array $bodyArr;

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
        $this->bodyArr = [
            "name" => $name,
            "email" => $email,
            "password" => $password,
            "password_confirmation" => $password_confirmation,
            "tpInsc" => $tpInsc,
            "nrInsc" => $nrInsc
        ];


    }
    protected function defaultBody(): array
    {
        return $this->bodyArr;
    }

    public function resolveEndpoint(): string
    {
        return '/register';
    }
}