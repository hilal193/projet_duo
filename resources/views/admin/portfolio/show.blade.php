@extends('layouts.back')

@section('content')

<h1>Page admin SHOW : BLOG </h1>
{{-- <h2>SHOW : {{ $portfolio->titre }} </h2>
<h2>SHOW : {{ $portfolio->description }} </h2>
@dump($portfolio->titre) --}}

<div class="card showw" style="width: 50rem;">
    <img src="" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">Titre : {{ $portfolio->titre }} </h5>
      <p class="card-text">Description : {{ $portfolio->description }}</p>
      <a href="{{ route("dashboard") }}" class="btn btn noir">RETURN TO ADMIN</a>
    </div>
  </div>
@endsection
