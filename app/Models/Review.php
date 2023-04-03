<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends \App\Models\BaseModel
{
    use SoftDeletes;
    use HasUlids;

    protected $guarded = ['id'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
        'updated_status_at' => 'datetime',
    ];

    const
        WAITING = '0',
        EDIT = '1',
        APPROVED = '3',
        DENIED = '4',
        FINISHED = '5';

    public function getStatusLabelAttribute(): mixed
    {
        return $this->statuses()[$this->status] ?? null;
    }

    public function statuses(): array
    {
        return [
            self::WAITING => __('reviews.waiting'),
            self::EDIT => __('reviews.edit'),
            self::APPROVED => __('reviews.approved'),
            self::DENIED => __('reviews.denied'),
            self::FINISHED => __('reviews.finished'),
        ];
    }

    public function edited(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_status_at');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function model(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }

}
