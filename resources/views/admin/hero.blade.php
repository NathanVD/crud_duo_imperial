@extends('adminlte::page')

@section('content')

    <div class="container">
        <div class="card card-info">

            <div class="card-header">
                <h3 class="card-title">Header background image</h3>
            </div>
            <form action="{{route('hero.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')

                <div class="card-body">

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="image">Image :</label>
                                <input type="file" name="image" id="image" class="form-control-file" required>
                            </div>
                        </div>
                        <div class="col d-flex flex-column align-items-center">
                            <b class="text-center">Current image :</b>
                            @if ($hero )
                                <img src="{{asset('storage/'.$hero->img)}}" class="img-thumbnail w-50" alt="Current Picture">
                            @else
                                <i class="far fa-image fa-5x"></i>
                            @endif
                        </div>
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