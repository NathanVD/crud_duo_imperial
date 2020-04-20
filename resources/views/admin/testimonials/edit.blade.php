@extends('adminlte::page')

@section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')

  <div class="container">
    <div class="card card-info">

      <div class="card-header">
        <h3 class="card-title">Testimonials updating</h3>
      </div>

      <form action="{{route('testimonials.update',$testimonial->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">

          <div class="row">
            <div class="col d-flex align-items-center">
              <div class="form-group">
                <label for="picture">Picture</label>
                <input type="file" name="picture" id="picture" class="form-control-file">
              </div>
            </div>
            <div class="col">
              <div class="thumbnail-frame img-thumbnail rounded-circle float-right">
                <img src="{{asset('storage/'.$testimonial->img_path)}}" class="thumbnail" alt="Current Picture">
              </div>
            </div>
            
          </div>

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$testimonial->name}}">
          </div>

          <div class="form-group">
            <label for="company">Company</label>
            <input type="text" name="company" id="company" class="form-control" value="{{$testimonial->company}}">
          </div>

          <div class="form-group">
            <label for="quote">Quote</label>
            <textarea name="quote" id="quote" class="form-control" rows="4" maxlength="150"> {{$testimonial->quote}} </textarea>
          </div>

        </div>

        <div class="card-footer">
          <div class="btn-group">
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="{{route('testimonials.index')}}" class="btn btn-secondary">Cancel</a>
          </div>
        </div>

      </form>

    </div>
  </div>

@endsection