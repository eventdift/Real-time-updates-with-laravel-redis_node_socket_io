<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\OrderSummary;
class MakePurchase extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $DeliveryData = [];

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(OrderSummary $Summary)
    {
        $DeliveryData = $Summary;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['Purchase'];
    }

   
}
