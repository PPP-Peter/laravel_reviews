<?php 

namespace App\Listeners\Review;

use App\Events\Review\ReviewDeletingEvent;

class RunReviewDeletingListenerJob
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
     * @param ReviewDeletingEvent $event
     * @return void
     */
    public function handle(ReviewDeletingEvent $event)
    {

    }
}
