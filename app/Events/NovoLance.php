<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NovoLance extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $lance;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($lance)
    {
        $this->lance = $lance;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['test-channel'];
    }
}
