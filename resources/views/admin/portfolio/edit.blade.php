@extends('adminlte::page')

@section('content')

    <div class="container">
        <h1 class="text-center">Ajout portfolio</h1>
            <form action="{{route('portfolio.update', $portfolio->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="">Nom du portfolio</label>
                <input type="text" name="nom" id="nom" class="form-control" value="{{$portfolio->nom}}">
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="img" id="img" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$portfolio->description}}</textarea>
            </div>
        </form>
    </div>

@endsection