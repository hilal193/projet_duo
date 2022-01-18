@extends('layouts.back')

@section('content')

<h1>Page admin SHOW : BLOG </h1>
<h2>SHOW : {{ $portfolio->titre }} </h2>
<h2>SHOW : {{ $portfolio->description }} </h2>
@dump($portfolio->titre)

<form action="{{ route("portfolio.update",$portfolio->id) }}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
        <label  class="form-label">titre</label>
        <input type="text" value="{{ $portfolio->titre }}"  name="titre" class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">description</label>
        <input type="text" value="{{ $portfolio->description }}"  name="description" class="form-control" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

{{-- <a href="{{ route("dashboard") }}">Retour</a> --}}

@endsection
