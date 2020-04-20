@extends('adminlte::page')

@section('content')

    <div class="container">
        <div class="card card-success">

            <div class="card-header">
                <h3 class="card-title">New team member</h3>
            </div>
            <form action="{{route('team.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control-file" required>
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="nom" name="nom" id="nom" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="poste">Poste</label>
                        <input type="text" name="poste" id="poste" class="form-control" required>
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