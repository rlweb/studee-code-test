<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Post;
use Illuminate\Routing\Controller;

/**
 * Class PostsController
 *
 * With more time I would have looked into these
 * https://laravel.com/docs/5.7/eloquent-resources
 */
class PostsController extends Controller
{
    /**
     * Get all posts, paginated
     *
     * @see /api/post
     *
     * @return \Traversable
     */
    public function all(): \Traversable
    {
        return Post::paginate(5);
    }

    /**
     * Get a single post
     *
     * @see /api/post/1
     *
     * @param Post $post
     * @return Post
     */
    public function get(Post $post): Post
    {
        return $post;
    }
}
