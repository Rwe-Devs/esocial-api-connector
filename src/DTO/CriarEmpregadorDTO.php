<?php

namespace RweDevs\EsocialApiConnector\DTO;


use Illuminate\Http\Request;

class CriarEmpregadorDTO
{
    /**
     * Monta o 'body' da Request de Criar Empregador.
     *
     * @param int $tpInsc Tipo de Inscrição. 0 ou 1.
     * @param string $nrInsc Número de Inscrição único.
     * @param string $nmRazao Nome ou Razão Social do empregador.
     * @param string $iniValid Mês e ano de início da validade (formato AAAA-MM).
     * @param string|null $fimValid Mês e ano de término da validade (formato AAAA-MM, nullable).
     * @param string $classTrib Classificação tributária do contribuinte.
     * @param string $indCoop Indicativo de Cooperativa.
     * @param string $indConstr Indicativo de Construtora.
     * @param string $indDesFolha Indicativo de Desoneração da Folha.
     * @param string $indopccp Indicativo da opção pelo produtor rural pela forma de tributação da contribuição previdenciária.
     * @param string $indporte Indicativo de porte da empresa para desoneração da folha.
     * @param string $indOptRegEletron Opção pelo registro eletrônico de empregados.
     * @param string|null $cnpjEFR CNPJ do Ente Federativo Responsável (EFR, nullable).
     * @param string|null $dttrans11096 Data de transição para Lei 11096 (formato AAAA-MM-DD, nullable).
     * @param string|null $indtribfolhapiscofins Indicativo de tributação para PIS/COFINS (nullable).
     * @param string|null $natJurid Código da Natureza Jurídica (nullable).
     * @param string $multTabRubricas Uso de mais de uma tabela de rubricas.
     * @param string|null $indEntEd Indicativo de entidade educativa sem fins lucrativos (nullable).
     * @param string $indEtt Indicativo de Empresa de Trabalho Temporário.
     * @param string|null $nrRegEtt Número do registro da Empresa de Trabalho Temporário (nullable).
     * @param string $ideMinLei Sigla e nome do Ministério ou Lei.
     * @param string $nrCertif Número do Certificado ou Lei.
     * @param string $dtEmisCertif Data de Emissão do Certificado ou Lei (formato AAAA-MM-DD).
     * @param string $dtVencCertif Data de Vencimento do Certificado (formato AAAA-MM-DD).
     * @param string|null $nrProtRenov Protocolo de pedido de renovação (nullable).
     * @param string|null $dtProtRenov Data do protocolo de renovação (formato AAAA-MM-DD, nullable).
     * @param string|null $dtDou Data de publicação no DOU (formato AAAA-MM-DD, nullable).
     * @param int|null $pagDou Número da página no DOU (nullable).
     * @param string $nmCtt Nome do contato na empresa.
     * @param string $cpfCtt CPF do contato.
     * @param string|null $foneFixo Telefone fixo com DDD (nullable).
     * @param string|null $foneCel Telefone celular com DDD (nullable).
     * @param string|null $email Endereço eletrônico (nullable).
     * @param string $nrSiafi Número SIAFI.
     * @param string $ideEFR Identificador de EFR.
     * @param string|null $website Web site (nullable).
     * @param string|null $logo Logo (nullable).
     * @param string $nmEnte Nome do Ente Federativo vinculado.
     * @param string $uf Sigla da Unidade da Federação.
     * @param string|null $codMunic Código do município IBGE (nullable).
     * @param string $indRPPS Indicativo de Regime Próprio de Previdência Social.
     * @param string $subteto Poder referente ao subteto.
     * @param float $vrSubteto Valor do subteto do Ente Federativo.
     * @param string $indAcordoIsenMulta Acordo internacional para isenção de multa.
     * @param string|null $indSitPJ Indicador de situação do empregador junto à RFB (nullable).
     * @param string|null $indSitPF Indicativo da Situação da Pessoa Física (nullable).
     * @param string|null $obs Descrição do Local/Empregador (nullable).
     * @param string|null $obsPPP Informação do PPP (nullable).
     * @param string|null $obsASO Informação do ASO (nullable).
     */
    public function __construct(
        public readonly int $tpInsc,
        public readonly string $nrInsc,
        public readonly string $nmRazao,
        public readonly string $iniValid,
        public readonly ?string $fimValid,
        public readonly string $classTrib,
        public readonly string $indCoop,
        public readonly string $indConstr,
        public readonly string $indDesFolha,
        public readonly string $indopccp,
        public readonly string $indporte,
        public readonly string $indOptRegEletron,
        public readonly ?string $cnpjEFR,
        public readonly ?string $dttrans11096,
        public readonly ?string $indtribfolhapiscofins,
        public readonly ?string $natJurid,
        public readonly string $multTabRubricas,
        public readonly ?string $indEntEd,
        public readonly string $indEtt,
        public readonly ?string $nrRegEtt,
        public readonly string $ideMinLei,
        public readonly string $nrCertif,
        public readonly string $dtEmisCertif,
        public readonly string $dtVencCertif,
        public readonly ?string $nrProtRenov,
        public readonly ?string $dtProtRenov,
        public readonly ?string $dtDou,
        public readonly ?int $pagDou,
        public readonly string $nmCtt,
        public readonly string $cpfCtt,
        public readonly ?string $foneFixo,
        public readonly ?string $foneCel,
        public readonly ?string $email,
        public readonly string $nrSiafi,
        public readonly string $ideEFR,
        public readonly ?string $website,
        public readonly ?string $logo,
        public readonly string $nmEnte,
        public readonly string $uf,
        public readonly ?string $codMunic,
        public readonly string $indRPPS,
        public readonly string $subteto,
        public readonly float $vrSubteto,
        public readonly string $indAcordoIsenMulta,
        public readonly ?string $indSitPJ,
        public readonly ?string $indSitPF,
        public readonly ?string $obs,
        public readonly ?string $obsPPP,
        public readonly ?string $obsASO
    ) {
        $this->validate();
    }

