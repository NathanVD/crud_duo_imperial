@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')

  <div class="card card-primary">
    <div class="card-header">
        @if ($teams->count() === 4)
            <h3 class="card-title">
                Team List 
                <small>(4 members maximum, remove a member to add another.)</small>
            </h3>  
        @else
            <h3 class="card-title">
                Team List 
                <a href="{{route('team.create')}}" class="badge bg-success align-top ml-3">Add <i class="fas fa-plus"></i></a>
            </h3>  
        @endif
      
    </div>

    <div class="card-body table-responsive p-0">
      <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col-3">Image</th>
                <th scope="col-3">Nom</th>
                <th scope="col-3">Poste</th>
                <th scope="col-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $team)
                <tr>
                    <td>
                        <div class="mini-frame img-thumbnail rounded-circle">
                            <img src="{{asset('storage/'.$team->image)}}" class="mini" alt="img, yay">
                        </div>
                    </td>
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
            
        </tbody>
      </table>
    </div>
  </div>

@endsection