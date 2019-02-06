<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Post;

/**
 * Class PostsController
 *
 * With more time I would have looked into these
 * https://laravel.com/docs/5.7/eloquent-resources
 */
class PostsController
{
    /**
     * @see /api/post
     *
     * @return \Traversable
     */
    public function all(): \Traversable
    {
        return Post::all();
    }

    /**
     * @see /api/post/1
     * @param Post $post
     * @return Post
     */
    public function get(Post $post): Post
    {
        return $post;
    }
}
