<?php

namespace App\Models;

class Post
{
   private static $blog_post = [
    [
      "tittle" => "judul pertama",
      "author" => "Dimas",
      "slug" => "judul post pertama",
      "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolorem saepe atque obcaecati dolore iusto, pariatur voluptatum voluptas soluta assumenda aut deserunt labore necessitatibus laboriosam! Illum quos odio debitis cum reiciendis. Atque, dolorum quo neque molestias aperiam suscipit, quae praesentium fugit iusto culpa quas, ratione, beatae mollitia incidunt debitis accusantium veniam ducimus magni nam iste adipisci ad quaerat voluptates tempora? Nam, at! Dolore reiciendis saepe, voluptate, veritatis odio, nemo tempore accusantium eos mollitia accusamus ipsa ab non tenetur doloribus animi!"
    ],
    [
      "tittle" => "judul kedua",
      "author" => "kresna",
      "slug" => "judul post kedua",
      "body" => " adipisicing elit. Aperiam dolorem saepe atque obcaecati dolore iusto, pariatur voluptatum voluptas soluta assumenda aut deserunt labore necessitatibus laboriosam! Illum quos odio debitis cum reiciendis. Atque, dolorum quo neque molestias aperiam suscipit, quae praesentium fugit iusto culpa quas, ratione, beatae mollitia incidunt debitis accusantium veniam ducimus magni nam iste adipisci ad quaerat voluptates tempora? Nam, at! Dolore reiciendis saepe, voluptate, veritatis odio, nemo tempore accusantium eos mollitia accusamus ipsa ab non tenetur doloribus animi!Loremem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolorem saepe atque obcaecati dolore iusto, pariatur voluptatum voluptas soluta assumenda aut deserunt labore necessitatibus laboriosam! Illum quos odio debitis cum reiciendis. Atque, dolorum quo neque molestias aperiam suscipit, quae praesentium fugit iusto culpa quas, ratione, beatae mollitia incidunt debitis accusantium veniam ducimus magni nam iste adipisci ad quaerat voluptates tempora? Nam, at! Dolore reiciendis saepe, voluptate, veritatis odio, nemo tempore accusantium eos mollitia accusamus ipsa ab non tenetur doloribus animi!"
    ],
  ];
  
  public static function all() {
    return collect(self::$blog_post);
  }
  
  public static function find($slug) {
    $posts = static::all();
    return $posts -> firstWhere('slug', $slug);
  }
}