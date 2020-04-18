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
          <h3>{{$messages_count}}</h3>
          <p class="{{$messages_count != 0 ? 'm-0' : ''}}">Messages</p>
          @if ($messages_count != 0)
            <p><small>Last received : {{$last_message->created_at}}</small></p>
          @endif
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
          <h3>x</h3>
          <p>Projects in the portfolio</p>
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
          <h3>{{$services_count}}</h3>
          <p>Services</p>
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
          <h3>{{$testimonials_count}}</h3>
          <p>Testimonials</p>
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