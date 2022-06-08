<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
      "tittle" => "Home"
      ]);
});

Route::get('/about', function () {
    return view('about', [
      "tittle" => "About",
      "name" => "Dimas Triana",
      "email" => "dimastriana03@gmail.com",
      "image" => "img/1.jpg"
      ]);
});



Route::get('/blog' ,[PostController::class, 'index']);

/* singgel post */
Route::get('posts/{slug}', [PostController::class, 'show']);