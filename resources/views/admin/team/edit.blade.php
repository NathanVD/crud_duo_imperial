@extends('adminlte::page')

@section('content')

    <div class="container">
        <h1 class="text-center">Modification Team</h1>
        <form action="{{route('team.update', $team->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="d-flex mt-5">
                <div>
                    <p>N°1</p>
                    <div class="form-group">
                        <input type="file" id="image" name="image">
                        <input type="text" id="nom" name="nom" placeholder="Nom">
                        <input type="text" id="poste" name="poste" placeholder="Poste">
                        <button type="submit">Confirmer</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection