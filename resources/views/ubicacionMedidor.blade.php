@extends('layouts.footer')
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           
            <div class="card">
                <div class="card-header">
                    <h3>Ubicación en el mapa del medidor </h3></div>
                <div class="card-body">
                    <div class="list-group col-12 col-md-12">       
                        <label class=""> <strong>Latitud:</strong>  {{$medidor->Latitud}} </label>                   
                        <label class=""><strong>Longitud : </strong>{{$medidor->Longitud}}</label>     
                    </div>
                    <hr>
                   {{-- Mapa  --}}
                   
                   <div id="mapid" style="height: 400px;" data-latitud=@json($medidor->Latitud) data-longitud=@json($medidor->Longitud) ></div>
                       
                </div>
            </div>
           
        </div>
    </div>
</div>

@endsection
@section('script')
<!-- Mapa -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <script src="{{ asset('js/maps.js') }}" defer></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
@endsection