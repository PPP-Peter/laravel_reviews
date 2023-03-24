<?php 

namespace App\Listeners\Review;

use App\Events\Review\ReviewCreatedEvent;

class RunReviewCreatedListenerJob
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
     * @param ReviewCreatedEvent $event
     * @return void
     */
    public function handle(ReviewCreatedEvent $event)
    {

    }
}
