<?php

use Illuminate\Database\Eloquent\Model;

class CommentStub extends Model
{
    use \DutaKey\Commentify\Traits\Commentable;

    protected $connection = 'testbench';

    public $table = 'comments';
}
