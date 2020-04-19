@extends('adminlte::page')

@section('content')

    <div class="container">
        <h1 class="text-center">Liste de la team</h1>
        <a href="{{route('team.create')}}">Ajouter</a>
        <br>
        <thead>
            <tr class="row">
                <th scope="col-3">Image</th>
                <th scope="col-3">Nom</th>
                <th scope="col-3">Poste</th>
                <th scope="col-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $team)
                <tr>
                    <td><img src="{{$team->image}}" /></td>
                    <td>{{$team->nom}}</td>
                    <td>{{$team->poste}}</td>
                    <td>
                        <button class="btn btn-warning">Modifier</button>
                        <button class="btn btn-danger">Supprimer</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </div>

@endsection