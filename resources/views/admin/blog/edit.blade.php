@extends('layouts.back')

@section('content')

<h1>Page admin EDIT : BLOG </h1>
{{-- <h2>edit : {{ $blog->titre }} </h2>
<h2>edit : {{ $blog->image }} </h2>
<h2>edit : {{ $blog->description }} </h2>
@dump($blog->titre) --}}


<form class="m-5" action="{{ route("blog.update",$blog->id) }}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="text" value="{{ $blog->image }}" name="image" class="form-control">
    </div>
    <div class="mb-3">
        <label  class="form-label">Titre</label>
        <input type="text" value="{{ $blog->titre }}" name="titre" class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Description</label>
        <input type="text" value="{{ $blog->description }}" name="description" class="form-control" >
    </div>
    {{-- <butto class="btn btn-primary">Submit</button> --}}
    <button type="submit" class="btn btn vert">CONFIRM</button>
    <a href="{{route("blog.affichage")}}" class="btn btn vert">BACK</a>

</form>

{{-- <a href="{{ route("dashboard") }}">Retour</a> --}}


@endsection
