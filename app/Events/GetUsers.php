<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class GetUsers
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $users;

    public function __construct($users)
    {
        Log::info('Event triggered...');
        $this->users = $users;
    }

}
