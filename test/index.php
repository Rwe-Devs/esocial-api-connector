<?php

require __DIR__ . '/../vendor/autoload.php';

use RweDevs\EsocialApiConnector\EsocialApiConnectorServiceProvider;

$apiUrl = 'http://localhost:8000';

$connector = new EsocialConnector($apiUrl);
