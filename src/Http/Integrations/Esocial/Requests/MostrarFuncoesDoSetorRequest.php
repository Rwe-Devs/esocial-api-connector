<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\DTO\MostrarFuncoesDoSetorDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição POST para mostrar as Funções de vários Setores a partir das Grades Funcionais.
 */
class MostrarFuncoesDoSetorRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::POST;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Monta o 'body' da Request para mostrar as Funções de vários Setores a partir das Grades Funcionais.
     * 
     * @param string $idEmpregador Id do Empregador.
     * @param MostrarFuncoesDoSetorDTO $mostrarFuncoesDoSetorDTO Recebe um objeto MostrarFuncoesDoSetorDTO que representa o body da requisição.
     */
    public function __construct(
        public string $idEmpregador,
        protected MostrarFuncoesDoSetorDTO $mostrarFuncoesDoSetorDTO
    ) {
    }
    protected function defaultBody(): array
    {
        return [
            'idLocal' => $this->mostrarFuncoesDoSetorDTO->idLocal,
            'setores' => $this->mostrarFuncoesDoSetorDTO->setores,

        ];
    }

    public function resolveEndpoint(): string
    {
        return '/empregador/' . $this->idEmpregador . '/setor/funcoes';
    }
}