@extends('adminlte::page')

@section('content')

  <div class="container">
    <div class="card card-info">

      <div class="card-header">
        <h3 class="card-title">Service updating</h3>

        {{-- <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div> --}}
      </div>

      <form action="{{route('services.update',$service->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">

          <div class="form-group">
            <label for="icon">Icon <a href="https://fontawesome.com/icons?d=gallery&m=free" title="FontAwesome"><i class="fab fa-font-awesome-flag"></i></a></label>
            <input type="text" name="icon" id="icon" class="form-control" value="{{$service->icon}}" required>
          </div>

          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{$service->title}}" required>
          </div>

          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" maxlength="150" required>{{$service->description}}</textarea>
          </div>

          <div class="form-group">
            <label for="link">Link</label>
            <input type="text" name="link" id="link" class="form-control" value="{{$service->link}}" required>
          </div>

        </div>

        <div class="card-footer">
          <div class="btn-group">
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="{{route('services.index')}}" class="btn btn-secondary">Cancel</a>
          </div>
        </div>

      </form>

    </div>
  </div>

@endsection