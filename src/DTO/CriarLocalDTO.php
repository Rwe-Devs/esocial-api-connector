<?php

namespace RweDevs\EsocialApiConnector\DTO;

use Illuminate\Http\Request;

class CriarLocalDTO
{
    /**
     * Monta o 'body' da Request de Criar Local de Trabalho.
     *
     * @param string $codigo Código do local.
     * @param string $iniValid Mês e ano de início da validade (formato AAAA-MM).
     * @param string|null $fimValid Mês e ano de término da validade (formato AAAA-MM, nullable).
     * @param string $nmRazao Razão social do local.
     * @param int $tpInsc Tipo de Inscrição.
     * @param int $nrInsc Número de inscrição único.
     * @param string $classTrib Classificação tributária do contribuinte.
     * @param string $indCoop Indicativo de Cooperativa.
     * @param string $indConstr Indicativo de Construtora.
     * @param string $indDesFolha Indicativo de Desoneração da Folha.
     * @param string $indopccp Indicativo da opção pelo produtor rural pela forma de tributação da contribuição previdenciária.
     * @param string $indporte Indicativo de porte da empresa para desoneração da folha.
     * @param string $indOptRegEletron Opção pelo registro eletrônico de empregados.
     * @param string|null $cnpjEFR CNPJ do EFR (nullable).
     * @param string|null $dttrans11096 Data de transição para Lei 11096 (nullable).
     * @param string|null $indtribfolhapiscofins Indicativo de tributação para PIS/COFINS (nullable).
     * @param string|null $natJurid Código da Natureza Jurídica (nullable).
     * @param string $multTabRubricas Uso de mais de uma tabela de rubricas.
     * @param string|null $indEntEd Indicativo de entidade educativa sem fins lucrativos (nullable).
     * @param string $indEtt Indicativo de Empresa de Trabalho Temporário.
     * @param string|null $nrRegEtt Número do registro da Empresa de Trabalho Temporário (nullable).
     * @param string $ideMinLei Sigla e nome do Ministério ou Lei.
     * @param string $nrCertif Número do Certificado ou Lei.
     * @param string $dtEmisCertif Data de Emissão do Certificado ou Lei.
     * @param string $dtVencCertif Data de Vencimento do Certificado.
     * @param string|null $nrProtRenov Protocolo de pedido de renovação (nullable).
     * @param string|null $dtProtRenov Data do protocolo de renovação (nullable).
     * @param string|null $dtDou Data de publicação no DOU (nullable).
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
     * @param string|null $obs Descrição do Local/Empregador (nullable).
     * @param string|null $obsPPP Informação do PPP (nullable).
     * @param string|null $obsASO Informação do ASO (nullable).
     */
    public function __construct(
        public string $codigo,
        public string $iniValid,
        public ?string $fimValid,
        public string $nmRazao,
        public int $tpInsc,
        public int $nrInsc,
        public string $classTrib,
        public string $indCoop,
        public string $indConstr,
        public string $indDesFolha,
        public string $indopccp,
        public string $indporte,
        public string $indOptRegEletron,
        public ?string $cnpjEFR,
        public ?string $dttrans11096,
        public ?string $indtribfolhapiscofins,
        public ?string $natJurid,
        public string $multTabRubricas,
        public ?string $indEntEd,
        public string $indEtt,
        public ?string $nrRegEtt,
        public string $ideMinLei,
        public string $nrCertif,
        public string $dtEmisCertif,
        public string $dtVencCertif,
        public ?string $nrProtRenov,
        public ?string $dtProtRenov,
        public ?string $dtDou,
        public ?int $pagDou,
        public string $nmCtt,
        public string $cpfCtt,
        public ?string $foneFixo,
        public ?string $foneCel,
        public ?string $email,
        public string $nrSiafi,
        public string $ideEFR,
        public ?string $website,
        public ?string $logo,
        public string $nmEnte,
        public string $uf,
        public ?string $codMunic,
        public string $indRPPS,
        public string $subteto,
        public float $vrSubteto,
        public string $indAcordoIsenMulta,
        public ?string $indSitPJ,
        public ?string $obs,
        public ?string $obsPPP,
        public ?string $obsASO
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
