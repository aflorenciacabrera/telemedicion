@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           
            <div class="card">
                <div class="card-header">Ubicación en el mapa del medidor</div>
                <div class="card-body">
                    <div class="list-group col-12 col-md-12">                          
                        <label class=""><strong>Longitud : </strong>-27.462694</label>
                        <label class=""> <strong>Latitud:</strong> -58.837521 </label>
                      
                    </div>
                    <hr>
                   {{-- Mapa  --}}
                    {{$medidor}}
                   <div id="mapid" style="height: 400px;"></div>
                       
                </div>
            </div>
           
        </div>
    </div>
</div>

@endsection
