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
                            <img class="img img-responsive w-60"  src="{{asset('image/error.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-8">
                        <div class=" text-center  py-md-3">
                            <h1 class="text-bold "><strong>Oops!!<strong></h1>
                            <h3 class="text-bold "> Esta página no está disponible </h3>
                            <p><small>Error 500 | Es posible que el enlace esté dañado o presente inconvenientes técnicos. </small></p>
                            <a href="{{ route('home') }}" class="btn btn-primary btn-lg text-white" role="button">Volver a inicio</a>  
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
    width: 132% !important;
    }
    /* h1, .h1 {
        font-size: 3.25rem !important;
    } */
</style>