<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class GetUsers extends ShouldBeStored
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $users;

    public function __construct($users)
    {
        Log::info('Event triggered...');
        $this->users = $users;
    }

}
