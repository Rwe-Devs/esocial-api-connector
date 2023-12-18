<?php

require __DIR__ . '/../vendor/autoload.php';

use RweDevs\EsocialApiConnector\Esocial\Requests\EmpregadorListRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\LoginRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\LogoutRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\RetrieveTokenRequest;
use RweDevs\EsocialApiConnector\EsocialApiConnectorServiceProvider;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use RweDevs\EsocialApiConnector\Esocial\Requests\RegistroRequest;


$apiUrl = 'http://localhost:8000/api/';
$token = '4|XBG8sTMKp7q8DyvB0thKvkk40QkKbdXWTR3kDk65d4f6b082';

$serviceProvider = EsocialApiConnectorServiceProvider::class;
// $connector = new EsocialConnector($apiUrl);

$authConnector = new EsocialConnector($apiUrl, $token);

// $retrieveToken = new RetrieveTokenRequest('credentials', '1', 'sZdw7LmsmgiF1upvZJfV3Q8HL2NQqwksKMkZuktH', 'scope');



// $registro = new RegistroRequest('teste de user', 'teste3@teste.com', '12345678', '12345678', 1, 15580779788);
// $login = new LoginRequest('teste3@teste.com', '12345678');
// $logout = new LogoutRequest('teste2@teste.com', '12345678');


// $response = $connector->send($retrieveToken);

// $response = $connector->send($registro);
// $response = $connector->send($login);
// $response = $connector->send($logout);

$empregadorList = new EmpregadorListRequest;
$response = $authConnector->send($empregadorList);

echo ($response);
