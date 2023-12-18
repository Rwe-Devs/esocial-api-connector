<?php

namespace RweDevs\EsocialApiConnector;

require __DIR__ . '/../vendor/autoload.php';


use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class EsocialApiConnectorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        echo ('boot');
    }

    public function register()
    {
        // Binding no service container
        $this->app->bind(EsocialConnector::class, function (Application $app) {
            return new EsocialConnector('http://localhost:8000');
        });
    }
}