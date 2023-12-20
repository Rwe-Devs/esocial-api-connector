<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\DTO\CriarEmpregadorDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição POST para registro de novo usuário.
 */
class CriarEmpregadorRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::POST;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Monta o 'body' da Request para criar Empregador
     * 
     * @param CriarEmpregadorDTO $criarEmpregadorDTO Recebe um objeto CriarEmpregadorDTO que representa o body da requisição.
     */
    public function __construct(
        protected CriarEmpregadorDTO $criarEmpregadorDTO
    ) {
    }
    protected function defaultBody(): array
    {
        return [
            'tpInsc' => $this->criarEmpregadorDTO->tpInsc,
            'nrInsc' => $this->criarEmpregadorDTO->nrInsc,
            'nmRazao' => $this->criarEmpregadorDTO->nmRazao,
            'iniValid' => $this->criarEmpregadorDTO->iniValid,
            'fimValid' => $this->criarEmpregadorDTO->fimValid,
            'classTrib' => $this->criarEmpregadorDTO->classTrib,
            'indCoop' => $this->criarEmpregadorDTO->indCoop,
            'indConstr' => $this->criarEmpregadorDTO->indConstr,
            'indDesFolha' => $this->criarEmpregadorDTO->indDesFolha,
            'indopccp' => $this->criarEmpregadorDTO->indopccp,
            'indporte' => $this->criarEmpregadorDTO->indporte,
            'indOptRegEletron' => $this->criarEmpregadorDTO->indOptRegEletron,
            'cnpjEFR' => $this->criarEmpregadorDTO->cnpjEFR,
            'dttrans11096' => $this->criarEmpregadorDTO->dttrans11096,
            'indtribfolhapiscofins' => $this->criarEmpregadorDTO->indtribfolhapiscofins,
            'natJurid' => $this->criarEmpregadorDTO->natJurid,
            'multTabRubricas' => $this->criarEmpregadorDTO->multTabRubricas,
            'indEntEd' => $this->criarEmpregadorDTO->indEntEd,
            'indEtt' => $this->criarEmpregadorDTO->indEtt,
            'nrRegEtt' => $this->criarEmpregadorDTO->nrRegEtt,
            'ideMinLei' => $this->criarEmpregadorDTO->ideMinLei,
            'nrCertif' => $this->criarEmpregadorDTO->nrCertif,
            'dtEmisCertif' => $this->criarEmpregadorDTO->dtEmisCertif,
            'dtVencCertif' => $this->criarEmpregadorDTO->dtVencCertif,
            'nrProtRenov' => $this->criarEmpregadorDTO->nrProtRenov,
            'dtProtRenov' => $this->criarEmpregadorDTO->dtProtRenov,
            'dtDou' => $this->criarEmpregadorDTO->dtDou,
            'pagDou' => $this->criarEmpregadorDTO->pagDou,
            'nmCtt' => $this->criarEmpregadorDTO->nmCtt,
            'cpfCtt' => $this->criarEmpregadorDTO->cpfCtt,
            'foneFixo' => $this->criarEmpregadorDTO->foneFixo,
            'foneCel' => $this->criarEmpregadorDTO->foneCel,
            'email' => $this->criarEmpregadorDTO->email,
            'nrSiafi' => $this->criarEmpregadorDTO->nrSiafi,
            'ideEFR' => $this->criarEmpregadorDTO->ideEFR,
            'website' => $this->criarEmpregadorDTO->website,
            'logo' => $this->criarEmpregadorDTO->logo,
            'nmEnte' => $this->criarEmpregadorDTO->nmEnte,
            'uf' => $this->criarEmpregadorDTO->uf,
            'codMunic' => $this->criarEmpregadorDTO->codMunic,
            'indRPPS' => $this->criarEmpregadorDTO->indRPPS,
            'subteto' => $this->criarEmpregadorDTO->subteto,
            'vrSubteto' => $this->criarEmpregadorDTO->vrSubteto,
            'indAcordoIsenMulta' => $this->criarEmpregadorDTO->indAcordoIsenMulta,
            'indSitPJ' => $this->criarEmpregadorDTO->indSitPJ,
            'obs' => $this->criarEmpregadorDTO->obs,
            'obsPPP' => $this->criarEmpregadorDTO->obsPPP,
            'obsASO' => $this->criarEmpregadorDTO->obsASO,
        ];
    }

    public function resolveEndpoint(): string
    {
        return '/empregadores';
    }
}