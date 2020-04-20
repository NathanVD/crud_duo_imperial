@extends('adminlte::page')

@section('content')

  <div class="container">
    <div class="card card-info">

      <div class="card-header">
        <h3 class="card-title">Sections captions</h3>
      </div>

      <form action="{{route('captions.update')}}" method="POST">

        @csrf

        <div class="card-body">

          <div class="form-group">
            <label for="about">About us :</label>
            <input name="about" id="about" class="form-control" value="{{$captions ? $captions->about : 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam'}}">
          </div>
          <div class="form-group">
            <label for="services">Our services :</label>
            <input name="services" id="services" class="form-control" value="{{$captions ? $captions->services : 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium'}}">
          </div>
          <div class="form-group">
            <label for="portfolio">Portfolio :</label>
            <input name="portfolio" id="portfolio" class="form-control" value="{{$captions ? $captions->portfolio : 'Si stante, hoc natura videlicet vult, salvam esse se, quod concedimus ses haec dicturum fuisse'}}">
          </div>
          <div class="form-group">
            <label for="testimonials">Testimonials :</label>
            <input name="testimonials" id="testimonials" class="form-control" value="{{$captions ? $captions->testimonials : 'Erdo lide, nora porodo filece, salvam esse se, quod concedimus ses haec dicturum fuisse'}}">
          </div>
          <div class="form-group">
            <label for="team">Our team :</label>
            <input name="team" id="team" class="form-control" value="{{$captions ? $captions->team : 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque'}}">
          </div>
          <div class="form-group">
            <label for="contact">Contact us :</label>
            <input name="contact" id="contact" class="form-control" value="{{$captions ? $captions->contact : 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque'}}">
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