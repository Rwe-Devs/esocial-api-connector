<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\DTO\CriarLocalDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição POST para criação de novo Local de Trabalho.
 */
class CriarLocalRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::POST;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Monta o 'body' da Request para criar Local de Trabalho
     * 
     * @param string $idEmpregador Id do Empregador.
     * @param CriarLocalDTO $criarLocalDTO Recebe um objeto CriarLocalDTO que representa o body da requisição.
     */
    public function __construct(
        public string $idEmpregador,
        protected CriarLocalDTO $criarLocalDTO
    ) {
    }
    protected function defaultBody(): array
    {
        return [
            'codigo' => $this->criarLocalDTO->codigo,
            'tpInsc' => $this->criarLocalDTO->tpInsc,
            'nrInsc' => $this->criarLocalDTO->nrInsc,
            'nmRazao' => $this->criarLocalDTO->nmRazao,
            'iniValid' => $this->criarLocalDTO->iniValid,
            'fimValid' => $this->criarLocalDTO->fimValid,
            'classTrib' => $this->criarLocalDTO->classTrib,
            'indCoop' => $this->criarLocalDTO->indCoop,
            'indConstr' => $this->criarLocalDTO->indConstr,
            'indDesFolha' => $this->criarLocalDTO->indDesFolha,
            'indopccp' => $this->criarLocalDTO->indopccp,
            'indporte' => $this->criarLocalDTO->indporte,
            'indOptRegEletron' => $this->criarLocalDTO->indOptRegEletron,
            'cnpjEFR' => $this->criarLocalDTO->cnpjEFR,
            'dttrans11096' => $this->criarLocalDTO->dttrans11096,
            'indtribfolhapiscofins' => $this->criarLocalDTO->indtribfolhapiscofins,
            'natJurid' => $this->criarLocalDTO->natJurid,
            'multTabRubricas' => $this->criarLocalDTO->multTabRubricas,
            'indEntEd' => $this->criarLocalDTO->indEntEd,
            'indEtt' => $this->criarLocalDTO->indEtt,
            'nrRegEtt' => $this->criarLocalDTO->nrRegEtt,
            'ideMinLei' => $this->criarLocalDTO->ideMinLei,
            'nrCertif' => $this->criarLocalDTO->nrCertif,
            'dtEmisCertif' => $this->criarLocalDTO->dtEmisCertif,
            'dtVencCertif' => $this->criarLocalDTO->dtVencCertif,
            'nrProtRenov' => $this->criarLocalDTO->nrProtRenov,
            'dtProtRenov' => $this->criarLocalDTO->dtProtRenov,
            'dtDou' => $this->criarLocalDTO->dtDou,
            'pagDou' => $this->criarLocalDTO->pagDou,
            'nmCtt' => $this->criarLocalDTO->nmCtt,
            'cpfCtt' => $this->criarLocalDTO->cpfCtt,
            'foneFixo' => $this->criarLocalDTO->foneFixo,
            'foneCel' => $this->criarLocalDTO->foneCel,
            'email' => $this->criarLocalDTO->email,
            'nrSiafi' => $this->criarLocalDTO->nrSiafi,
            'ideEFR' => $this->criarLocalDTO->ideEFR,
            'website' => $this->criarLocalDTO->website,
            'logo' => $this->criarLocalDTO->logo,
            'nmEnte' => $this->criarLocalDTO->nmEnte,
            'uf' => $this->criarLocalDTO->uf,
            'codMunic' => $this->criarLocalDTO->codMunic,
            'indRPPS' => $this->criarLocalDTO->indRPPS,
            'subteto' => $this->criarLocalDTO->subteto,
            'vrSubteto' => $this->criarLocalDTO->vrSubteto,
            'indAcordoIsenMulta' => $this->criarLocalDTO->indAcordoIsenMulta,
            'indSitPJ' => $this->criarLocalDTO->indSitPJ,
            'indSitPF' => $this->criarLocalDTO->indSitPF,
            'obs' => $this->criarLocalDTO->obs,
            'obsPPP' => $this->criarLocalDTO->obsPPP,
            'obsASO' => $this->criarLocalDTO->obsASO,
        ];
    }

    public function resolveEndpoint(): string
    {
        return '/empregador/' . $this->idEmpregador . '/local';
    }
}