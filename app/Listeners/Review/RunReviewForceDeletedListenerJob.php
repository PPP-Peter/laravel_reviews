<?php 

namespace App\Listeners\Review;

use App\Events\Review\ReviewForceDeletedEvent;

class RunReviewForceDeletedListenerJob
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
     * @param ReviewForceDeletedEvent $event
     * @return void
     */
    public function handle(ReviewForceDeletedEvent $event)
    {

    }
}
