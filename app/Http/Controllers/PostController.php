<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use App\Models\Post;

class PostController extends Controller
{
  public function index()
  {
    return view('post', [
      "tittle" => "Post",
      "posts" => Post::all()
      ]);
  }
  
  public function show($slug) 
  {
    return view('posts', [
    "tittle" => "singgel post",
    "post" => Post::find($slug)
    ]);
  }
}
