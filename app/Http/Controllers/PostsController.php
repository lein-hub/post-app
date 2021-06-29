<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create()
    {
        $star = '별';
        $name = 'ㅎㅇ';
        return view('posts.create', compact('star', 'name'));
    }

    public function store()
    {
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
    }
}
