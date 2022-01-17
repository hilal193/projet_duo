@extends('layouts.back')

@section('content')

<h1>Page admin SHOW : BLOG </h1>
<h2>SHOW : {{ $portfolio->titre }} </h2>
<h2>SHOW : {{ $portfolio->description }} </h2>
@dump($portfolio->titre)

<div class="card" style="width: 18rem;">
    <img src="" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">{{ $portfolio->titre }} </h5>
      <p class="card-text">{{ $portfolio->description }}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
@endsection
