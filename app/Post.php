<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 */
class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'author', 'body',
    ];
}
