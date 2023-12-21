<?php

namespace RweDevs\EsocialApiConnector\DTO;

use Illuminate\Http\Request;

class AtualizarLocalDTO
{
    /**
     * Monta o 'body' da Request de Atualizar Local de Trabalho.
     *
     * @param string|null $codigo Código do local.
     * @param string|null $iniValid Mês e ano de início da validade (formato AAAA-MM).
     * @param string|null  $fimValid Mês e ano de término da validade (formato AAAA-MM, nullable).
     * @param string|null $nmRazao Razão social do local.
     * @param int|null  $tpInsc Tipo de Inscrição.
     * @param int|null  $nrInsc Número de inscrição único.
     * @param string|null $classTrib Classificação tributária do contribuinte.
     * @param string|null $indCoop Indicativo de Cooperativa.
     * @param string|null $indConstr Indicativo de Construtora.
     * @param string|null $indDesFolha Indicativo de Desoneração da Folha.
     * @param string|null $indopccp Indicativo da opção pelo produtor rural pela forma de tributação da contribuição previdenciária.
     * @param string|null $indporte Indicativo de porte da empresa para desoneração da folha.
     * @param string|null $indOptRegEletron Opção pelo registro eletrônico de empregados.
     * @param string|null  $cnpjEFR CNPJ do EFR (nullable).
     * @param string|null  $dttrans11096 Data de transição para Lei 11096 (nullable).
     * @param string|null  $indtribfolhapiscofins Indicativo de tributação para PIS/COFINS (nullable).
     * @param string|null  $natJurid Código da Natureza Jurídica (nullable).
     * @param string|null $multTabRubricas Uso de mais de uma tabela de rubricas.
     * @param string|null  $indEntEd Indicativo de entidade educativa sem fins lucrativos (nullable).
     * @param string|null $indEtt Indicativo de Empresa de Trabalho Temporário.
     * @param string|null  $nrRegEtt Número do registro da Empresa de Trabalho Temporário (nullable).
     * @param string|null $ideMinLei Sigla e nome do Ministério ou Lei.
     * @param string|null $nrCertif Número do Certificado ou Lei.
     * @param string|null $dtEmisCertif Data de Emissão do Certificado ou Lei.
     * @param string|null $dtVencCertif Data de Vencimento do Certificado.
     * @param string|null  $nrProtRenov Protocolo de pedido de renovação (nullable).
     * @param string|null  $dtProtRenov Data do protocolo de renovação (nullable).
     * @param string|null  $dtDou Data de publicação no DOU (nullable).
     * @param int|null  $pagDou Número da página no DOU (nullable).
     * @param string|null $nmCtt Nome do contato na empresa.
     * @param string|null $cpfCtt CPF do contato.
     * @param string|null  $foneFixo Telefone fixo com DDD (nullable).
     * @param string|null  $foneCel Telefone celular com DDD (nullable).
     * @param string|null  $email Endereço eletrônico (nullable).
     * @param string|null $nrSiafi Número SIAFI.
     * @param string|null $ideEFR Identificador de EFR.
     * @param string|null  $website Web site (nullable).
     * @param string|null  $logo Logo (nullable).
     * @param string|null $nmEnte Nome do Ente Federativo vinculado.
     * @param string|null $uf Sigla da Unidade da Federação.
     * @param string|null  $codMunic Código do município IBGE (nullable).
     * @param string|null $indRPPS Indicativo de Regime Próprio de Previdência Social.
     * @param string|null $subteto Poder referente ao subteto.
     * @param float|null  $vrSubteto Valor do subteto do Ente Federativo.
     * @param string|null $indAcordoIsenMulta Acordo internacional para isenção de multa.
     * @param string|null  $indSitPJ Indicador de situação do empregador junto à RFB (nullable).
     * @param string|null  $obs Descrição do Local/Empregador (nullable).
     * @param string|null  $obsPPP Informação do PPP (nullable).
     * @param string|null  $obsASO Informação do ASO (nullable).
     */
    public function __construct(
        public ?string $codigo = null,
        public ?string $iniValid = null,
        public ?string $fimValid = null,
        public ?string $nmRazao = null,
        public ?int $tpInsc = null,
        public ?int $nrInsc = null,
        public ?string $classTrib = null,
        public ?string $indCoop = null,
        public ?string $indConstr = null,
        public ?string $indDesFolha = null,
        public ?string $indopccp = null,
        public ?string $indporte = null,
        public ?string $indOptRegEletron = null,
        public ?string $cnpjEFR = null,
        public ?string $dttrans11096 = null,
        public ?string $indtribfolhapiscofins = null,
        public ?string $natJurid = null,
        public ?string $multTabRubricas = null,
        public ?string $indEntEd = null,
        public ?string $indEtt = null,
        public ?string $nrRegEtt = null,
        public ?string $ideMinLei = null,
        public ?string $nrCertif = null,
        public ?string $dtEmisCertif = null,
        public ?string $dtVencCertif = null,
        public ?string $nrProtRenov = null,
        public ?string $dtProtRenov = null,
        public ?string $dtDou = null,
        public ?int $pagDou = null,
        public ?string $nmCtt = null,
        public ?string $cpfCtt = null,
        public ?string $foneFixo = null,
        public ?string $foneCel = null,
        public ?string $email = null,
        public ?string $nrSiafi = null,
        public ?string $ideEFR = null,
        public ?string $website = null,
        public ?string $logo = null,
        public ?string $nmEnte = null,
        public ?string $uf = null,
        public ?string $codMunic = null,
        public ?string $indRPPS = null,
        public ?string $subteto = null,
        public ?float $vrSubteto = null,
        public ?string $indAcordoIsenMulta = null,
        public ?string $indSitPJ = null,
        public ?string $obs = null,
        public ?string $obsPPP = null,
        public ?string $obsASO = null,
    ) {
        $this->validate();
    }

