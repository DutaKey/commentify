<?php

namespace DutaKey\Commentify\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use DutaKey\Commentify\Models\Comment;

trait Commentable
{

    /**
     * @return MorphMany
     */
    public function comments(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
