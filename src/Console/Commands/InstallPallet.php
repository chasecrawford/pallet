<?php

namespace Pallet\Console\Commands;

use Illuminate\Console\Command;

class InstallPallet extends Command
{
    protected $signature = 'pallet:install';

    protected $description = 'Install Pallet';

    public function handle()
    {
        $this->info('Installing Pallet...');

        $this->info('Publishing assets...');
        $this->callSilent('vendor:publish', ['--tag' => 'pallet-assets']);

        $this->info('Copying package.json...');
        copy(__DIR__.'/../../../package.json', base_path('package.json'));

        $this->info('Copying vite.config.js...');
        copy(__DIR__.'/../../../vite.config.js', base_path('vite.config.js'));

        $this->info('Pallet installed successfully.');
    }
}
