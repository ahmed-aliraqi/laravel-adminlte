<?php

namespace AhmedAliraqi\Adminlte\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'adminlte:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add the adminlte template assets to public path';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('vendor:publish', [
            '--tag' => 'adminlte:assets',
            '--force' => '--force',
        ]);

        $this->call('vendor:publish', [
            '--tag' => 'adminlte:auth',
            '--force' => '--force',
        ]);

        $this->info('The adminlte template assets has been added successfully.');
    }
}
