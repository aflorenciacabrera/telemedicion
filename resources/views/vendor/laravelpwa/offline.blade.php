@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-6 ">
            <div class="card  ">              
                <div class="card-body"> 
                        <div class=" text-center  ">
                            <p><h1 class="text-bold "> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> </h1></p>
                                <p><h1 class="text-bold "> Lo sentimos!!</h1></p>
                                <small><h3 class="text-bold ">Por favor verifique su conexión a internet</h3></small>
                            {{-- <p><small>  <h3>Por favor verifique su conexión a internet</h3></small></p> --}}
                            {{-- <a href="{{route('/')}}" class="btn btn-verde btn-lg">Volver a inicio</a>      --}}
                        </div>                                          
                        {{-- <div class=" text-right  ">
                            <img class="img img-responsive w-60"  src="{{asset('images/error-404.png')}}" alt="">
                        </div> --}}
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
    width: 60% !important;
}
h1, .h1 {
    font-size: 3.25rem !important;
}
</style>