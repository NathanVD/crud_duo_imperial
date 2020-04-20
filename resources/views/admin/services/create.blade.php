@extends('adminlte::page')

@section('content')
  <div class="container">
    <div class="card card-success">

      <div class="card-header">
        <h3 class="card-title">New service</h3>
      </div>

      <form action="{{route('services.store')}}" method="POST">
        <div class="card-body">
          @csrf

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
            <div class="btn-group">
              <button type="submit" class="btn btn-success">Submit</button>
              <a href="{{route('services.index')}}" class="btn btn-secondary">Cancel</a>
            </div>
          </div>
        
      </form>

    </div>
  </div>

@endsection