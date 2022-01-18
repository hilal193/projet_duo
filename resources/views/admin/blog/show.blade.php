@extends('layouts.back')

@section('content')

<h1>Page admin SHOW : BLOG </h1>
{{--<h2>SHOW : {{ $blog->titre }} </h2>
<h2>SHOW : {{ $blog->image }} </h2>
<h2>SHOW : {{ $blog->description }} </h2> --}}
{{-- @dump($blog->titre) --}}

<div class="card showw" style="width: 50rem;">
    <img src="{{ $blog->image }}" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title :"> Titre : {{ $blog->titre }} </h5>
      <p class="card-text :"> Description : {{ $blog->description }}</p>
      <a href="{{ route("dashboard") }}" class="btn btn noir">RETURN TO ADMIN</a>
    </div>
  </div>
@endsection
