@extends('adminlte::page')

@section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')

  <div class="container">
    <div class="card card-info">

      <div class="card-header">
        <h3 class="card-title">Team updating</h3>
      </div>

      <form action="{{route('team.update', $team->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">

          <div class="row">
            <div class="col d-flex align-items-center">
              <div class="form-group">
                <label for="image">Picture :</label>
                <input type="file" name="image" id="image" class="form-control-file">
              </div>
            </div>
            <div class="col d-flex flex-column align-items-center">
              <b class="text-center">Current image :</b>
              <div class="thumbnail-frame img-thumbnail rounded-circle float-right">
                <img src="{{asset('storage/'.$team->image)}}" class="thumbnail" alt="Current Picture">
              </div>
            </div>
            
          </div>

          <div class="form-group">
            <label for="nom">Name :</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{$team->nom}}" required>
          </div>

          <div class="form-group">
            <label for="poste">Post :</label>
            <input type="text" name="poste" id="poste" class="form-control" value="{{$team->poste}}" required>
          </div>

        </div>

        <div class="card-footer">
          <div class="btn-group">
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="{{route('team.index')}}" class="btn btn-secondary">Cancel</a>
          </div>
        </div>

      </form>

    </div>
  </div>

@endsection