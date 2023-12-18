<?php

require __DIR__ . '/../vendor/autoload.php';

use RweDevs\EsocialApiConnector\EsocialApiConnectorServiceProvider;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use RweDevs\EsocialApiConnector\Esocial\Requests\RegistroRequest;


$apiUrl = 'http://localhost:8000/api/';

$serviceProvider = EsocialApiConnectorServiceProvider::class;
$connector = new EsocialConnector($apiUrl);

$registro = new RegistroRequest('nome', 'victor@teste.com', '12345678', '12345678', 1, 15580779788);


$response = $connector->send($registro);
dd($response);


// $connector = $serviceProvider->Connector;

// echo ($serviceProvider);
// dd($serviceProvider);