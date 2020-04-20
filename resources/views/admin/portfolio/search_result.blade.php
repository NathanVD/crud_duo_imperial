@extends('adminlte::page')

@section('content')

  <div class="container">
    <a href="{{route('portfolio.index')}}" class="btn btn-primary btn-block mb-3"><i class="far fa-images"></i> Back to the list</a>

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Portfolio search result</h3>
        <h5 class="card-title text-right float-right">{{$projects->count()}} results found for search : "{{$search}}"</h5>
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
            @if ($projects->isEmpty())
              <tr>
                <td colspan="6" class="text-center"><b>No project found. Try another search !</b></td>
              </tr>
            @else
              @foreach ($projects as $project)
                <tr>
                  <td>{{$project->nom}}</td>
                  <td><img src="{{asset('storage/'.$project->img)}}" alt="" class="w-50"/></td>
                  <td>{{$project->description}}</td>
                  <td class="text-center text-nowrap">
                    <a href="{{route('portfolio.edit',$project->id)}}" class="btn btn-info">
                      <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{route('portfolio.destroy',$project->id)}}" method="POST" class="d-inline-block">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger">
                      <i class="fas fa-trash-alt"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach 
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection