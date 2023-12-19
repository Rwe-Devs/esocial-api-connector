<?php

require __DIR__ . '/../vendor/autoload.php';

use RweDevs\EsocialApiConnector\DTO\RegistroDTO;
use RweDevs\EsocialApiConnector\Esocial\Requests\EmpregadorListRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\LoginRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\LogoutRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\RetrieveTokenRequest;
use RweDevs\EsocialApiConnector\EsocialApiConnectorServiceProvider;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use RweDevs\EsocialApiConnector\Esocial\Requests\RegistroRequest;


$apiUrl = 'http://localhost:8000/api/';
$token = '10|70Uftj5agc85s285vcD2RPE7m6pJSk9UmF1vDPe3523ce7fd';

$serviceProvider = EsocialApiConnectorServiceProvider::class;

// CONNECTORS

$connector = new EsocialConnector($apiUrl);
// $authConnector = new EsocialConnector($apiUrl, $token);

// PASSPORT
// $retrieveToken = new RetrieveTokenRequest('credentials', '1', 'sZdw7LmsmgiF1upvZJfV3Q8HL2NQqwksKMkZuktH', 'scope');
// $response = $connector->send($retrieveToken);


// REQUESTS DE AUTENTICAÇÃO
$registroDTO = new RegistroDTO('teste de user', 'teste6@teste.com', '12345678', '12345678', 1, 15580779788);
// $registroDTOfromRequest = RegistroDTO::fromRequest($request);
$registro = new RegistroRequest($registroDTO);
$response = $connector->send($registro);


// $login = new LoginRequest('teste3@teste.com', '12345678');
// $response = $connector->send($login);


// $logout = new LogoutRequest('teste2@teste.com', '12345678');
// $response = $connector->send($logout);


// REQUESTS AUTENTICADAS

// $empregadorList = new EmpregadorListRequest;
// $response = $authConnector->send($empregadorList);

echo ($response);
