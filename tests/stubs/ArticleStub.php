<?php

use Illuminate\Database\Eloquent\Model;
use DutaKey\Commentify\Scopes\CommentScopes;

class ArticleStub extends Model
{
    use \DutaKey\Commentify\Traits\Commentable;

    protected $connection = 'testbench';

    public $table = 'articles';
}
