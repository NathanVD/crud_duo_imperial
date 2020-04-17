@extends('adminlte::page')

@section('content')

  {{-- <div class="container"> --}}
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Services List <a href="{{route('services.create')}}" class="badge bg-success align-top ml-3">Add <i class="fas fa-plus"></i></a></h3>
      </div>

      <div class="card-body table-responsive p-0">
        <table class="table table-hover">

          <thead>
            <tr>
              <th>Icon</th>
              <th>Title</th>
              <th>Description</th>
              <th>Link</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>

          <tbody>
            @if ($services->isEmpty())
                <tr>
                  <td colspan="6" class="text-center"><b>Aucun service proposé</b></td>
                </tr>
            @else 
              @foreach ($services as $service)
                <tr>
                  <td><i class="{{$service->icon}}"></i></td>
                  <td class="text-uppercase">{{$service->title}}</td>
                  <td>{{$service->description}}</td>
                  <td>{{$service->link}}</td>
                  <td class="text-center text-nowrap">
                    <a href="{{route('services.edit',$service->id)}}" class="btn btn-info">
                      <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{route('services.destroy',$service->id)}}" method="POST" class="d-inline-block">
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
  {{-- </div> --}}

@endsection