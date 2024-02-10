<?php

use Illuminate\Database\Eloquent\Model;
use DutaKey\Commentify\Scopes\CommentScopes;

class EpisodeStub extends Model
{
    use \DutaKey\Commentify\Traits\Commentable;

    protected $connection = 'testbench';

    public $table = 'episodes';
}
