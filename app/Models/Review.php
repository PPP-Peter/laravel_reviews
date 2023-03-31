<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends \App\Models\BaseModel
{
    use SoftDeletes;
    use HasUlids;

    const
        EDIT = '0',
        FINISHED = '1',
        WAITING = '2',
        APPROVED = '3',
        DENIED = '4';

    public function getStatusLabelAttribute(): mixed
    {
        return $this->statuses()[$this->status] ?? null;
    }

    public function statuses(): array
    {
        return [
            self::EDIT => __('reviews.edit'),
            self::FINISHED => __('reviews.finished'),
            self::WAITING => __('reviews.waiting'),
            self::APPROVED => __('reviews.approved'),
            self::DENIED => __('reviews.denied'),
        ];
    }

    public function updated_status_at(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_status_at');
    }

    protected $guarded = ['id'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
        'updated_status_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class);
    }


    public function model(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }

}
