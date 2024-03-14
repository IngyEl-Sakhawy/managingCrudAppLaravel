<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::all()->take(15);
        return view('user_posts.layout1.index',['posts' => $posts]);
    }

    public function show(string $id) {
        $post=Post::find($id);
        return view('user_posts.layout1.show',['post'=>$post]);
    }

    public function create() {
        return view('user_posts.layout1.create');
    }

    public function store(Request $request) {
        //no view as we will save data in data store
        //redirect to posts list
    }

    public function edit(string $id) {
        $post=Post::find($id);
        return view('user_posts.layout1.edit',['post'=>$post]);
    }

    public function update(Request $request, string $id) {
        $post=Post::find($id);
        return view('user_posts.layout1.edit',['post'=>$post]);
    }

    public function showTrash()
    {
        $deletedPosts = Post::onlyTrashed()->get();
        return view('posts.trash', ['deletedPosts' => $deletedPosts]);
    }

    public function destroy(string $id) {
        Post::find($id)->delete();
    }
}
