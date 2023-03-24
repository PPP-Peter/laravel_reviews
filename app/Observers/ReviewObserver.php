<?php

namespace Observers;

use App\Events\Review\ReviewCreatingEvent;
use App\Events\Review\ReviewCreatedEvent;
use App\Events\Review\ReviewDeletingEvent;
use App\Events\Review\ReviewDeletedEvent;
use App\Events\Review\ReviewForceDeletedEvent;
use App\Events\Review\ReviewRestoredEvent;
use App\Events\Review\ReviewUpdatingEvent;
use App\Events\Review\ReviewUpdatedEvent;
use App\Models\Review;

class ReviewObserver
{
    /**
     * Handle the Review "creating" event.
     *
     * @param \App\Models\Review $entity
     * @return void
     */
    public function creating(Review $entity)
    {
        ReviewCreatingEvent::dispatch($entity);
    }

    /**
     * Handle the Review "created" event.
     *
     * @param \App\Models\Review $entity
     * @return void
     */
    public function created(Review $entity)
    {
        ReviewCreatedEvent::dispatch($entity);
    }

    /**
     * Handle the Review "updating" event.
     *
     * @param \App\Models\Review $entity
     * @return void
     */
    public function updating(Review $entity)
    {
        ReviewUpdatingEvent::dispatch($entity);
    }

    /**
     * Handle the Review "updated" event.
     *
     * @param \App\Models\Review $entity
     * @return void
     */
    public function updated(Review $entity)
    {
        ReviewUpdatedEvent::dispatch($entity);
    }

    /**
     * Handle the Review "deleting" event.
     *
     * @param \App\Models\Review $entity
     * @return void
     */
    public function deleting(Review $entity)
    {
        ReviewDeletingEvent::dispatch($entity);
    }

    /**
     * Handle the Review "deleted" event.
     *
     * @param \App\Models\Review $entity
     * @return void
     */
    public function deleted(Review $entity)
    {
        ReviewDeletedEvent::dispatch($entity);
    }

    /**
     * Handle the Review "restored" event.
     *
     * @param \App\Models\Review $entity
     * @return void
     */
    public function restored(Review $entity)
    {
        ReviewRestoredEvent::dispatch($entity);
    }

    /**
     * Handle the Review "force deleted" event.
     *
     * @param \App\Models\Review $entity
     * @return void
     */
    public function forceDeleted(Review $entity)
    {
        ReviewForceDeletedEvent::dispatch($entity);
    }
}
