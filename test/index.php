<?php

require __DIR__ . '/../vendor/autoload.php';

use Illuminate\Http\Request;
use RweDevs\EsocialApiConnector\DTO\AtualizarAmbienteDTO;
use RweDevs\EsocialApiConnector\DTO\AtualizarEmpregadorDTO;
use RweDevs\EsocialApiConnector\DTO\AtualizarEmpregadorLogoDTO;
use RweDevs\EsocialApiConnector\DTO\AtualizarFuncaoDTO;
use RweDevs\EsocialApiConnector\DTO\AtualizarFuncionarioDTO;
use RweDevs\EsocialApiConnector\DTO\AtualizarGradeFuncionalDTO;
use RweDevs\EsocialApiConnector\DTO\AtualizarLocalDTO;
use RweDevs\EsocialApiConnector\DTO\AtualizarResponsavelTecnicoDTO;
use RweDevs\EsocialApiConnector\DTO\AtualizarSetorDTO;
use RweDevs\EsocialApiConnector\DTO\CriarAmbienteDTO;
use RweDevs\EsocialApiConnector\DTO\CriarEmpregadorDTO;
use RweDevs\EsocialApiConnector\DTO\CriarFuncaoDTO;
use RweDevs\EsocialApiConnector\DTO\CriarFuncionarioDTO;
use RweDevs\EsocialApiConnector\DTO\CriarGradeFuncionalDTO;
use RweDevs\EsocialApiConnector\DTO\CriarLocalDTO;
use RweDevs\EsocialApiConnector\DTO\CriarResponsavelTecnicoDTO;
use RweDevs\EsocialApiConnector\DTO\CriarSetorDTO;
use RweDevs\EsocialApiConnector\DTO\LoginDTO;
use RweDevs\EsocialApiConnector\DTO\RegistroDTO;
use RweDevs\EsocialApiConnector\Esocial\Requests\AtualizarAmbienteRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\AtualizarEmpregadorRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\AtualizarFuncaoRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\AtualizarFuncionarioRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\AtualizarGradeFuncionalRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\AtualizarLocalRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\AtualizarResponsavelTecnicoRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\AtualizarSetorRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\CriarAmbienteRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\CriarEmpregadorRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\CriarFuncaoRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\CriarFuncionarioRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\CriarGradeFuncionalRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\CriarLocalRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\CriarResponsavelTecnicoRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\CriarSetorRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\DeletarAmbienteRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\DeletarEmpregadorRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\DeletarFuncaoRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\DeletarFuncionarioRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\DeletarGradeFuncionalRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\DeletarLocalRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\DeletarResponsavelTecnicoRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\DeletarSetorRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\ListarAmbienteRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\ListarEmpregadorRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\ListarFuncaoRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\ListarFuncionarioRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\ListarGradeFuncionalRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\ListarLocalRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\ListarResponsavelTecnicoRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\ListarSetorRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\LoginRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\LogoutRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\MostrarAmbienteRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\MostrarEmpregadorRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\MostrarFuncaoRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\MostrarFuncionarioRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\MostrarGradeFuncionalRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\MostrarLocalRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\MostrarResponsavelTecnicoRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\MostrarSetorRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\RetrieveTokenRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\Tabela24Request;
use RweDevs\EsocialApiConnector\Esocial\Requests\Tabela27Request;
use RweDevs\EsocialApiConnector\Esocial\Requests\Tabela8Request;
use RweDevs\EsocialApiConnector\Esocial\Requests\TabelaCboRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\TabelaCidRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\TabelaCnaeRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\TabelaConstrutorasRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\TabelaCooperativasRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\TabelaDesoneracaoRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\TabelaIndOptRegEletronRequest;
use RweDevs\EsocialApiConnector\EsocialApiConnectorServiceProvider;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use RweDevs\EsocialApiConnector\Esocial\Requests\AtualizarEmpregadorLogoRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\DeletarEmpregadorLogoRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\MostrarEmpregadorLogoRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\RegistroRequest;
use Saloon\Data\MultipartValue;

