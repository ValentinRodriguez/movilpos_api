<?php

namespace App\Console\Commands;

use DateTime;
use Illuminate\Console\Command;
use App\Mail\actividadesMailable;
use Illuminate\Support\Facades\Mail;
use App\Librerias\miscelaneos\Actividades;

class notifyActividades extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:actividades';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envia las notificaciones de actividades';

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
     * @return int
     */
    public function handle()
    {
        $rango = array();
        $date = new DateTime;

        $date->modify('-1 hour');
        $rango['desde'] = $date->format('Y-m-d H:i:s');

        $date->modify('+2 hour');
        $rango['hasta'] = $date->format('Y-m-d H:i:s');
        
        $actividades = Actividades::orderBy('created_at', 'desc')-> 
                                    where([['actividades.enviado','=','no'],
                                           ['actividades.estado','=','ACTIVO']])->
                                    wherebetween('actividades.notificacion',[$rango['desde'], $rango['hasta']])->      
                                    select('actividades.*')->
                                    get();    
                                                              
        foreach ($actividades as $key => $value) {
            Mail::to($value->email)->send(new actividadesMailable($actividades));
            Actividades::where('id', $value->id)->update(['enviado' => 'si']);
        }
    }
}
