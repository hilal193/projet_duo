@extends('layouts.back')

@section('content')

<h1>Page admin SHOW : BLOG </h1>
<h2>SHOW : {{ $blog->titre }} </h2>
<h2>SHOW : {{ $blog->image }} </h2>
<h2>SHOW : {{ $blog->description }} </h2>
@dump($blog->titre)

<div class="card" style="width: 18rem;">
    <img src="{{ $blog->image }}" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">{{ $blog->titre }} </h5>
      <p class="card-text">{{ $blog->description }}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
@endsection
