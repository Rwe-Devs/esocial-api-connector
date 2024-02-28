<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\DTO\AtualizarEmpregadorLogoDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Data\MultipartValue;
use Saloon\Traits\Body\HasMultipartBody;

/**
 * Requisição PUT para atualizar Logo do Empregador.
 */
class AtualizarEmpregadorLogoRequest extends Request implements HasBody
{
    use HasMultipartBody;
    protected Method $method = Method::POST;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Monta o 'body' da Request para atualizar a Logo do Empregador.
     * 
     * @param string $idEmpregador Id do Empregador.
     * @param AtualizarEmpregadorLogoDTO $atualizarLogoEmpregadorDTO Recebe um objeto AtualizarEmpregadorLogoDTO que representa o body da requisição.
     */
    public function __construct(
        public string $idEmpregador,
        protected AtualizarEmpregadorLogoDTO $atualizarLogoEmpregadorDTO
    ) {
    }
    protected function defaultBody(): array
    {
        $name = $this->atualizarLogoEmpregadorDTO->logo->name;
        $value = $this->atualizarLogoEmpregadorDTO->logo->value;

        $multipartValue = new MultipartValue(
            name: 'logo',
            value: $value,
            filename: $name
        
        );

        return [
            'logo' => $multipartValue,

        ];
    }

    public function resolveEndpoint(): string
    {
        return '/empregadores/' . 'imagem/' . $this->idEmpregador;
    }
}
