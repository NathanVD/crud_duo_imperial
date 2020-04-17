@extends('adminlte::page')

@section('content')

    <div class="container">
        <h1 class="text-center">Changement de l'image de fond</h1>
        <form action="{{route('hero.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="text-center">
                <input type="file" name="image" id="image" placeholder="Url image">
                <button type="submit">Confirmer</button>
            </div>
        </form>
    </div>

@endsection