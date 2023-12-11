<?php

namespace RweDevs\EsocialApiConnector;

require __DIR__ . '/../vendor/autoload.php';


use EsocialConnector;
use Illuminate\Support\ServiceProvider;

class EsocialApiConnectorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        dd('boot');
    }

    public function register()
    {
        // Binding no service container
        $this->app->bind('esocialconnector', function ($app) {
            return new EsocialConnector('http://localhost:8000');
        });
    }
}