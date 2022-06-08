
<!--  halaman inj menggunakan layouts.main -->
@extends('layouts.main')

<!-- ini section yg menggantikan yeild -->
@section('container')
     <h1>Halaman {{ $tittle }}</h1>
     <article class="my-4">
       <h2>{{ $post["tittle"]}}</h2>
       <h5>{{ $post["author"]}}</h5>
       <p>{{ $post["body"]}}</p>
     </article>
     
     
     <a href="/blog">Kembali</a>
@endsection