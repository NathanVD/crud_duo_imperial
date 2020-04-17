@extends('adminlte::page')

@section('content')

  <div class="card card-success">

    <div class="card-header">
      <h3 class="card-title">New testimonial</h3>

      {{-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
      </div> --}}
    </div>

    <form action="{{route('testimonials.store')}}" method="POST" enctype="multipart/form-data">
      <div class="card-body">
        @csrf
        {{-- @method('put') --}}

        <div class="form-group">
          <label for="picture">Picture</label>
          <input type="file" name="picture" id="picture" class="form-control-file">
        </div>

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="form-group">
          <label for="company">Company</label>
          <input type="text" name="company" id="company" class="form-control">
        </div>

        <div class="form-group">
          <label for="quote">Quote</label>
          <textarea name="quote" id="quote" class="form-control" rows="4" maxlength="150"></textarea>
        </div>

      </div>

      <div class="card-footer">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </form>

  </div>

@endsection