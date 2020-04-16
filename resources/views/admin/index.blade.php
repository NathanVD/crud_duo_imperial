@extends('adminlte::page')

@section('title','Imperial - Admin')

@section('content_header')
  <h1>Dashboard Admin</h1>
@endsection

@section('content')

  <div class="row mt-5">
    <div class="col-lg-3 col-6">
      {{-- Nombre d'images dans le portfolio --}}
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>x</h3>
          <p>Projects in the portfolio</p>
        </div>
        <div class="icon">
          <i class="fas fa-images"></i>
        </div>
        <a href="#" class="small-box-footer">
          Plus d'infos <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      {{-- Nombre de messages dans l'inbox --}}
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>x</h3>
          <p>Messages</p>
        </div>
        <div class="icon">
          <i class="fas fa-envelope"></i>
        </div>
        <a href="#" class="small-box-footer">
          Plus d'infos <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>

  </div>
    
@endsection