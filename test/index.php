<?php

require __DIR__ . '/../vendor/autoload.php';
// require_once __DIR__ . '/../src/Http/Integrations/Esocial/EsocialConnector.php';

use RweDevs\EsocialApiConnector\EsocialApiConnectorServiceProvider;
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;


$apiUrl = 'http://localhost:8000';

$serviceProvider = EsocialApiConnectorServiceProvider::class;
$connector = new EsocialConnector($apiUrl);

// $registro = new RegistroRequest('nome', 'victor@teste.com', '12345678', '12345678', 0, 1234);
// echo ($registro);


// $connector = $serviceProvider->Connector;

// echo ($serviceProvider);
// dd($serviceProvider);