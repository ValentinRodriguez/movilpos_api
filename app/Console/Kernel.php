<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Http\Controllers\ActividadesController;
use App\Http\Controllers\CcTransaccionesController;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        Commands\createDatabases::class
    ];

    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        // $schedule->call(function(){
        //     $Actividades = new ActividadesController;
        //     $Actividades->ActividadesVencidas();
        // })->everyMinute();

        // $schedule->call(function(){
        //     $pagos = new CcTransaccionesController;
        //     $pagos->avisoPagos();
        // })->everyMinute();
    }
    
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
    }
}