$apiUrl = 'http://localhost:8001/api/';
// $token = '3|YkYjAiTLjEWt4HevxGzI50mAmEwqq2KrTevCv0JN705db816';

// $serviceProvider = EsocialApiConnectorServiceProvider::class;

// CONNECTORS

// $connector = new EsocialConnector($apiUrl);
// $authConnector = new EsocialConnector($apiUrl, $token);

// PASSPORT
// $retrieveToken = new RetrieveTokenRequest('credentials', '1', 'sZdw7LmsmgiF1upvZJfV3Q8HL2NQqwksKMkZuktH', 'scope');
// $response = $connector->send($retrieveToken);


// REQUESTS DE AUTENTICAÇÃO

// $registroDTO = new RegistroDTO('teste de user', 'teste27@teste.com', '12345678', '12345678');
// $registroDTOfromRequest = RegistroDTO::fromRequest($request);
// $registro = new RegistroRequest($registroDTO);
// $response = $connector->send($registro);

// $loginDTO = new LoginDTO('teste27@teste.com', '12345678');
// $login = new LoginRequest($loginDTO);
// $response = $connector->send($login);


// $logout = new LogoutRequest('teste2@teste.com', '12345678');
// $response = $connector->send($logout);


// REQUESTS AUTENTICADAS

// $empregadorListar = new ListarEmpregadorRequest;
// $response = $authConnector->send(new ListarEmpregadorRequest);

// Substitua os valores a seguir pelos dados reais do empregador
$criarEmpregadorDTO = new CriarEmpregadorDTO(
    tpInsc: 1,
    nrInsc: 24334,
    nmRazao: 'Nome da Razão Social do Empregador',
    iniValid: '2023-01',
    fimValid: null, // ou a data de fim de validade, se aplicável
    classTrib: '99',
    indCoop: '0',
    indConstr: '0',
    indDesFolha: '1',
    indopccp: '2',
    indporte: '3',
    indOptRegEletron: true,
    cnpjEFR: null, // ou o CNPJ, se aplicável
    dttrans11096: null, // ou a data, se aplicável
    indtribfolhapiscofins: null, // ou o indicativo, se aplicável
    natJurid: null, // ou o código da natureza jurídica, se aplicável
    multTabRubricas: 'S',
    indEntEd: null, // ou o indicativo, se aplicável
    indEtt: 'N',
    nrRegEtt: null, // ou o número do registro, se aplicável
    ideMinLei: 'Nome do Ministério ou Lei',
    nrCertif: 'Número do Certificado',
    dtEmisCertif: '2023-01-01',
    dtVencCertif: '2024-01-01',
    nrProtRenov: null, // ou o protocolo de renovação, se aplicável
    dtProtRenov: null, // ou a data do protocolo de renovação, se aplicável
    dtDou: null, // ou a data de publicação no DOU, se aplicável
    pagDou: null, // ou o número da página no DOU, se aplicável
    nmCtt: 'Nome do Contato',
    cpfCtt: '12345678901',
    foneFixo: null, // ou o telefone fixo, se aplicável
    foneCel: null, // ou o telefone celular, se aplicável
    email: 'email@dominio.com',
    nrSiafi: '123456',
    ideEFR: 'S',
    website: null, // ou o website, se aplicável
    logo: null, // ou o caminho para o logo, se aplicável
    nmEnte: 'Nome do Ente Federativo',
    uf: 'UF',
    codMunic: null, // ou o código do município IBGE, se aplicável
    indRPPS: 'N',
    subteto: 'L',
    vrSubteto: 99999.99,
    indAcordoIsenMulta: 'N',
    indSitPJ: null, // ou o indicador de situação do empregador junto à RFB, se aplicável
    indSitPF: null, // ou o indicador de situação do empregador junto à RFB, se aplicável
    obs: 'Observações sobre o empregador',
    obsPPP: null, // ou informações do PPP, se aplicável
    obsASO: null // ou informações do ASO, se aplicável
);

