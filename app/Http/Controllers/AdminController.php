<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Post as PostRequest;
use App\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

/**
 * Class AdminController
 */
class AdminController extends BaseController
{
    /**
     * Admin Index
     *
     * @return View
     */
    public function index(): View
    {
        return view('admin.index', ['posts' => Post::paginate(5)]);
    }

    /**
     * Admin Create Form
     */
    public function createForm(): View
    {
        $post = new Post();
        return view('admin.form', ['post' => $post]);
    }

    /**
     * Admin Create
     *
     * @param PostRequest $post
     * @return RedirectResponse
     * @throws \Exception
     */
    public function create(PostRequest $post): RedirectResponse
    {
        $post = new Post([
            'title'  => $post['title'],
            'author' => $post['author'],
            'body'   => $post['body'],
        ]);
        $post->save();

        return redirect('/admin')->with('success', 'New Post saved!');
    }

    /**
     * Admin Edit Form
     *
     * @param Post $post
     * @return View
     */
    public function editForm(Post $post): View
    {
        return view('admin.form', ['post' => $post]);
    }

    /**
     * Admin Edit
     *
     * @param Post        $post
     * @param PostRequest $postRequest
     * @return RedirectResponse
     */
    public function edit(Post $post, PostRequest $postRequest)
    {
        $post->title = $postRequest['title'];
        $post->author = $postRequest['author'];
        $post->body = $postRequest['body'];
        $post->save();

        return redirect('/admin')->with('success', 'Edited Post saved!');
    }

    /**
     * Admin Delete
     *
     * @param Post $post
     * @return RedirectResponse
     * @throws \Exception
     */
    public function delete(Post $post)
    {
        $post->delete();
        return back()->with('success', 'Post deleted!');
    }
}
