@extends('layouts.index')

@section('content')

<form action="" method="">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nom</label>
        <input type="text" name="nom" class="form-control">
    </div>
    <div class="mb-3">
        <label  class="form-label">prenom</label>
        <input type="text" name="prenom" class="form-control" >
    </div>
    <butto class="btn btn-primary">Submit</button>
    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
</form>
@endsection
