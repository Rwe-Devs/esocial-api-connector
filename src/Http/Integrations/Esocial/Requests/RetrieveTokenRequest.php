<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição POST para obter o Token do Passport.
 */
class RetrieveTokenRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::POST;
    protected ?string $connector = EsocialConnector::class;

    private array $bodyArr;

    /**
     * Monta o 'body' da Request
     * 
     * @param string $grant_type Credenciais do cliente.
     * @param string $client_id Id de cliente.
     * @param string $client_secret Chave secreta do cliente.
     * @param string $scope Escopo.
     */
    public function __construct(string $grant_type,
        string $client_id,
        string $client_secret,
        string $scope
    ) {
        $this->bodyArr = [
            "grant_type" => $grant_type,
            "client_id" => $client_id,
            "client_secret" => $client_secret,
            "scope" => $scope,
        ];


    }
    protected function defaultBody(): array
    {
        return $this->bodyArr;
    }

    public function resolveEndpoint(): string
    {
        return '/oauth/token';
    }
}