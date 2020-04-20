@extends('adminlte::page')

@section('content')

    <div class="container">
        <h1 class="text-center">Modification About</h1>
        <form action="{{route('about.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="d-flex justify-content-around mt-5">
                <p>Image</p>
                <input type="file" name="image" id="image">
            </div>
            <div class="d-flex justify-content-around mt-2">
                <p class="d-flex align-items-center">Titre</p>
                <input type="text" name="titre" id="image">
            </div>
            <div class="d-flex justify-content-around mt-2">
                <p class="d-flex align-items-center">Partie 1</p>
                <textarea name="description1" id="description1" cols="60" rows="5"></textarea>
            </div>
            <div class="d-flex justify-content-around mt-2">
                <p class="d-flex align-items-center">Partie 2</p>
                <textarea name="description2" id="description2" cols="60" rows="5"></textarea>
            </div>
            <div class="d-flex justify-content-around mt-2">
                <p class="d-flex align-items-center">Partie 3</p>
                <textarea name="description3" id="description3" cols="60" rows="5"></textarea>
            </div>
            <button type="submit">Confirmer</button>
        </form>
    </div>

@endsection