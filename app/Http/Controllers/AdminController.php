<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

/**
 * Class AdminController
 */
class AdminController extends BaseController
{
    /**
     * Admin Index
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.index', ['posts' => Post::paginate(5)]);
    }

    /**
     * Admin Create
     *
     * @param Request $request
     */
    public function create(Request $request)
    {
        throw new \Exception('todo');
    }

    /**
     * Admin Edit
     *
     * @param Post $post
     */
    public function edit(Post $post)
    {
        throw new \Exception('todo');
    }

    /**
     * Admin Delete
     *
     * @param Post $post
     */
    public function delete(Post $post)
    {
        $post->delete();
        return back()->with('success', 'Post deleted!');
    }
}
