@extends('adminlte::page')

@section('content')

    <div class="container">
        <h1 class="text-center">Liste des portfolio</h1>
        <a href="{{route('portfolio.create')}}">Ajout</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($portfolios as $portfolio)
                    <tr>
                        <td>{{$portfolio->nom}}</td>
                        <td><img src="{{asset('storage/'.$portfolio->img)}}" alt="" class="w-50"/></td>
                        <td>{{$portfolio->description}}</td>
                        <td>
                            <a href="{{route('portfolio.edit', $portfolio->id)}}">
                                <button class="btn btn-warning">Modifier</button>
                            </a>
                            <form action="{{route('portfolio.destroy',$portfolio->id)}}" method="POST" class="d-inline-block">
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

@endsection