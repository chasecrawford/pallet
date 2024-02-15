<?php

namespace Pallet\Providers;

use Illuminate\Support\ServiceProvider;

class PalletServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->publishes([
            __DIR__.'/../resources/css' => resource_path('css/vendor/pallet'),
            __DIR__.'/../resources/js' => resource_path('js/vendor/pallet'),
            __DIR__.'/../resources/views' => resource_path('views/vendor/pallet'),
        ]);

    }
}
