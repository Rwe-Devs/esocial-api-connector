<?php

namespace RweDevs\EsocialApiConnector\Esocial\Requests;

use RweDevs\EsocialApiConnector\DTO\AtualizarLocalDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Requisição PUT para atualização de um Local de Trabalho.
 */
class AtualizarLocalRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::PUT;
    protected ?string $connector = EsocialConnector::class;


    /**
     * Monta o 'body' da Request para atualizar Local de Trabalho
     * 
     * @param string $idEmpregador Id do Empregador.
     * @param string $idLocal Id do Local de Trabalho a ser alterado.
     * @param AtualizarLocalDTO $atualizarLocalDTO Recebe um objeto AtualizarLocalDTO que representa o body da requisição.
     */
    public function __construct(
        public string $idEmpregador,
        public string $idLocal,
        protected AtualizarLocalDTO $atualizarLocalDTO
    ) {
    }
    protected function defaultBody(): array
    {
        return [
            'codigo' => $this->atualizarLocalDTO->codigo,
            'tpInsc' => $this->atualizarLocalDTO->tpInsc,
            'nrInsc' => $this->atualizarLocalDTO->nrInsc,
            'nmRazao' => $this->atualizarLocalDTO->nmRazao,
            'iniValid' => $this->atualizarLocalDTO->iniValid,
            'fimValid' => $this->atualizarLocalDTO->fimValid,
            'classTrib' => $this->atualizarLocalDTO->classTrib,
            'indCoop' => $this->atualizarLocalDTO->indCoop,
            'indConstr' => $this->atualizarLocalDTO->indConstr,
            'indDesFolha' => $this->atualizarLocalDTO->indDesFolha,
            'indopccp' => $this->atualizarLocalDTO->indopccp,
            'indporte' => $this->atualizarLocalDTO->indporte,
            'indOptRegEletron' => $this->atualizarLocalDTO->indOptRegEletron,
            'cnpjEFR' => $this->atualizarLocalDTO->cnpjEFR,
            'dttrans11096' => $this->atualizarLocalDTO->dttrans11096,
            'indtribfolhapiscofins' => $this->atualizarLocalDTO->indtribfolhapiscofins,
            'natJurid' => $this->atualizarLocalDTO->natJurid,
            'multTabRubricas' => $this->atualizarLocalDTO->multTabRubricas,
            'indEntEd' => $this->atualizarLocalDTO->indEntEd,
            'indEtt' => $this->atualizarLocalDTO->indEtt,
            'nrRegEtt' => $this->atualizarLocalDTO->nrRegEtt,
            'ideMinLei' => $this->atualizarLocalDTO->ideMinLei,
            'nrCertif' => $this->atualizarLocalDTO->nrCertif,
            'dtEmisCertif' => $this->atualizarLocalDTO->dtEmisCertif,
            'dtVencCertif' => $this->atualizarLocalDTO->dtVencCertif,
            'nrProtRenov' => $this->atualizarLocalDTO->nrProtRenov,
            'dtProtRenov' => $this->atualizarLocalDTO->dtProtRenov,
            'dtDou' => $this->atualizarLocalDTO->dtDou,
            'pagDou' => $this->atualizarLocalDTO->pagDou,
            'nmCtt' => $this->atualizarLocalDTO->nmCtt,
            'cpfCtt' => $this->atualizarLocalDTO->cpfCtt,
            'foneFixo' => $this->atualizarLocalDTO->foneFixo,
            'foneCel' => $this->atualizarLocalDTO->foneCel,
            'email' => $this->atualizarLocalDTO->email,
            'nrSiafi' => $this->atualizarLocalDTO->nrSiafi,
            'ideEFR' => $this->atualizarLocalDTO->ideEFR,
            'website' => $this->atualizarLocalDTO->website,
            'logo' => $this->atualizarLocalDTO->logo,
            'nmEnte' => $this->atualizarLocalDTO->nmEnte,
            'uf' => $this->atualizarLocalDTO->uf,
            'codMunic' => $this->atualizarLocalDTO->codMunic,
            'indRPPS' => $this->atualizarLocalDTO->indRPPS,
            'subteto' => $this->atualizarLocalDTO->subteto,
            'vrSubteto' => $this->atualizarLocalDTO->vrSubteto,
            'indAcordoIsenMulta' => $this->atualizarLocalDTO->indAcordoIsenMulta,
            'indSitPJ' => $this->atualizarLocalDTO->indSitPJ,
            'indSitPF' => $this->atualizarLocalDTO->indSitPF,
            'obs' => $this->atualizarLocalDTO->obs,
            'obsPPP' => $this->atualizarLocalDTO->obsPPP,
            'obsASO' => $this->atualizarLocalDTO->obsASO,
        ];
    }

    public function resolveEndpoint(): string
    {
        return '/empregador/' . $this->idEmpregador . '/local/' . $this->idLocal;
    }
}