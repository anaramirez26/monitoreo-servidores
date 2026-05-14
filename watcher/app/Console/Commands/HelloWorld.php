<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HelloWorld extends Command
{
    // El nombre y la firma del comando de consola
    protected $signature = 'hello:world';

    // La descripción del comando de consola
    protected $description = 'Muestra un mensaje Hello World';

    // Ejecuta el comando de consola
    public function handle()
    {
        $this->info('Hello World!');
        return 0;
    }
}
