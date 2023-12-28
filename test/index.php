<?php

require __DIR__ . '/../vendor/autoload.php';

use RweDevs\EsocialApiConnector\DTO\AtualizarAmbienteDTO;
use RweDevs\EsocialApiConnector\DTO\AtualizarEmpregadorDTO;
use RweDevs\EsocialApiConnector\DTO\AtualizarLocalDTO;
use RweDevs\EsocialApiConnector\DTO\AtualizarSetorDTO;
use RweDevs\EsocialApiConnector\DTO\CriarAmbienteDTO;
use RweDevs\EsocialApiConnector\DTO\CriarEmpregadorDTO;
use RweDevs\EsocialApiConnector\DTO\CriarLocalDTO;
use RweDevs\EsocialApiConnector\DTO\CriarSetorDTO;
use RweDevs\EsocialApiConnector\DTO\LoginDTO;
use RweDevs\EsocialApiConnector\DTO\RegistroDTO;
use RweDevs\EsocialApiConnector\Esocial\Requests\AtualizarAmbienteRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\AtualizarEmpregadorRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\AtualizarLocalRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\AtualizarSetorRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\CriarAmbienteRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\CriarEmpregadorRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\CriarLocalRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\CriarSetorRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\DeletarAmbienteRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\DeletarEmpregadorRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\DeletarLocalRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\DeletarSetorRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\ListarAmbienteRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\ListarEmpregadorRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\ListarLocalRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\ListarSetorRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\LoginRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\LogoutRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\MostrarAmbienteRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\MostrarEmpregadorRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\MostrarLocalRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\MostrarSetorRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\RetrieveTokenRequest;
use RweDevs\EsocialApiConnector\EsocialApiConnectorServiceProvider;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use RweDevs\EsocialApiConnector\Esocial\Requests\RegistroRequest;


$apiUrl = 'http://localhost:8000/api/';
$token = '1|jcKmdowYrYeCwyaCXs2wQq4WptFg42HhZ2fNy0vkca1de4ee';

// $serviceProvider = EsocialApiConnectorServiceProvider::class;

// CONNECTORS

// $connector = new EsocialConnector($apiUrl);
$authConnector = new EsocialConnector($apiUrl, $token);

// PASSPORT
// $retrieveToken = new RetrieveTokenRequest('credentials', '1', 'sZdw7LmsmgiF1upvZJfV3Q8HL2NQqwksKMkZuktH', 'scope');
// $response = $connector->send($retrieveToken);


// REQUESTS DE AUTENTICAÇÃO

// $registroDTO = new RegistroDTO('teste de user', 'teste27@teste.com', '12345678', '12345678', 1, 15580779788);
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
    'obs' => 'Observações sobre o empregador',
    'obsPPP' => null,
    'obsASO' => null
];
// $criarEmpregadorDTO = new CriarEmpregadorDTO(...$empregadorDataArray);

// Criando a requisição com a DTO
// $criarEmpregadorRequest = new CriarEmpregadorRequest($criarEmpregadorDTO);

// Enviando a requisição através do conector
// $response = $authConnector->send($criarEmpregadorRequest);

// $response = $authConnector->send(new MostrarEmpregadorRequest(2));


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

// VER LOCAIS

// $response = $authConnector->send(new ListarLocalRequest(14));

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

$response = $authConnector->send(new MostrarLocalRequest(2, 3));
// $response = $authConnector->send(new DeletarLocalRequest(14, 17));


// SETORES

// Criação de um exemplo de objeto CriarSetorDTO
$criarSetorDTO = new AtualizarSetorDTO( // Tá quebrando ao nulificar codigo-rh e descricao
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
// $criarSetorRequest = new CriarSetorRequest(2, $criarSetorDTO);
// $response = $authConnector->send($criarSetorRequest);

$response = $authConnector->send(new ListarSetorRequest(2));
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
    // piso: "Porcelanato",
    // teto: "Gesso",
    // iluminacao: "LED",
    // paredes: "Pintura Látex",
    // ventilacao: "Ar-condicionado",
    forro: "Gesso",
    // descricao_complementar: "Sala destinada ao time de desenvolvimento de software.",
    // data_de_inicio: "2023/01/01",
    // data_fim: "2023/12/31"
);

// $criarAmbienteRequest = new CriarAmbienteRequest(3, $criarAmbienteDTO);
// $response = $authConnector->send($criarAmbienteRequest);

$response = $authConnector->send(new ListarAmbienteRequest(3));
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


echo ($response);
dd(json_decode($response));
