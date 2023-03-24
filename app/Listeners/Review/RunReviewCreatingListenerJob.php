<?php

namespace App\Listeners\Review;

use App\Events\Review\ReviewCreatingEvent;

class RunReviewCreatingListenerJob
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
     * @param ReviewCreatingEvent $event
     * @return void
     */
    public function handle(ReviewCreatingEvent $event)
    {
        $event->entity->user_id = auth()->user()->id;
    }
}
