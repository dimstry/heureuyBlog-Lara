<!--  halaman inj menggunakan layouts.main -->
@extends('layouts.main')

<!-- ini section yg menggantikan yeild -->
@section('container')
  <h1>ini {{ $tittle }}</h1>
  <!-- template php blade engine echo-->
  <h5>nama saya : {{ $name }}</h5>
  <p>email saya : {{ $email }}</p>
  <img src="{{ $image }}" alt="" width="200px" height="200px" class="img-thumbnail rounded-circle">
@endsection