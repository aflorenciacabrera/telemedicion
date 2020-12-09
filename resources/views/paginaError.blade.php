@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-6 ">
            <div class="card  ">              
                <div class="card-body"> 
                        <div class=" text-center  ">
                            <h1 class="text-bold ">Lo sentimos!!</h1>
                            <h3 class="text-bold ">No se encuantra la página que estás buscando</h3>
                            <p><small>La página se movió de lugar o nunca existió</small></p>
                            <a href="{{route('/home')}}" class="btn btn-verde btn-lg">Volver a inicio</a>  
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