    public static function fromRequest(Request $request): self
    {
        return new self(
            tpInsc: $request->input('tpInsc'),
            nrInsc: $request->input('nrInsc'),
            nmRazao: $request->input('nmRazao'),
            iniValid: $request->input('iniValid'),
            fimValid: $request->input('fimValid'),
            classTrib: $request->input('classTrib'),
            indCoop: $request->input('indCoop'),
            indConstr: $request->input('indConstr'),
            indDesFolha: $request->input('indDesFolha'),
            indopccp: $request->input('indopccp'),
            indporte: $request->input('indporte'),
            indOptRegEletron: $request->input('indOptRegEletron'),
            cnpjEFR: $request->input('cnpjEFR'),
            dttrans11096: $request->input('dttrans11096'),
            indtribfolhapiscofins: $request->input('indtribfolhapiscofins'),
            natJurid: $request->input('natJurid'),
            multTabRubricas: $request->input('multTabRubricas'),
            indEntEd: $request->input('indEntEd'),
            indEtt: $request->input('indEtt'),
            nrRegEtt: $request->input('nrRegEtt'),
            ideMinLei: $request->input('ideMinLei'),
            nrCertif: $request->input('nrCertif'),
            dtEmisCertif: $request->input('dtEmisCertif'),
            dtVencCertif: $request->input('dtVencCertif'),
            nrProtRenov: $request->input('nrProtRenov'),
            dtProtRenov: $request->input('dtProtRenov'),
            dtDou: $request->input('dtDou'),
            pagDou: $request->input('pagDou'),
            nmCtt: $request->input('nmCtt'),
            cpfCtt: $request->input('cpfCtt'),
            foneFixo: $request->input('foneFixo'),
            foneCel: $request->input('foneCel'),
            email: $request->input('email'),
            nrSiafi: $request->input('nrSiafi'),
            ideEFR: $request->input('ideEFR'),
            website: $request->input('website'),
            logo: $request->input('logo'),
            nmEnte: $request->input('nmEnte'),
            uf: $request->input('uf'),
            codMunic: $request->input('codMunic'),
            indRPPS: $request->input('indRPPS'),
            subteto: $request->input('subteto'),
            vrSubteto: $request->input('vrSubteto'),
            indAcordoIsenMulta: $request->input('indAcordoIsenMulta'),
            indSitPJ: $request->input('indSitPJ'),
            indSitPF: $request->input('indSitPF'),
            obs: $request->input('obs'),
            obsPPP: $request->input('obsPPP'),
            obsASO: $request->input('obsASO')
        );
    }

    public function validate()
    {

    }
}
