<?php 

namespace App\Listeners\Review;

use App\Events\Review\ReviewRestoredEvent;

class RunReviewRestoredListenerJob
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
     * @param ReviewRestoredEvent $event
     * @return void
     */
    public function handle(ReviewRestoredEvent $event)
    {

    }
}
