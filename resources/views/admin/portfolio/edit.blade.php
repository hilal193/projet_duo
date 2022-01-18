@extends('layouts.back')

@section('content')

<h1>Page admin SHOW : BLOG </h1>
{{-- <h2>SHOW : {{ $portfolio->titre }} </h2>
<h2>SHOW : {{ $portfolio->description }} </h2>
@dump($portfolio->titre) --}}

<form class="m-5" action="{{ route("portfolio.update",$portfolio->id) }}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="text" value="{{ $portfolio->image }}" name="image" class="form-control">
    </div>
    <div class="mb-3">
        <label  class="form-label">Titre</label>
        <input type="text" value="{{ $portfolio->titre }}"  name="titre" class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Description</label>
        <input type="text" value="{{ $portfolio->description }}"  name="description" class="form-control" >
    </div>
    <button type="submit" class="btn btn vert">Submit</button>
    <a href="{{route("portfolio.affichage")}}" class="btn btn vert">BACK</a>
</form>

{{-- <a href="{{ route("dashboard") }}">Retour</a> --}}

@endsection
