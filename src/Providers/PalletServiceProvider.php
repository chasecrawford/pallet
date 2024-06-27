<?php

namespace Pallet\Providers;

use Illuminate\Support\ServiceProvider;

class PalletServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'pallet');

        $this->publishes([
            __DIR__.'/../../resources/css' => resource_path('css/vendor/pallet'),
            __DIR__.'/../../resources/js' => resource_path('js/vendor/pallet'),
        ], 'pallet');

        $this->commands([
            \Pallet\Console\Commands\InstallPallet::class,
        ]);
    }
}
