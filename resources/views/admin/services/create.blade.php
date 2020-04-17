@extends('adminlte::page')

@section('content')

  <div class="card card-success">

    <div class="card-header">
      <h3 class="card-title">New service</h3>

      {{-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
      </div> --}}
    </div>

    <form action="{{route('services.store')}}" method="POST">
      <div class="card-body">
        @csrf
        {{-- <div class="input-group mb-3">
          <label for="icon">Icon</label>
          <div class="input-group-prepend">
            <select class="custom-select input-group-text" id="inputGroupSelect01">
              <option selected>Choose...</option>
              <option value="1">far</option>
              <option value="2">fas</option>
              <option value="3">fab</option>
            </select>
          </div>
          <div class="input-group-append">
            <span class="input-group-text">fa-</span>
          </div>
          <input type="text" name="icon" id="icon" class="form-control">
        </div> --}}
        <div class="form-group">
          <label for="icon">Icon</label>
          <input type="text" name="icon" id="icon" class="form-control" placeholder="Example : fas fa-cat">
        </div>

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description" id="description" class="form-control" rows="4" maxlength="150"></textarea>
        </div>

        <div class="form-group">
          <label for="link">Link</label>
          <input type="text" name="link" id="link" class="form-control">
        </div>

      </div>

      <div class="card-footer">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </form>

  </div>

@endsection