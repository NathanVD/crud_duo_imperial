@extends('adminlte::page')

@section('content')

    <div class="container">
        <div class="card card-success">

            <div class="card-header">
                <h3 class="card-title">New testimonial</h3>
            </div>

            <form action="{{route('portfolio.store')}}" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <label for="">Nom du portfolio</label>
                        <input type="text" name="nom" id="nom" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="img" id="img" class="form-control-file" required>
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" required></textarea>
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