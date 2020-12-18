@extends('layouts.app')

@section('content')
<div class="container">
  {{-- <div class="text-center ">
    <strong><h1 class="titulo">Bienvenido </h1></strong>
  </div> --}}
    <div class="row justify-content-center">
      <a class="" href="{{ route('perfil') }}" >
      <div class="card">
       
         <video   autoplay muted loop  width="100%" height="100%">               
            <source src="{{ asset('video/Intro.mp4') }}" type="video/mp4" >
            Tu navegador no implementa el elemento <code>video</code>.
           
          </video>
    </div>
    
      </a>
</div>

@endsection
@section('script')

@endsection
<style>


    .titulo{
    text-align: center;
    font: 600 34px/60px Poppins;
    letter-spacing: 0;
    color: #1F375A;
    opacity: 1;
    }
</style>