$empregadorDataArray = [
    'tpInsc' => 1,
    'nrInsc' => 5119634,
    'nmRazao' => 'Nome da Razão Social do Empregador',
    'iniValid' => '2023-01',
    'fimValid' => null,
    'classTrib' => '99',
    'indCoop' => '0',
    'indConstr' => '0',
    'indDesFolha' => '1',
    'indopccp' => '2',
    'indporte' => '3',
    'indOptRegEletron' => true,
    'cnpjEFR' => null,
    'dttrans11096' => null,
    'indtribfolhapiscofins' => null,
    'natJurid' => null,
    'multTabRubricas' => 'S',
    'indEntEd' => null,
    'indEtt' => 'N',
    'nrRegEtt' => null,
    'ideMinLei' => 'Nome do Ministério ou Lei',
    'nrCertif' => 'Número do Certificado',
    'dtEmisCertif' => '2023-01-01',
    'dtVencCertif' => '2024-01-01',
    'nrProtRenov' => null,
    'dtProtRenov' => null,
    'dtDou' => null,
    'pagDou' => null,
    'nmCtt' => 'Nome do Contato',
    'cpfCtt' => '12345678901',
    'foneFixo' => null,
    'foneCel' => null,
    'email' => 'email@dominio.com',
    'nrSiafi' => '123456',
    'ideEFR' => 'S',
    'website' => null,
    'logo' => null,
    'nmEnte' => 'Nome do Ente Federativo',
    'uf' => 'UF',
    'codMunic' => null,
    'indRPPS' => 'N',
    'subteto' => 'L',
    'vrSubteto' => 99999.99,
    'indAcordoIsenMulta' => 'N',
    'indSitPJ' => null,
    'indSitPF' => null,
    'obs' => 'Observações sobre o empregador',
    'obsPPP' => null,
    'obsASO' => null
];
$criarEmpregadorDTO = new CriarEmpregadorDTO(...$empregadorDataArray);

// Criando a requisição com a DTO
// $criarEmpregadorRequest = new CriarEmpregadorRequest($criarEmpregadorDTO);
// $response = $authConnector->send($criarEmpregadorRequest);

// $response = $authConnector->send(new MostrarEmpregadorRequest(1));
// $response = $authConnector->send(new MostrarEmpregadorLogoRequest(7));
// header('Content-Type: image/png');
// echo $response;

// Substitua os valores a seguir pelos dados reais do empregador
// $atualizarEmpregadorDTO = new AtualizarEmpregadorDTO(
//     tpInsc: 1,
//     nrInsc: 10002365,
//     nmRazao: 'Nome atualizado2',
//     iniValid: '2023-05',
//     fimValid: null, // ou a data de fim de validade, se aplicável
//     classTrib: '99',
//     indCoop: '0',
//     indConstr: '0',
//     indDesFolha: '1',
//     indopccp: '2',
//     indporte: '3',
//     indOptRegEletron: true,
//     cnpjEFR: null, // ou o CNPJ, se aplicável
//     dttrans11096: null, // ou a data, se aplicável
//     indtribfolhapiscofins: null, // ou o indicativo, se aplicável
//     natJurid: null, // ou o código da natureza jurídica, se aplicável
//     multTabRubricas: 'S',
//     indEntEd: null, // ou o indicativo, se aplicável
//     indEtt: 'N',
//     nrRegEtt: null, // ou o número do registro, se aplicável
//     ideMinLei: 'Ministério do Emprego',
//     nrCertif: 'Número do Certificado',
//     dtEmisCertif: '2023-01-01',
//     dtVencCertif: '2024-01-01',
//     nrProtRenov: null, // ou o protocolo de renovação, se aplicável
//     dtProtRenov: null, // ou a data do protocolo de renovação, se aplicável
//     dtDou: null, // ou a data de publicação no DOU, se aplicável
//     pagDou: null, // ou o número da página no DOU, se aplicável
//     nmCtt: 'Nome do Contato',
//     cpfCtt: '12345678901',
//     foneFixo: null, // ou o telefone fixo, se aplicável
//     foneCel: null, // ou o telefone celular, se aplicável
//     email: 'atualizado@dominio.com',
//     nrSiafi: '123456',
//     ideEFR: 'S',
//     website: null, // ou o website, se aplicável
//     logo: null, // ou o caminho para o logo, se aplicável
//     nmEnte: 'Nome do Ente Federativo',
//     uf: 'UF',
//     codMunic: null, // ou o código do município IBGE, se aplicável
//     indRPPS: 'N',
//     subteto: 'L',
//     vrSubteto: 99999.99,
//     indAcordoIsenMulta: 'N',
//     indSitPJ: null, // ou o indicador de situação do empregador junto à RFB, se aplicável
//     obs: 'Observações sobre o empregador',
//     obsPPP: null, // ou informações do PPP, se aplicável
//     obsASO: null // ou informações do ASO, se aplicável
// );

