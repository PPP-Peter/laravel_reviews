<?php

namespace App\Listeners\Review;

use App\Events\Review\ReviewUpdatingEvent;

class RunReviewUpdatingListenerJob
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
     * @param ReviewUpdatingEvent $event
     * @return void
     */
    public function handle(ReviewUpdatingEvent $event)
    {
        $review = $event->entity;
        $updated_by = auth()->user()->id;
        $updated_at = now();
        $review->updated_status_by = $updated_by;
        $review->updated_status_at = $updated_at;
    }
}
