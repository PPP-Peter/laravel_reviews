<?php 

namespace App\Listeners\Review;

use App\Events\Review\ReviewDeletedEvent;

class RunReviewDeletedListenerJob
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
     * @param ReviewDeletedEvent $event
     * @return void
     */
    public function handle(ReviewDeletedEvent $event)
    {

    }
}