// Criando a requisição com a DTO
// $atualizarEmpregadorRequest = new AtualizarEmpregadorRequest(14, $atualizarEmpregadorDTO);

// Enviando a requisição através do conector
// $response = $authConnector->send($atualizarEmpregadorRequest);

// Deletar Empregador
// $response = $authConnector->send(new DeletarEmpregadorRequest(1));


//  $conteudo_arquivo = $_FILES['logo'];
// $metodo =  $_POST['_method'];

// $url = 'https://logosmarcas.net/wp-content/uploads/2020/04/Nike-Logo.png';
// $conteudo_imagem = file_get_contents($url);

// $arquivo = $_FILES['logo']['tmp_name'];
// $filename = $_FILES['logo']['name'];

// $fileContent = file_get_contents($arquivo);


// $multipartValue = new MultipartValue(
//     name: 'logo',
//     value: $fileContent, 
//     filename: $filename
// );
// $atualizarEmpregadorLogoDTO = new AtualizarEmpregadorLogoDTO(
   
//     logo: $multipartValue,
   
// );
// $atualizarEmpregadorLogoRequest = new AtualizarEmpregadorLogoRequest(7, $atualizarEmpregadorLogoDTO);
// $response = $authConnector->send($atualizarEmpregadorLogoRequest);
// $response = $authConnector->send(new DeletarEmpregadorLogoRequest(1));

// VER LOCAIS

// $response = $authConnector->send(new ListarLocalRequest(1));

$criarLocalDTO = new CriarLocalDTO(
    codigo: 65,
    iniValid: "2023-01",
    fimValid: null, // ou a data de fim de validade, se aplicável
    nmRazao: "Nome da Razão Social do Local",
    tpInsc: 1,
    nrInsc: 8524,
    classTrib: "99",
    indCoop: "0",
    indConstr: "0",
    indDesFolha: "1",
    indopccp: "2",
    indporte: "3",
    indOptRegEletron: true,
    cnpjEFR: null, // ou o CNPJ, se aplicável
    dttrans11096: null, // ou a data, se aplicável
    indtribfolhapiscofins: null, // ou o indicativo, se aplicável
    natJurid: null, // ou o código da natureza jurídica, se aplicável
    multTabRubricas: "S",
    indEntEd: null, // ou o indicativo, se aplicável
    indEtt: "N",
    nrRegEtt: null, // ou o número do registro, se aplicável
    ideMinLei: "Nome do Ministério ou Lei",
    nrCertif: "Número do Certificado",
    dtEmisCertif: "2023-01-01",
    dtVencCertif: "2024-01-01",
    nrProtRenov: null, // ou o protocolo de renovação, se aplicável
    dtProtRenov: null, // ou a data do protocolo de renovação, se aplicável
    dtDou: null, // ou a data de publicação no DOU, se aplicável
    pagDou: null, // ou o número da página no DOU, se aplicável
    nmCtt: "Nome do Contato",
    cpfCtt: "12345678901",
    foneFixo: null, // ou o telefone fixo, se aplicável
    foneCel: null, // ou o telefone celular, se aplicável
    email: "email@dominio.com",
    nrSiafi: "123456",
    ideEFR: "S",
    website: null, // ou o website, se aplicável
    logo: null, // ou o caminho para o logo, se aplicável
    nmEnte: "Nome do Ente Federativo",
    uf: "UF",
    codMunic: null, // ou o código do município IBGE, se aplicável
    indRPPS: "N",
    subteto: "L",
    vrSubteto: 99999.99,
    indAcordoIsenMulta: "N",
    indSitPJ: null, // ou o indicador de situação do empregador junto à RFB, se aplicável
    indSitPF: null, // ou o indicador de situação do empregador junto à RFB, se aplicável
    obs: "Observações sobre o local",
    obsPPP: null, // ou informações do PPP, se aplicável
    obsASO: null // ou informações do ASO, se aplicável
);

