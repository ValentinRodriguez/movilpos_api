<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Broadcast::routes(['middleware' => 'jwt.auth', 'prefix' => 'api']);

        require base_path('routes/channels.php');
    }
}
