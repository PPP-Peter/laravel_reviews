<?php 

namespace App\Listeners\Review;

use App\Events\Review\ReviewUpdatedEvent;

class RunReviewUpdatedListenerJob
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
     * @param ReviewUpdatedEvent $event
     * @return void
     */
    public function handle(ReviewUpdatedEvent $event)
    {

    }
}
