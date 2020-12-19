{{-- ------------------------------------------------ --}}
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8 ">
            <div class="card  " style=" filter: drop-shadow(2px 4px 6px black);">              
                <div class="card-body"> 
                    <div class="row">
                        <div class="col-md-4">
                            <div class=" text-center  ">
                                {{-- <p><h1 class="text-bold "> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> </h1></p> --}}
                            <img class="img img-responsive w-60"  src="{{asset('image/conexion.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-8">
                        <div class=" text-center py-md-3 ">
                            <h1 class="text-bold "><strong>Sin conexión a Internet<strong></h1>
                            <h4 class="text-bold ">Por favor verifique su conexión <br> Wi-Fi o de datos </h4>
                            {{-- <p><small>Es posible que el enlace esté dañado o que se haya eliminado la página </small></p> --}}
                            <a href="{{ url('/') }}" class="btn btn-info btn-lg text-white" role="button">Volver a intentar</a>  
                        </div>                                          
                    </div>    
                    </div> 
                </div>
            </div>
        </div>       
    </div>
</div>
@endsection
<style>
    .pull-left {
    float: left;
    position: absolute;
    }
    .w-60 {
    width: 100% !important;
    }
    /* h1, .h1 {
        font-size: 3.25rem !important;
    } */
</style>