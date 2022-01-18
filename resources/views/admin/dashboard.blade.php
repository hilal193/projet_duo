@extends('layouts.back')

@section('content')



<div class="sidebar-container mt-10 pt-10">
    <div class="sidebar-logo">
        Back Office
    </div>
    <ul class="sidebar-navigation">
        <li class="header">Create Formulaire</li>
        <li>
            <a href="{{route('blog.create')}}">
                <i class="fa fa-home" aria-hidden="true"></i> Blog -form
            </a>
        </li>
        <li>
            <a href="{{route('portfolio.create')}}">
                <i class="fa fa-tachometer" aria-hidden="true"></i> Portfolio -form
            </a>
        </li>

    </ul>
    <ul class="sidebar-navigation">
        <li class="header">Affichage</li>
        <li>
            <a href="{{route('blog.affichage')}}">
                <i class="fa fa-home" aria-hidden="true"></i> Blog
            </a>
        </li>
        <li>
            <a href="{{route('portfolio.affichage')}}">
                <i class="fa fa-tachometer" aria-hidden="true"></i> Portfolio
            </a>
        </li>
        <li class="header">Another Menu</li>
        <li>
            <a href="#">
                <i class="fa fa-users" aria-hidden="true"></i> Friends
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-cog" aria-hidden="true"></i> Settings
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-info-circle" aria-hidden="true"></i> Information
            </a>
        </li>
    </ul>
</div>
<div>
    <h2 class="sub-header">Dashboard</h2>
</div>
{{-- <div class="content-container"> --}}


{{-- table --}}

{{-- <div class="table-responsive">
                  <table class="table table-striped">
                      <thead>
                          <tr class="table-info">
                              <th>#id</th>
                              <th>TITRE</th>
                              <th>IMAGE</th>
                              <th>DESCRIPTION</th>
                              <th>AFFICHE</th>
                              <th>ACTION</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>lorem</td>
                              <td>Lorem</td>
                              <td>iLorempsum</td>
                              <td>Lorem</td>
                              <td>Lorem</td>
                              <td>
                                  <button type="submit" class="btn rouge">Delete</button>
                                  <button type="submit" class="btn vert">Show</button>
                                  <button type="submit" class="btn orange">Edit</button>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div> --}}

{{-- blog --}}
{{-- <h3>BLOG :</h3>
              <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr class="table-info">
                            <th>#id</th>
                              <th>TITRE</th>
                              <th>IMAGE</th>
                              <th>DESCRIPTION</th>
                              <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($afficheBlog as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
<td>{{ $item->titre }}</td>
<td><img src="{{ $item->image }}" style="height:50px; width:50px;" alt=""></td>
<td>{{ $item->description }}</td>
<td class="df">
    <a href="{{route('blog.show', $item->id)}}" class="btn btn vert">Show</a>
    <a href="{{route('blog.edit', $item->id)}}" class="btn btn orange edit">Edit</a>
    <form action="{{ route("blog.destroy", $item->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn rouge">Delete</button> --}}
        {{-- <button type="submit" class="btn vert">Show</button>
                                <button type="submit" class="btn orange">Edit</button> --}}
        {{-- </td>
                            </form>

                        </tr>

                        @empty
                        <tr>
                            <td>Vide</td>
                            <td>Vide</td>
                            <td>Vide</td>
                            <td>Vide</td>
                            <td>Vide</td>
                            <td>
                                <button type="submit" class="btn rouge">Delete</button> --}}
        {{-- <button type="submit" class="btn rouge">show</button> --}}
        {{-- </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div> --}}

        {{-- portfolio --}}
        {{-- <h3>PORTFOLIO :</h3>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr class="table-info">
                            <th>#id</th>
                            <th>TITRE</th>
                            <th>DESCRIPTION</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($affichePortfolio as $item)
                        <tr>
                            <td>{{ $item->id }}
</td>
<td>{{ $item->titre }}</td>
<td>{{ $item->description }}</td>
<td class="df">
    <a href="{{route('portfolio.show', $item->id)}}" class="btn btn vert">Show</a>
    <a href="{{route('portfolio.edit', $item->id)}}" class="btn btn orange edit">Edit</a>
    <form action="{{ route("portfolio.destroy", $item->id) }}" method="POST">
        @csrf
        @method("DELETE")
        <button type="submit" class="btn rouge">Delete</button> --}}
        {{-- <button type="submit" class="btn rouge">show</button> --}}
        {{-- </td>
                            </form>
                        </tr>
                        @empty
                        <tr>
                            <td>vide</td>
                            <td>vide</td>
                            <td>vide</td>
                            <td>vide</td>
                            <td>vide</td>
                            <td>
                                <button type="submit" class="btn rouge">Delete</button>
                            </td>
                        </tr>

                        @endforelse
                    </tbody>
                </table>
            </div> --}}
        {{-- </div> --}}

        @endsection
