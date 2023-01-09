<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index()
  {
    //
  }

  public function create()
  {
    //
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'content' => 'required'
    ]);

    $post = new Post();
    $post->content = $request->content;
    $post->user_id = auth()->id();
    $post->save();

    return back()->with('success', 'Post created');
  }

  public function show()
  {
    //
  }

  public function edit()
  {
    //
  }

  public function update(Request $request, )
  {
    //
  }

  public function destroy(Post $post)
  {
    abort_unless($post->author->id === auth()->id(), 'You can not delete this post');

    $post->delete();
    return back()->with('success', 'Post deleted');
  }
}
