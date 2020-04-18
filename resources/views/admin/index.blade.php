@extends('adminlte::page')

@section('title','Imperial - Admin')

@section('content_header')
  <h1>Dashboard Admin</h1>
@endsection

@section('content')

  <div class="row mt-5">

    <div class="col-lg-3 col-6">
      {{-- Nombre de messages dans l'inbox --}}
      <div class="small-box bg-primary">
        <div class="inner">
          <div class="mb-4">
            <h3 class="d-inline mr-3">{{$messages_count}}</h3>
            <h5 class="d-inline">Messages</h5> 
          </div>
          
          <p class="mb-0"><small>Last received : {{$messages_count != 0 ? $last_message->created_at : '---'}}</small></p>
        </div>
        <div class="icon">
          <i class="fas fa-envelope"></i>
        </div>
        <div>
        </div>
        <a href="{{route('messages.index')}}" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
  
    <div class="col-lg-3 col-6">
      {{-- Nombre d'images dans le portfolio --}}
      <div class="small-box bg-primary">
        <div class="inner">
          <div class="mb-4">
            <h3 class="d-inline mr-3">X</h3>
            <h5 class="d-inline">Projects</h5> 
          </div>
          <p class="mb-0"><small>Last added : ---</small></p>
        </div>
        <div class="icon">
          <i class="fas fa-images"></i>
        </div>
        <a href="#" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      {{-- Nombre de services --}}
      <div class="small-box bg-primary">
        <div class="inner">
          <div class="mb-4">
            <h3 class="d-inline mr-3">{{$services_count}}</h3>
            <h5 class="d-inline">Services</h5> 
          </div>
          
          <p class="mb-0"><small>Last received : {{$services_count != 0 ? $last_service->created_at : '---'}}</small></p>
        </div>
        <div class="icon">
          <i class="fas fa-concierge-bell"></i>
        </div>
        <a href="{{route('services.index')}}" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      {{-- Nombre de témoignages --}}
      <div class="small-box bg-primary">
        <div class="inner">
          <div class="mb-4">
            <h3 class="d-inline mr-3">{{$testimonials_count}}</h3>
            <h5 class="d-inline">Testimonials</h5> 
          </div>
          
          <p class="mb-0"><small>Last received : {{$testimonials_count != 0 ? $last_testimonial->created_at : '---'}}</small></p>
        </div>
        <div class="icon">
          <i class="far fa-comments"></i>
        </div>
        <a href="{{route('testimonials.index')}}" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>

  </div>
    
@endsection