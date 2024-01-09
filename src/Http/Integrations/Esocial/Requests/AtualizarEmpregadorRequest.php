<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\DTO\AtualizarEmpregadorDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição PUT para atualização de Empregador.
 */
class AtualizarEmpregadorRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::PUT;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Monta o 'body' da Request para atualizar dados de Empregador
     * @param $idEmpregador Id do empregador
     * @param AtualizarEmpregadorDTO $atualizarEmpregadorDTO Recebe um objeto AtualizarEmpregadorDTO que representa o body da requisição.
     */
    public function __construct(
        public string $idEmpregador,
        protected AtualizarEmpregadorDTO $atualizarEmpregadorDTO
    ) {
    }
    protected function defaultBody(): array
    {
        return [
            'tpInsc' => $this->atualizarEmpregadorDTO->tpInsc,
            'nrInsc' => $this->atualizarEmpregadorDTO->nrInsc,
            'nmRazao' => $this->atualizarEmpregadorDTO->nmRazao,
            'iniValid' => $this->atualizarEmpregadorDTO->iniValid,
            'fimValid' => $this->atualizarEmpregadorDTO->fimValid,
            'classTrib' => $this->atualizarEmpregadorDTO->classTrib,
            'indCoop' => $this->atualizarEmpregadorDTO->indCoop,
            'indConstr' => $this->atualizarEmpregadorDTO->indConstr,
            'indDesFolha' => $this->atualizarEmpregadorDTO->indDesFolha,
            'indopccp' => $this->atualizarEmpregadorDTO->indopccp,
            'indporte' => $this->atualizarEmpregadorDTO->indporte,
            'indOptRegEletron' => $this->atualizarEmpregadorDTO->indOptRegEletron,
            'cnpjEFR' => $this->atualizarEmpregadorDTO->cnpjEFR,
            'dttrans11096' => $this->atualizarEmpregadorDTO->dttrans11096,
            'indtribfolhapiscofins' => $this->atualizarEmpregadorDTO->indtribfolhapiscofins,
            'natJurid' => $this->atualizarEmpregadorDTO->natJurid,
            'multTabRubricas' => $this->atualizarEmpregadorDTO->multTabRubricas,
            'indEntEd' => $this->atualizarEmpregadorDTO->indEntEd,
            'indEtt' => $this->atualizarEmpregadorDTO->indEtt,
            'nrRegEtt' => $this->atualizarEmpregadorDTO->nrRegEtt,
            'ideMinLei' => $this->atualizarEmpregadorDTO->ideMinLei,
            'nrCertif' => $this->atualizarEmpregadorDTO->nrCertif,
            'dtEmisCertif' => $this->atualizarEmpregadorDTO->dtEmisCertif,
            'dtVencCertif' => $this->atualizarEmpregadorDTO->dtVencCertif,
            'nrProtRenov' => $this->atualizarEmpregadorDTO->nrProtRenov,
            'dtProtRenov' => $this->atualizarEmpregadorDTO->dtProtRenov,
            'dtDou' => $this->atualizarEmpregadorDTO->dtDou,
            'pagDou' => $this->atualizarEmpregadorDTO->pagDou,
            'nmCtt' => $this->atualizarEmpregadorDTO->nmCtt,
            'cpfCtt' => $this->atualizarEmpregadorDTO->cpfCtt,
            'foneFixo' => $this->atualizarEmpregadorDTO->foneFixo,
            'foneCel' => $this->atualizarEmpregadorDTO->foneCel,
            'email' => $this->atualizarEmpregadorDTO->email,
            'nrSiafi' => $this->atualizarEmpregadorDTO->nrSiafi,
            'ideEFR' => $this->atualizarEmpregadorDTO->ideEFR,
            'website' => $this->atualizarEmpregadorDTO->website,
            'logo' => $this->atualizarEmpregadorDTO->logo,
            'nmEnte' => $this->atualizarEmpregadorDTO->nmEnte,
            'uf' => $this->atualizarEmpregadorDTO->uf,
            'codMunic' => $this->atualizarEmpregadorDTO->codMunic,
            'indRPPS' => $this->atualizarEmpregadorDTO->indRPPS,
            'subteto' => $this->atualizarEmpregadorDTO->subteto,
            'vrSubteto' => $this->atualizarEmpregadorDTO->vrSubteto,
            'indAcordoIsenMulta' => $this->atualizarEmpregadorDTO->indAcordoIsenMulta,
            'indSitPJ' => $this->atualizarEmpregadorDTO->indSitPJ,
            'indSitPF' => $this->atualizarEmpregadorDTO->indSitPF,
            'obs' => $this->atualizarEmpregadorDTO->obs,
            'obsPPP' => $this->atualizarEmpregadorDTO->obsPPP,
            'obsASO' => $this->atualizarEmpregadorDTO->obsASO,
        ];
    }

    public function resolveEndpoint(): string
    {
        return '/empregadores/' . $this->idEmpregador;
    }
}