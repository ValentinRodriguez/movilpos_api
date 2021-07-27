<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // ['middleware' => 'auth.api', 'prefix' => 'api']
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