    public static function fromRequest(Request $request): self
    {
        return new self(
            $request->input('codigo'),
            $request->input('iniValid'),
            $request->input('fimValid'),
            $request->input('nmRazao'),
            $request->input('tpInsc'),
            $request->input('nrInsc'),
            $request->input('classTrib'),
            $request->input('indCoop'),
            $request->input('indConstr'),
            $request->input('indDesFolha'),
            $request->input('indopccp'),
            $request->input('indporte'),
            $request->input('indOptRegEletron'),
            $request->input('cnpjEFR'),
            $request->input('dttrans11096'),
            $request->input('indtribfolhapiscofins'),
            $request->input('natJurid'),
            $request->input('multTabRubricas'),
            $request->input('indEntEd'),
            $request->input('indEtt'),
            $request->input('nrRegEtt'),
            $request->input('ideMinLei'),
            $request->input('nrCertif'),
            $request->input('dtEmisCertif'),
            $request->input('dtVencCertif'),
            $request->input('nrProtRenov'),
            $request->input('dtProtRenov'),
            $request->input('dtDou'),
            $request->input('pagDou'),
            $request->input('nmCtt'),
            $request->input('cpfCtt'),
            $request->input('foneFixo'),
            $request->input('foneCel'),
            $request->input('email'),
            $request->input('nrSiafi'),
            $request->input('ideEFR'),
            $request->input('website'),
            $request->input('logo'),
            $request->input('nmEnte'),
            $request->input('uf'),
            $request->input('codMunic'),
            $request->input('indRPPS'),
            $request->input('subteto'),
            $request->input('vrSubteto'),
            $request->input('indAcordoIsenMulta'),
            $request->input('indSitPJ'),
            $request->input('obs'),
            $request->input('obsPPP'),
            $request->input('obsASO'),
        );
    }

    public function validate()
    {

    }
}
