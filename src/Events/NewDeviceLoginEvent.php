<?php

namespace Rappasoft\LaravelAuthenticationLog\Events;

use Illuminate\Queue\SerializesModels;

class OrderCreatedEvent
{
    use SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(public $log, public $users = null)
    {
        //
    }

    /**
     * Get the channels the event should be broadcast on.
     */
    public function broadcastOn(): array
    {
        return [];
    }
}
