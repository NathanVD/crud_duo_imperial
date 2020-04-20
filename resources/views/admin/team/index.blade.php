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
            @if ($teams->isEmpty())
                
            @else
                @foreach ($teams as $team)
                    <tr>
                        <td><img src="{{asset('storage/'.$team->image)}}" /></td>
                        <td>{{$team->nom}}</td>
                        <td>{{$team->poste}}</td>
                        <td>
                            <a href="{{route('team.edit',$team->id)}}" class="btn btn-info">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{route('team.destroy',$team->id)}}" method="POST" class="d-inline-block">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                        </td>
                    </tr>
                @endforeach   
            @endif
            
        </tbody>
    </div>

@endsection