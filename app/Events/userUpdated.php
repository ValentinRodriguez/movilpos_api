<?php

namespace App\Events;

use App\Librerias\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class userUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    
    public function broadcastOn()
    {
        Log::debug("Usuario Actualizado {$this->user->name}");
        return new Channel('users');
    }
}
