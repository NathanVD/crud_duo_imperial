@extends('adminlte::page')

@section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')

    <div class="container">
        <div class="card card-info">

            <div class="card-header">
                <h3 class="card-title">Portfolio updating</h3>
            </div>

            <form action="{{route('portfolio.update',$portfolio->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="row">

                        <div class="col d-flex align-items-center">
                            <div class="form-group">
                                <label for="img">Picture</label>
                                <input type="file" name="img" id="img" class="form-control-file">
                            </div>
                        </div>
                        
                        <div class="col d-flex flex-column align-items-center">
                            <b for="view">Current picture :</b>
                            <div id="view" class="thumbnail-frame img-thumbnail rounded-circle float-right">
                                <img src="{{asset('storage/'.$portfolio->img)}}" class="thumbnail" alt="Current Picture">
                            </div>
                        </div>
                    
                    </div>
                    <div class="form-group">
                        <label for="">Project name</label>
                        <input type="text" name="nom" id="nom" class="form-control" value="{{$portfolio->nom}}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" required>{{$portfolio->description}}</textarea>
                    </div>
                </div>
                
                <div class="card-footer">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{route('portfolio.index')}}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection