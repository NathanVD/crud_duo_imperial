@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')

  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Testimonials List <a href="{{route('testimonials.create')}}" class="badge bg-success align-top ml-3">Add <i class="fas fa-plus"></i></a></h3>
    </div>

    <div class="card-body table-responsive p-0">
      <table class="table table-hover">

        <thead>
          <tr>
            <th>Picture</th>
            <th>Name</th>
            <th>Company</th>
            <th>Quote</th>
            <th class="text-center">Actions</th>
          </tr>
        </thead>

        <tbody>
          @if ($testimonials->isEmpty())
              <tr>
                <td colspan="6" class="text-center"><b>No testimonial</b></td>
              </tr>
          @else 
            @foreach ($testimonials as $testimonial)
              <tr>
                <td>
                  <div class="mini-frame img-thumbnail rounded-circle">
                    <img src="{{asset('storage/'.$testimonial->img_path)}}" class="mini" alt="img, yay">
                  </div>
                </td>
                <td class="text-capitalize">{{$testimonial->name}}</td>
                <td class="text-capitalize">{{$testimonial->company}}</td>
                <td>{{$testimonial->quote}}</td>
                <td class="text-center text-nowrap">
                  <a href="{{route('testimonials.edit',$testimonial->id)}}" class="btn btn-info">
                    <i class="fas fa-edit"></i>
                  </a>
                  <form action="{{route('testimonials.destroy',$testimonial->id)}}" method="POST" class="d-inline-block">
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

@endsection
