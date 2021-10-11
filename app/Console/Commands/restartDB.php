<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class restartDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reiniciar:basededatos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $dbs = array(
            "failed_jobs", 
            "migrations", 
            // "oauth_access_tokens", 
            // "oauth_auth_codes", 
            // "oauth_clients", 
            // "oauth_personal_access_clients", 
            // "oauth_refresh_tokens", 
            // "websockets_statistics_entries"
        );
        foreach ($dbs as $key => $value) {
            DB::statement('SET FOREIGN_KEY_CHECKS = 0');        
            DB::statement("DROP TABLE $value");
            DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
