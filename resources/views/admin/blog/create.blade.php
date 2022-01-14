{{-- @extends('layouts.index') --}}
@extends('layouts.back')

@section('content')

<form action="{{ route("blog.store") }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">image</label>
        <input type="text" name="image" class="form-control">
    </div>
    <div class="mb-3">
        <label  class="form-label">titre</label>
        <input type="text" name="titre" class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">description</label>
        <input type="text" name="description" class="form-control" >
    </div>
    {{-- <butto class="btn btn-primary">Submit</button> --}}
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
