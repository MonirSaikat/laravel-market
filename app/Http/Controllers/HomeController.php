<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $posts = Post::with('author')->get();
    $users = User::whereNot('id', auth()->id())->get();

    return view('pages.home', compact('posts', 'users'));
  }
}
