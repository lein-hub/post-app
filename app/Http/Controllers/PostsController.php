<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $title = $request->title;
        $content = $request->content;
        // dd($request);

        $post = new Post();
        $post->title = $title;
        $post->content = $content;
        $post->user_id = Auth::user()->id;

        $post->save();

        return redirect('/posts/index');
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }

    public function show()
    {
    }

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(2);
        // $posts = Post::latest()->paginate(2);

        // dd($posts[0]->created_at);
        return view('posts.index', compact('posts'));
    }
}
