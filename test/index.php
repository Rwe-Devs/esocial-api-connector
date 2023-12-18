<?php

require __DIR__ . '/../vendor/autoload.php';

use RweDevs\EsocialApiConnector\Esocial\Requests\LoginRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\LogoutRequest;
use RweDevs\EsocialApiConnector\Esocial\Requests\RetrieveTokenRequest;
use RweDevs\EsocialApiConnector\EsocialApiConnectorServiceProvider;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use RweDevs\EsocialApiConnector\Esocial\Requests\RegistroRequest;


$apiUrl = 'http://localhost:8000/api/';

$serviceProvider = EsocialApiConnectorServiceProvider::class;
$connector = new EsocialConnector($apiUrl);

// $retrieveToken = new RetrieveTokenRequest('credentials', '1', 'sZdw7LmsmgiF1upvZJfV3Q8HL2NQqwksKMkZuktH', 'scope');



// $registro = new RegistroRequest('nomee3e', 'teste@teste.com', '12345678', '12345678', 1, 15580779788);
$login = new LoginRequest('teste@teste.com', '12345678');
// $logout = new LogoutRequest('teste@teste.com', '12345678');


// $response = $connector->send($retrieveToken);

// $response = $connector->send($registro);
$response = $connector->send($login);
// $response = $connector->send($logout);

dd($response);