// Supondo que você tenha um Request para criar um Local
// $criarLocalRequest = new CriarLocalRequest(2, $criarLocalDTO);
// $response = $authConnector->send($criarLocalRequest);


$atualizararLocalDTO = new AtualizarLocalDTO(
    codigo: 27373,
    iniValid: "2024-01",
    fimValid: null, // ou a data de fim de validade, se aplicável
    nmRazao: "Local atualizado",
    tpInsc: 1,
    nrInsc: 8523,
    classTrib: "99",
    indCoop: "0",
    indConstr: "0",
    indDesFolha: "1",
    indopccp: "2",
    indporte: "3",
    indOptRegEletron: true,
    cnpjEFR: null, // ou o CNPJ, se aplicável
    dttrans11096: null, // ou a data, se aplicável
    indtribfolhapiscofins: null, // ou o indicativo, se aplicável
    natJurid: null, // ou o código da natureza jurídica, se aplicável
    multTabRubricas: "S",
    indEntEd: null, // ou o indicativo, se aplicável
    indEtt: "N",
    nrRegEtt: null, // ou o número do registro, se aplicável
    ideMinLei: "Nome do Ministério ou Lei",
    nrCertif: "Número do Certificado",
    dtEmisCertif: "2023-01-01",
    dtVencCertif: "2024-01-01",
    nrProtRenov: null, // ou o protocolo de renovação, se aplicável
    dtProtRenov: null, // ou a data do protocolo de renovação, se aplicável
    dtDou: null, // ou a data de publicação no DOU, se aplicável
    pagDou: null, // ou o número da página no DOU, se aplicável
    nmCtt: "Nome do Contato",
    cpfCtt: "12345678901",
    foneFixo: null, // ou o telefone fixo, se aplicável
    foneCel: null, // ou o telefone celular, se aplicável
    email: "email@dominio.com",
    nrSiafi: "123456",
    ideEFR: "S",
    website: null, // ou o website, se aplicável
    logo: null, // ou o caminho para o logo, se aplicável
    nmEnte: "Nome do Ente Federativo",
    uf: "UF",
    codMunic: null, // ou o código do município IBGE, se aplicável
    indRPPS: "N",
    subteto: "L",
    vrSubteto: 99999.99,
    indAcordoIsenMulta: "N",
    indSitPJ: null, // ou o indicador de situação do empregador junto à RFB, se aplicável
    obs: "Observações sobre o local",
    obsPPP: null, // ou informações do PPP, se aplicável
    obsASO: null // ou informações do ASO, se aplicável
);

// Supondo que você tenha um Request para criar um Local
// $atualizarLocalRequest = new AtualizarLocalRequest(14, 17, $atualizararLocalDTO);
// $response = $authConnector->send($atualizarLocalRequest);

// $response = $authConnector->send(new MostrarLocalRequest(1, 1));
// $response = $authConnector->send(new DeletarLocalRequest(14, 17));


// SETORES

