<?php

namespace RweDevs\EsocialApiConnector\DTO;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AtualizarEmpregadorDTO
{
    /**
     * Monta o 'body' da Request de Atualizar Empregador.
     *
     * @param int|null $tpInsc Tipo de Inscrição. 0 ou 1.
     * @param int|null $nrInsc Número de Inscrição único.
     * @param string|null $nmRazao Nome ou Razão Social do empregador.
     * @param string|null $iniValid Mês e ano de início da validade (formato AAAA-MM).
     * @param string|null $fimValid Mês e ano de término da validade (formato AAAA-MM, nullable).
     * @param string|null $classTrib Classificação tributária do contribuinte.
     * @param string|null $indCoop Indicativo de Cooperativa.
     * @param string|null $indConstr Indicativo de Construtora.
     * @param string|null $indDesFolha Indicativo de Desoneração da Folha.
     * @param string|null $indopccp Indicativo da opção pelo produtor rural pela forma de tributação da contribuição previdenciária.
     * @param string|null $indporte Indicativo de porte da empresa para desoneração da folha.
     * @param string|null $indOptRegEletron Opção pelo registro eletrônico de empregados.
     * @param string|null $cnpjEFR CNPJ do Ente Federativo Responsável (EFR, nullable).
     * @param string|null $dttrans11096 Data de transição para Lei 11096 (formato AAAA-MM-DD, nullable).
     * @param string|null $indtribfolhapiscofins Indicativo de tributação para PIS/COFINS (nullable).
     * @param string|null $natJurid Código da Natureza Jurídica (nullable).
     * @param string|null $multTabRubricas Uso de mais de uma tabela de rubricas.
     * @param string|null $indEntEd Indicativo de entidade educativa sem fins lucrativos (nullable).
     * @param string|null $indEtt Indicativo de Empresa de Trabalho Temporário.
     * @param string|null $nrRegEtt Número do registro da Empresa de Trabalho Temporário (nullable).
     * @param string|null $ideMinLei Sigla e nome do Ministério ou Lei.
     * @param string|null $nrCertif Número do Certificado ou Lei.
     * @param string|null $dtEmisCertif Data de Emissão do Certificado ou Lei (formato AAAA-MM-DD).
     * @param string|null $dtVencCertif Data de Vencimento do Certificado (formato AAAA-MM-DD).
     * @param string|null $nrProtRenov Protocolo de pedido de renovação (nullable).
     * @param string|null $dtProtRenov Data do protocolo de renovação (formato AAAA-MM-DD, nullable).
     * @param string|null $dtDou Data de publicação no DOU (formato AAAA-MM-DD, nullable).
     * @param int|null $pagDou Número da página no DOU (nullable).
     * @param string|null $nmCtt Nome do contato na empresa.
     * @param string|null $cpfCtt CPF do contato.
     * @param string|null $foneFixo Telefone fixo com DDD (nullable).
     * @param string|null $foneCel Telefone celular com DDD (nullable).
     * @param string|null $email Endereço eletrônico (nullable).
     * @param string|null $nrSiafi Número SIAFI.
     * @param string|null $ideEFR Identificador de EFR.
     * @param string|null $website Web site (nullable).
     * @param string|null $logo Logo (nullable).
     * @param string|null $nmEnte Nome do Ente Federativo vinculado.
     * @param string|null $uf Sigla da Unidade da Federação.
     * @param string|null $codMunic Código do município IBGE (nullable).
     * @param string|null $indRPPS Indicativo de Regime Próprio de Previdência Social.
     * @param string|null $subteto Poder referente ao subteto.
     * @param float|null $vrSubteto Valor do subteto do Ente Federativo.
     * @param string|null $indAcordoIsenMulta Acordo internacional para isenção de multa.
     * @param string|null $indSitPJ Indicador de situação do empregador junto à RFB (nullable).
     * @param string|null $indSitPF Indicativo da Situação da Pessoa Física (nullable).
     * @param string|null $obs Descrição do Local/Empregador (nullable).
     * @param string|null $obsPPP Informação do PPP (nullable).
     * @param string|null $obsASO Informação do ASO (nullable).
     */
    public function __construct(
        public readonly ?int $tpInsc = null,
        public readonly ?int $nrInsc = null,
        public readonly ?string $nmRazao = null,
        public readonly ?string $iniValid = null,
        public readonly ?string $fimValid = null,
        public readonly ?string $classTrib = null,
        public readonly ?string $indCoop = null,
        public readonly ?string $indConstr = null,
        public readonly ?string $indDesFolha = null,
        public readonly ?string $indopccp = null,
        public readonly ?string $indporte = null,
        public readonly ?string $indOptRegEletron = null,
        public readonly ?string $cnpjEFR = null,
        public readonly ?string $dttrans11096 = null,
        public readonly ?string $indtribfolhapiscofins = null,
        public readonly ?string $natJurid = null,
        public readonly ?string $multTabRubricas = null,
        public readonly ?string $indEntEd = null,
        public readonly ?string $indEtt = null,
        public readonly ?string $nrRegEtt = null,
        public readonly ?string $ideMinLei = null,
        public readonly ?string $nrCertif = null,
        public readonly ?string $dtEmisCertif = null,
        public readonly ?string $dtVencCertif = null,
        public readonly ?string $nrProtRenov = null,
        public readonly ?string $dtProtRenov = null,
        public readonly ?string $dtDou = null,
        public readonly ?int $pagDou = null,
        public readonly ?string $nmCtt = null,
        public readonly ?string $cpfCtt = null,
        public readonly ?string $foneFixo = null,
        public readonly ?string $foneCel = null,
        public readonly ?string $email = null,
        public readonly ?string $nrSiafi = null,
        public readonly ?string $ideEFR = null,
        public readonly ?string $website = null,
        public readonly ?string $logo = null,
        public readonly ?string $nmEnte = null,
        public readonly ?string $uf = null,
        public readonly ?string $codMunic = null,
        public readonly ?string $indRPPS = null,
        public readonly ?string $subteto = null,
        public readonly ?float $vrSubteto = null,
        public readonly ?string $indAcordoIsenMulta = null,
        public readonly ?string $indSitPJ = null,
        public readonly ?string $indSitPF = null,
        public readonly ?string $obs = null,
        public readonly ?string $obsPPP = null,
        public readonly ?string $obsASO = null,
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
