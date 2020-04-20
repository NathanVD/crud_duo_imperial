@extends('adminlte::page')

@section('content')

  <div class="container">
    <div class="card card-info">

      <div class="card-header">
        <h3 class="card-title">Subscribe link</h3>
      </div>

      <form action="{{route('subscribe.update')}}" method="POST">

        @csrf

        <div class="card-body">
          <div class="form-group">
            <label for="link">Link :</label>
            <input name="link" class="form-control" id="link" value="{{$prevLink ? $prevLink->link : 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'}}">
          </div>
        </div>

        <div class="card-footer">
          <div class="btn-group">
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="{{route('admin')}}" class="btn btn-secondary">Cancel</a>
          </div>
        </div>

      </form>

    </div>
  </div>

@endsection