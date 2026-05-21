<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ProbarBase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'probar:base';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando de prueba para la base';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('¡Comando probar:base ejecutado correctamente!');
        return 0;
    }
}