// Criação de um exemplo de objeto CriarSetorDTO
$criarSetorDTO = new CriarSetorDTO( // Tá quebrando ao nulificar codigo-rh e descricao
    observacao_aso: "Nenhuma observação específica",
    data_de_inicio: "2023-01-01",
    data_fim: "2024-01-01",
    descricao: "Atualizado",
    codigo_rh: "atualizou",
    nome: "Desenvolvimento",
    ativo: 1

);
// $setorArr = [
//     "data_fim" => "2024-01-01",
//     "codigo_rh" => "RH1234426",
//     "nome" => "Desenvolvimento",
//     "descricao" => "Departamento de desenvolvimento de software",
//     "ativo" => true,
//     "observacao_aso" => "Nenhuma observação específica",
//     "data_de_inicio" => "2023-01-01",

// ];
// $outraDTO = new CriarSetorDTO(...$setorArr);
// $criarSetorRequest = new CriarSetorRequest(1, $criarSetorDTO);
// $response = $authConnector->send($criarSetorRequest);

// $response = $authConnector->send(new ListarSetorRequest(2));
// $response = $authConnector->send(new MostrarSetorRequest(2, 1));
// $response = $authConnector->send(new AtualizarSetorRequest(2, 1, $criarSetorDTO));
// $response = $authConnector->send(new DeletarSetorRequest(14, 3));


// AMBIENTES

// CRIAR

$criarAmbienteDTO = new CriarAmbienteDTO(
    codigo: "AMB004",
    nome: "Sala de Desenvolvimento",
    identificacao_esocial: "SALADEV123",
    area: "30m2",
    pe_direito: "2.5m",
    piso: "Porcelanato",
    teto: "Gesso",
    iluminacao: "LED",
    paredes: "Pintura Látex",
    ventilacao: "Ar-condicionado",
    forro: "Gesso",
    descricao_complementar: "Sala destinada ao time de desenvolvimento de software.",
    data_de_inicio: "2023/01/01",
    data_fim: "2023/12/31"
);

// $criarAmbienteRequest = new CriarAmbienteRequest(1, $criarAmbienteDTO);
// $response = $authConnector->send($criarAmbienteRequest);

// $response = $authConnector->send(new ListarAmbienteRequest(1));
// $response = $authConnector->send(new MostrarAmbienteRequest(3, 3));

$atualizarAmbienteDTO = new AtualizarAmbienteDTO(
    codigo: "atuala",
    nome: "Sala de Desenvolvimento brabo",
    identificacao_esocial: "SALADEV123",
    area: "30m2",
    // pe_direito: "2.5m",
    // piso: "Porcelanato",
    // teto: "Gesso",
    // iluminacao: "LED",
    paredes: "Pintura Látex",
    ventilacao: "Ar-condicionado",
    forro: "Gesso",
    descricao_complementar: "Sala destinada ao time de desenvolvimento de software.",
    data_de_inicio: "2023/01/01",
    data_fim: "2023/12/31"
);
// $atualizarAmbienteRequest = new AtualizarAmbienteRequest(3, 3, $atualizarAmbienteDTO);
// $response = $authConnector->send($atualizarAmbienteRequest);

// $response = $authConnector->send(new DeletarAmbienteRequest(3, 4));

// Simula uma requisição com dados para a função
$requestData = [
    'codigo' => 'DEV123',
    'nome' => 'Desenvolvedor de Software atualizado',
    'cbo' => '317210',
    'atividade' => 'Desenvolvimento e manutenção de software.',
    'requisitos' => 'Conhecimento em Laravel e PHP.',
    'data_de_inicio' => '2023-01-01',
    'data_fim' => '2024-01-01',
];

// // Cria uma instância do Request com os dados da simulação
// $request = new Request($requestData);

// // // Utiliza o método fromRequest para criar uma instância de CriarFuncaoDTO
// $criarFuncaoDTO = CriarFuncaoDTO::fromRequest($request);
// $criarFuncaoReq = new CriarFuncaoRequest(1, $criarFuncaoDTO);
// $response = $authConnector->send($criarFuncaoReq);

// $response = $authConnector->send(new ListarFuncaoRequest(1));

