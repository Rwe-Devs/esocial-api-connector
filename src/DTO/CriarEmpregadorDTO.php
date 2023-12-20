<?php

namespace RweDevs\EsocialApiConnector\DTO;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CriarEmpregadorDTO
{
    /**
     * Monta o 'body' da Request de Criar Empregador.
     *
     * @param int|null $userId Identificador único do usuário associado (nullable).
     * @param int $tpInsc Tipo de Inscrição. 0 ou 1.
     * @param int $nrInsc Número de Inscrição único.
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
     * @param string|null $obs Descrição do Local/Empregador (nullable).
     * @param string|null $obsPPP Informação do PPP (nullable).
     * @param string|null $obsASO Informação do ASO (nullable).
     */
    public function __construct(
        public readonly ?int $userId,
        public readonly int $tpInsc,
        public readonly int $nrInsc,
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
        public readonly ?string $obs,
        public readonly ?string $obsPPP,
        public readonly ?string $obsASO
    ) {
        $this->validate();
    }

    public static function fromRequest(Request $request): self
    {
        return new self(
            $request->input('user_id'),
            $request->input('tpInsc'),
            $request->input('nrInsc'),
            $request->input('nmRazao'),
            $request->input('iniValid'),
            $request->input('fimValid'),
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
            $request->input('obsASO')
        );
    }

    public function validate()
    {
        // $validator = Validator::make([
        //     'user_id' => $this->userId,
        //     'tpInsc' => $this->tpInsc,
        //     'nrInsc' => $this->nrInsc,
        //     // ... inclua todos os campos aqui para validação ...
        // ], [
        //     'user_id' => ['nullable', 'integer', 'exists:users,id'],
        //     'tpInsc' => ['required', 'integer'],
        //     'nrInsc' => ['required', 'integer', 'unique:empregadores'],
        //     // ... inclua todas as regras de validação aqui ...
        // ]);

        // if ($validator->fails()) {
        //     throw new ValidationException($validator);
        // }
    }
}
