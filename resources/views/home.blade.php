@extends('layouts.app')

@section('content')
<div class="container">
  {{-- <div class="text-center ">
    <strong><h1 class="titulo">Bienvenido </h1></strong>
  </div> --}}
    <div class="row justify-content-center">
      
        <div class="col-md-6">
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-interval="15000">
                    <video  controls playsinline autoplay muted loop  width="100%" height="100%">               
                        <source src="{{ asset('video/Intro.mp4') }}" type="video/mp4" >
                        Tu navegador no implementa el elemento <code>video</code>.
                      </video>
                    {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                  </div>
                  <div class="carousel-item" data-interval="5000">
                    <img src="{{ asset('image/entrega/01.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" >
                    <img src="{{ asset('image/entrega/02.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" >
                    <img src="{{ asset('image/entrega/03.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('image/entrega/04.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" >
                    <img src="{{ asset('image/entrega/05.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" >
                    <img src="{{ asset('image/entrega/06.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" >
                    <img src="{{ asset('image/entrega/07.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" >
                    <img src="{{ asset('image/entrega/08.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        {{-- <div class="col-md-6">
           
           
        </div> --}}
       
      </div>
      <br>
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
