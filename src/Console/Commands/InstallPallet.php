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

        copy(__DIR__.'/../../package.json', base_path('package.json'));

        $this->info('Pallet installed successfully.');
    }
}
