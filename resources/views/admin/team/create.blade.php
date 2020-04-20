@extends('adminlte::page')

@section('content')

    <div class="container">
        <h1 class="text-center">Ajout membre team</h1>
        <form action="{{route('team.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex mt-5">
                <div>
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