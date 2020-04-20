@extends('adminlte::page')

@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Portfolio List <a href="{{route('portfolio.create')}}" class="badge bg-success align-top ml-3">Add <i class="fas fa-plus"></i></a></h3>
        </div>

        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($portfolios as $portfolio)
                        <tr>
                            <td>{{$portfolio->nom}}</td>
                            <td><img src="{{asset('storage/'.$portfolio->img)}}" alt="" class="w-50"/></td>
                            <td>{{$portfolio->description}}</td>
                            <td class="text-center text-nowrap">
                                <a href="{{route('portfolio.edit',$portfolio->id)}}" class="btn btn-info">
                                    <i class="fas fa-edit"></i>
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
    </div>

@endsection