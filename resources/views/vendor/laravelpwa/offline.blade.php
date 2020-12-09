<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'SECHEEP') }}</title> --}}
    <title>SECHEEP</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    {{-- Iconos fa fas 4 y 5 --}}
    {{-- <script src="https://kit.fontawesome.com/yourcode.js"></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">

    {{-- <link rel="stylesheet" type="text/css" href="path/to/chartjs/dist/Chart.min.css"> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script> --}}
    <script  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>
    

   
   @laravelPWA
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light encabezado shadow-sm">
            <div class="container">
                {{-- <div class="row"> --}}
                    <div class="col-6 col-md-3">
                        <a class="navbar-brand" href="{{ url('/home') }}">
                            {{-- {{ config('app.name', 'Laravel') }} --}}
                            <img src="{{ asset('image/logo-normal-1.png') }}" alt=""style="width: 70%" >
                            &nbsp;
                            <img src="{{ asset('image/LogoMacro.png') }}" alt="" style="width: 40%">
                        </a>
                    </div>
               
            
            </div>
        </nav>

           
    </div>
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
</body>
   
</html>


{{-- @extends('layouts.app')
@section('content')


@endsection --}}
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