<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends \App\Models\BaseModel
{
    use SoftDeletes;
    use HasUlids;

    //TODO:konstanty
    const
        STATUS_REVIEW_WAITING = '0',
        STATUS_REVIEW_APPROVED = '1',
        STATUS_REVIEW_DENIED = '2',
        STATUS_REVIEW_EDIT = '3',
        STATUS_REVIEW_FINISHED = '4';

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
