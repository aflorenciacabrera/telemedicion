@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           
            <div class="card">
                <div class="card-header">Ubicación en el mapa del medidor</div>
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
