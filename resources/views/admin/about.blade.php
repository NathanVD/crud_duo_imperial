@extends('adminlte::page')

@section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')

    <div class="container">
        <div class="card card-info">

            <div class="card-header">
                <h3 class="card-title">About</h3>
            </div>

            <form action="{{route('about.update')}}" method="POST" enctype="multipart/form-data">
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
                            <img src="{{$about ? ($about->image === 'img/about-img.jpg') ? asset($about->image) : asset('storage/'.$about->image) : asset('img/about-img.jpg')}}" class="img-thumbnail w-50" alt="Current Picture">
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="titre">Titre :</label>
                        <input name="titre" id="titre" class="form-control" value="{{$about ? $about->titre : 'We provide great services and ideas'}}" required>
                    </div>
                    <div class="form-group">
                        <label for="description1">Part 1 :</label>
                        <textarea name="description1" id="description1" class="form-control" rows="4" maxlength="150" required>{{$about ? $about->description1 : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate'}} </textarea>
                    </div>
                    <div class="form-group">
                        <label for="description1">Part 2 :</label>
                        <textarea name="description2" id="description2" class="form-control" rows="4" maxlength="150">{{$about ? $about->description2 : 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'}} </textarea>
                    </div>
                    <div class="form-group">
                        <label for="description1">Part 3 :</label>
                        <textarea name="description3" id="description3" class="form-control" rows="4" maxlength="150">{{$about ? $about->description3 : 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt molli.'}} </textarea>
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