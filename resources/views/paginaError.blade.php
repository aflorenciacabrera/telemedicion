@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center py-3">
        <div class="col-md-12 ">
            <div class="card  border-0">
                {{-- <div class="card-header">Nuevo usuario registrado</div> --}}
                <div class="card-body"> 
                    
                    <div class="row">
                        <div class=" col-12   ">
                            <div class="pull-left">
                        <div class=" text-center col-10 ">
                            <h1 class="text-bold ">Lo sentimos!!</h1>
                            <h3 class="text-bold ">No se encuantra la página que estás buscando</h3>
                            <p><small>La página se movió de lugar o nunca existió</small></p>
                            <a href="{{route('/')}}" class="btn btn-verde btn-lg">Volver a inicio</a>     
                        </div>
                    </div>
                        
                            
                           
                                {{-- <div class=" text-right  ">
                            <img class="img img-responsive w-60"  src="{{asset('images/error-404.png')}}" alt="">
                        </div> --}}
                           
                    </div>
                      </div>
                   
                </div>
            </div>
        </div>
        {{-- <div class="card-body text-center " style="background-color: transparent">
            <img class="img img-responsive w-75" src="{{asset('images/somostodos.png')}}" alt="">
        </div> --}}
    </div>
</div>
@endsection
<style>
    .pull-left {
    float: left;
    position: absolute;
    }
    .w-60 {
    width: 60% !important;
}
h1, .h1 {
    font-size: 3.25rem !important;
}
</style>