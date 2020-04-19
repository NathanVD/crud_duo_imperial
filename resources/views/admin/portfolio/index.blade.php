@extends('adminlte::page')

@section('content')

    <div class="container">
        <h1 class="text-center">Liste des portfolio</h1>
        <a href="{{route('admin.porftolio.create')}}">Ajout</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($portfolios as $portfolio)
                    <tr>
                        <td>{{$portfolio->nom}}</td>
                        <td>{{$portfolio->img}}</td>
                        <td>{{$portfolio->description}}</td>
                        <td>
                            <a href="{{route('admin.portfolio.edit', $portfolio->id)}}">
                                <button class="btn btn-warning">Modifier</button>
                            </a>
                            <button class="btn btn-danger">Supprimer</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection