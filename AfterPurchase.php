<?php

namespace App\Listeners;


//laravel batteries
use App\Events\MakePurchase;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AfterPurchase implements ShouldQueue
{
   
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  MakePurchase  $event
     * @return void
     */
    public function handle(MakePurchase $event)
    {
       //send mail to client and product manager
    }

    
    
}


