@extends('adminlte::page')

@section('content')

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
          <label for="icon">Icon</label>
          <input type="text" name="icon" id="icon" class="form-control" value="{{$service->icon}}">
        </div>

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control" value="{{$service->title}}">
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description" id="description" class="form-control" rows="4" maxlength="150">{{$service->description}}</textarea>
        </div>

        <div class="form-group">
          <label for="link">Link</label>
          <input type="text" name="link" id="link" class="form-control" value="{{$service->link}}">
        </div>

      </div>

      <div class="card-footer">
        <button type="submit" class="btn btn-info">Submit</button>
      </div>
    </form>

  </div>

@endsection