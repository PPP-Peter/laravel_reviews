<?php

namespace App\Nova;

use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Eminiarts\Tabs\Traits\HasTabs;
use Laravel\Nova\Fields\Badge;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphTo;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Wamesk\RatingField\RatingField;

class Review extends BaseResource
{
    use HasTabs;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Review::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            Tabs::make(__('review.detail', ['title' => $this->title]), [
                Tab::make(__('review.singular'), [

                    ID::make()->onlyOnForms(),

                    BelongsTo::make(__('field.user'), 'user', User::class)
                        ->filterable(),

                    Trix::make(__('text'), 'review'),

                    RatingField::make(__('reviews.rating'), 'rating')
                        ->sortable(),

                    Select::make(__('status'), 'status')
                        ->options($this->statuses())
                        ->displayUsingLabels()
                        ->onlyOnForms()
                        ->default('0')
                        ->hideWhenCreating()
                        ->sortable()
                        ->rules('required')
                        ->hideWhenUpdating(config('reviews.status_use') == false),
                    Badge::make(__('status'), 'status')
                        ->map([
                            \App\Models\Review::WAITING => 'waiting',
                            \App\Models\Review::EDIT => 'edit',
                            \App\Models\Review::DENIED => 'denied',
                            \App\Models\Review::APPROVED => 'approved',
                            \App\Models\Review::FINISHED => 'finished',
                        ])
                        ->addTypes([
                            'edit' => config('reviews.label.edit'),
                            'finished' => config('reviews.label.finished'),
                            'denied' => config('reviews.label.denied'),
                            'approved' => config('reviews.label.approved'),
                            'waiting' => config('reviews.label.waiting'),
                        ])
                        ->filterable()
                        ->sortable()
                        ->labels($this->statuses())
                        ->hideFromIndex(config('reviews.status_use') == false)
                        ->hideFromDetail(config('reviews.status_use') == false),


                    BelongsTo::make(__('reviews.updated by'), 'edited', User::class)
                        ->readonly()
                        ->hideWhenCreating()
                        ->hideWhenUpdating(),

                    DateTime::make(__('reviews.updated_status_at'), 'updated_status_at')
                        ->displayUsing(function ($date) {
                            if (is_null($date)) {
                                return '';
                            }
                            else return $date->diffForHumans();  //->format('d.m.Y H:i');
                        })
                        ->readonly()
                        ->hideWhenCreating()
                        ->hideWhenUpdating()
                        ->sortable(),

                    MorphTo::make(__('reviews.model'), 'model')->types(
                        config('reviews.types')
                    ),
                ]),
            ])->withToolbar(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }



}
