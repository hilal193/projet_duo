@extends('layouts.back')

@section('content')

<h1>Page admin EDIT : BLOG </h1>
<h2>edit : {{ $blog->titre }} </h2>
<h2>edit : {{ $blog->image }} </h2>
<h2>edit : {{ $blog->description }} </h2>
@dump($blog->titre)


<form action="{{ route("blog.update",$blog->id) }}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
        <label class="form-label">image</label>
        <input type="text" value="{{ $blog->image }}" name="image" class="form-control">
    </div>
    <div class="mb-3">
        <label  class="form-label">titre</label>
        <input type="text" value="{{ $blog->titre }}" name="titre" class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">description</label>
        <input type="text" value="{{ $blog->description }}" name="description" class="form-control" >
    </div>
    {{-- <butto class="btn btn-primary">Submit</button> --}}
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

{{-- <a href="{{ route("dashboard") }}">Retour</a> --}}


@endsection
