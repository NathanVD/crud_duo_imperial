@extends('adminlte::page')

@section('content')

  <div class="container">
    <div class="card card-info">

      <div class="card-header">
        <h3 class="card-title">Contacts</h3>
      </div>

      <form action="{{route('contact.update')}}" method="POST">

        @csrf

        <div class="card-body">

          <div class="form-group">
            <label for="adress1">Adress :</label>
            <div class="form-row">
              <div class="col-7">
                <input name="adress1" id="adress1" class="form-control" value="{{$contact ? $contact->email : 'A108 Adam Street'}}" required>
              </div>
              <div class="col">
                <input name="adress2" id="adress2" class="form-control" value="{{$contact ? $contact->email : 'New York, NY 535022'}}" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="email">E-mail adress :</label>
            <input type="email" name="email" id="email" class="form-control" value="{{$contact ? $contact->email : 'info@example.com'}}" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone number :</label>
            <input name="phone" id="phone" class="form-control" value="{{$contact ? $contact->phone : '+1 5589 55488 55s'}}" required>
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