// $request = new Request($requestData);

// // Utiliza o método fromRequest para criar uma instância de CriarFuncaoDTO
// $criarFuncaoDTO = AtualizarFuncaoDTO::fromRequest($request);
// $criarFuncaoReq = new AtualizarFuncaoRequest(2, 3, $criarFuncaoDTO);
// $response = $authConnector->send($criarFuncaoReq);

// $response = $authConnector->send(new MostrarFuncaoRequest(2, 2));
// $response = $authConnector->send(new DeletarFuncaoRequest(2, 2));

// FUNCIONARIOS

$criarFuncionarioDTO = new CriarFuncionarioDTO(
    nome: 'João da Silva',
    codigo: 'FUNC01',
    apelido: 'João',
    nascimento: '1980-01-01',
    naturalidade: 'São Paulo',
    nacionalidade: 'Brasileira',
    estado_civil: 'Casado',
    raca: 'Branca',
    sexo: 'Masculino',
    cpf: '123.456.789-00',
    rg: 'MG-12.345.678',
    nit: '1234567890',
    ctps: '123456 Série 00',
    escolaridade: 'Superior Completo',
    endereco: 'Rua Exemplo, 123',
    numero: '123',
    complemento: 'Apto 101',
    bairro: 'Centro',
    municipio: 'Belo Horizonte',
    cep: '30100-000',
    uf: 'MG',
    telefone1: '31 1234-5678',
    telefone2: '31 98765-4321',
    email: 'joao.silva@email.com',
    tipo_de_registro: 'Tipo X',
    valido_a_partir: '2023-01-01',
    matricula: 'MTR2346',
    local_id: 1, // Supondo que o local tenha ID 1
    setor_id: 1, // Supondo que o setor tenha ID 2
    ambiente_id: 1, // Supondo que o ambiente tenha ID 3
    funcao_id: 1, // Supondo que a função tenha ID 4
    cargo: 'Desenvolvedor',
    identificacao_esocial: 'ID eSocial',
    cnpj: '00.000.000/0001-00',
    parecer_aso: 'Apto para trabalho',
    filial_prev_social: 'Filial X',
    area: 'Desenvolvimento',
    br_pdh: 'Informação BR PDH',
    gfip: 'Código GFIP',
    turno: 'Manhã',
    carga_horaria: '40 horas semanais',
    regime_de_revezamento: 'Não',
    trabalho_em_altura: false
);

// $criarFuncionarioReq = new CriarFuncionarioRequest($criarFuncionarioDTO);
// $response = $authConnector->send($criarFuncionarioReq);

// $response = $authConnector->send(new ListarFuncionarioRequest);

$atualizarFuncionarioDTO = new AtualizarFuncionarioDTO(
    nome: 'João da Silva atualizado',
    codigo: 'FUNC001',
    apelido: 'João',
    nascimento: '1980-01-01',
    naturalidade: 'São Paulo',
    nacionalidade: 'Brasileira',
    estado_civil: 'Casado',
    raca: 'Branca',
    sexo: 'Masculino',
    cpf: '123.456.789-00',
    rg: 'MG-12.345.678',
    nit: '1234567890',
    ctps: '123456 Série 00',
    escolaridade: 'Superior Completo',
    endereco: 'Rua Exemplo, 123',
    numero: '123',
    complemento: 'Apto 101',
    bairro: 'Centro',
    municipio: 'Belo Horizonte',
    cep: '30100-000',
    uf: 'MG',
    telefone1: '31 1234-5678',
    telefone2: '31 98765-4321',
    email: 'joao.silva@email.com',
    tipo_de_registro: 'Tipo X',
    valido_a_partir: '2023-01-01',
    matricula: 'MTR123456',
    local_id: 3, // Supondo que o local tenha ID 1
    setor_id: 1, // Supondo que o setor tenha ID 2
    ambiente_id: 4, // Supondo que o ambiente tenha ID 3
    funcao_id: 2, // Supondo que a função tenha ID 4
    cargo: 'Desenvolvedor',
    identificacao_esocial: 'ID eSocial',
    cnpj: '00.000.000/0001-00',
    parecer_aso: 'Apto para trabalho',
    filial_prev_social: 'Filial X',
    area: 'Desenvolvimento',
    br_pdh: 'Informação BR PDH',
    gfip: 'Código GFIP',
    turno: 'Manhã',
    carga_horaria: '40 horas semanais',
    regime_de_revezamento: 'Não',
    trabalho_em_altura: false
);

