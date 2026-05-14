<?php

namespace App\Console;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected function schedule(\Illuminate\Console\Scheduling\Schedule $schedule): void
    {
        // Aquí programaremos la llamada a tu clase Monitorista cada minuto.
    }

    protected function commands(): void
    {
        // Registro de comandos personalizados
    }
}