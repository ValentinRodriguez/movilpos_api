<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class createDatabases extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crear:basededatos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creacion de base de datos.';

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
        // $dbs = $this->argument('dbname');

        $dbs = array(
            'mov_compras',
            'mov_contabilidad',
            'mov_cuentasxpagar',
            'mov_empresa',
            'mov_globales',
            'mov_inventario',
            'mov_miscelaneos',
            'mov_cuentasxcobrar',
            'mov_tienda',
            'mov_ventas',
            'mov_usuarios',
            'mov_rrhh',
        );

        foreach ($dbs as $key => $value) {
            DB::statement("CREATE DATABASE IF NOT EXISTS $value");
        }
    }
}
