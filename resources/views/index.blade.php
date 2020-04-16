  @extends('layout.app')
  
  @section('content')
      
  {{-- Hero Section --}}
  @include('templates.hero')

  {{-- Header Section --}}
  @include('templates.header')

  {{-- About Section --}}
   @include('templates.about')

  {{-- Services Section --}}
  @include('templates.services')

  {{-- Subscribe Section --}}
  @include('templates.subscribe')

  {{-- Porfolio Section --}}
  @include('templates.portfolio')

  {{-- Testimonials Section --}}
  @include('templates.testimonials')

  {{-- Team Section --}}
  @include('templates.team')

  {{-- Contact Section --}}
  @include('templates.contact')

  {{-- Footer --}}
  @include('templates.footer')

  @endsection