// $atualizarFuncionarioReq = new AtualizarFuncionarioRequest(1, $atualizarFuncionarioDTO);
// $response = $authConnector->send($atualizarFuncionarioReq);

// $response = $authConnector->send(new DeletarFuncionarioRequest(1));
// $response = $authConnector->send(new MostrarFuncionarioRequest(5));


// GRADE FUNCIONAL
// $response = $authConnector->send(new ListarGradeFuncionalRequest(1));

// $criarGradeDto = new CriarGradeFuncionalDTO("NOVOOOO pelo pkg", 3, [2, 3]);
// $response = $authConnector->send(new CriarGradeFuncionalRequest(1, $criarGradeDto));

$atualizarGradeDto = new AtualizarGradeFuncionalDTO("NOVOOOO pelo pkg", 3, [2, 3, 1]);
// $response = $authConnector->send(new AtualizarGradeFuncionalRequest(1, 9, $atualizarGradeDto));

// $response = $authConnector->send(new MostrarGradeFuncionalRequest(1, 9));
// $response = $authConnector->send(new DeletarGradeFuncionalRequest(1, 5));


// $response = $authConnector->send(new TabelaCboRequest);

$criarResponsavelTecnicoDTO = new CriarResponsavelTecnicoDTO(
    codigo: 'RES001',
    nome: 'Ana Martins',
    funcao: 'Engenheira de Segurança do Trabalho',
    crm_crea_mte: '123456',
    especialidade: 'Engenharia de Segurança',
    rg: 'MG-12.345.678',
    cpf: '123.456.789-00',
    nascimento: '1985-01-01',
    // nacionalidade: 'Brasileira',
    // naturalidade: 'São Paulo',
    // sexo: 'Feminino',
    // ativo: true,
    // telefone: '31 1234-5678',
    // celular: '31 98765-4321',
    endereco: 'Rua Exemplo, 123',
    numero: '123',
    bairro: 'Centro',
    municipio: 'Belo Horizonte',
    cep: '30100-000',
    uf: 'MG'
);
$atualizarResponsavelTecnicoDTO = new AtualizarResponsavelTecnicoDTO(
    codigo: 'RES001',
    nome: 'Atualizada',
    funcao: 'Engenheira de Segurança do Trabalho',
    crm_crea_mte: '123456',
    especialidade: 'Engenharia de Segurança',
    rg: 'MG-12.345.678',
    cpf: '123.456.789-00',
    nascimento: '1985-01-01',
    nacionalidade: 'Brasileira',
    naturalidade: 'São Paulo',
    sexo: 'Feminino',
    ativo: true,
    telefone: '31 1234-5678',
    celular: '31 98765-4321',
    endereco: 'Rua Exemplo, 123',
    numero: '123',
    bairro: 'Centro',
    municipio: 'Belo Horizonte',
    cep: '30100-000',
    uf: 'MG'
);

// $response = $authConnector->send(new CriarResponsavelTecnicoRequest(1, $criarResponsavelTecnicoDTO));
// $response = $authConnector->send(new AtualizarResponsavelTecnicoRequest(1, 7, $atualizarResponsavelTecnicoDTO));

// $response = $authConnector->send(new ListarResponsavelTecnicoRequest(1));
// $response = $authConnector->send(new MostrarResponsavelTecnicoRequest(1, 6));
// $response = $authConnector->send(new DeletarResponsavelTecnicoRequest(1, 6));

echo ($response);
// dd(json_decode($response));
