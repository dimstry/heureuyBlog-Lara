

<!--  halaman inj menggunakan layouts.main -->
@extends('layouts.main')

<!-- ini section yg menggantikan yeild -->
@section('container')
  <h1>Halaman {{ $tittle }}</h1>
  @foreach ($posts as $post)
  <article class="mb-5">
    <h2>
      <a href="/posts/{{ $post["slug"] }}">{{ $post["tittle"] }} </a>
    </h2>
    <h5>By : {{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>
  </article>
  @endforeach;
@endsection