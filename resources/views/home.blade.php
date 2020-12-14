@extends('layouts.app')

@section('content')
<div class="container">
  {{-- <div class="text-center ">
    <strong><h1 class="titulo">Bienvenido </h1></strong>
  </div> --}}
    <div class="row justify-content-center">
      
     
      <video controls  autoplay muted loop  width="100%" height="100%">               
        <source src="{{ asset('video/intro.mp4') }}" type="video/mp4" >
        Tu navegador no implementa el elemento <code>video</code>.
      </video>
    
      <br><br>
      {{-- <div class="text-center ">
        <strong ><h1 class="titulo"> Panel Informativo </h1></strong>
      </div> --}}
        <div class="card">
                
          <div class="card-header">
              {{-- @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif --}}
          
                <div class="card-deck text-center  ">                  
                  <div class="card border-0 ">   
                     
                      <a   class=" image" href="{{route('perfil')}}">
                          <img class="img img-responsive w-100 image" rounded  src="{{ asset('image/entrega/01 Consumo de las últimas 24 Hs..jpg') }}" round alt="" style=" filter: drop-shadow(2px 4px 6px black);">
                       </a>    
                                                      
                  </div>
                  <div class="card border-0 ">   
                     
                      <a   class=" image" href="{{route('perfil')}}">
                          <img class="img img-responsive w-100 image" rounded  src="{{ asset('image/entrega/02 Consumo Total.jpg') }}" round alt="" style=" filter: drop-shadow(2px 4px 6px black);">
                       </a>    
                                                      
                  </div>
                  <div class="card border-0 ">   
                     
                    <a   class=" image" href="{{route('perfil')}}">
                        <img class="img img-responsive w-100 image" rounded  src="{{ asset('image/entrega/03 Alerta de Posible Fraude.jpg') }}" round alt="" style=" filter: drop-shadow(2px 4px 6px black);">
                     </a>    
                                                    
                </div>
                <div class="card border-0 ">   
                   
                    <a   class=" image" href="{{route('perfil')}}">
                        <img class="img img-responsive w-100 image" rounded  src="{{ asset('image/entrega/04 Pico de potencia.jpg') }}" round alt="" style=" filter: drop-shadow(2px 4px 6px black);">
                     </a>    
                                                    
                </div>
                 
              </div> 
              <br>
              
              <div class="card-deck text-center  ">                  
                  <div class="card border-0 ">   
                     
                      <a   class=" image" href="{{route('perfil')}}">
                          <img class="img img-responsive w-100 image" rounded  src="{{ asset('image/entrega/05 Medidores Inactivos.jpg') }}" round alt="" style=" filter: drop-shadow(2px 4px 6px black);">
                       </a>    
                                                      
                  </div>
                  <div class="card border-0 ">   
                     
                      <a   class=" image" href="{{route('perfil')}}">
                          <img class="img img-responsive w-100 image" rounded  src="{{ asset('image/entrega/06 Reporte inmediato de medidores sin servicio.jpg') }}" round alt="" style=" filter: drop-shadow(2px 4px 6px black);">
                       </a>    
                                                      
                  </div>
                  <div class="card border-0 ">   
                     
                    <a   class=" image" href="{{route('perfil')}}">
                        <img class="img img-responsive w-100 image" rounded  src="{{ asset('image/entrega/07 Control en tiempo real.jpg') }}" round alt="" style=" filter: drop-shadow(2px 4px 6px black);">
                     </a>    
                                                    
                </div>
                <div class="card border-0 ">   
                   
                    <a   class=" image" href="{{route('perfil')}}">
                        <img class="img img-responsive w-100 image" rounded  src="{{ asset('image/entrega/08 Seguimiento GIS.jpg') }}" round alt="" style=" filter: drop-shadow(2px 4px 6px black);">
                     </a>    
                                                    
                </div>
                 
              </div> 
              
          </div>
          
      </div>
        
</div>

@endsection
<style>
    .image{
        border-radius: 9px;
    }
    .image:focus{
        background-color: grey;
    }
    .image:hover{
        background-color: grey;
    }
  
    
    .titulo{
    text-align: center;
    font: 600 34px/60px Poppins;
    letter-spacing: 0;
    color: #1F375A;
    opacity: 1;
    }
</style>
