@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-deck">
            <div class="card">
                <div class="card-header">Datos Personales</div>
                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    {{-- {{$medidor->Numero}} --}}
                    <div class="row">
                        <div class="col-3 col-md-4">
                            <img src="{{ asset('image/user.jpg') }}" alt="" style="width: 100%">
                        </div>
                        <div class=" col-9 col-md-8">
                            {{-- <strong>Användarinformation</strong><br> --}}
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td>N° Usuario:</td>
                                    <td>{{$conexion->UsuarioID}}</td>
                                </tr>
                                <tr>
                                    <td>Dni:</td>
                                    <td>{{$persona->DocNro}}</td>
                                </tr>
                                <tr>
                                    <td>Apellido:</td>
                                    <td>{{$persona->Apellido}}</td>
                                </tr>
                                <tr>
                                    <td>Nombre</td>
                                    <td>{{$persona->Nombre}}</td>
                                </tr>
                                <tr>
                                    <td>Domicilio postal</td>
                                    <td>{{$persona->Domicilio}}</td>
                                </tr>
                                <tr>
                                    <td>Domicilio suministro</td>
                                    <td>{{$conexion->DomicSumin}}</td>
                                    
                                </tr>
                                </tbody>
                            </table>
                        </div>
                      </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Datos del consumo</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <div class="row">
                        <div class=" col-3 col-md-4">
                            <img src="{{ asset('image/medidor.png') }}" alt="" style="width: 100%">
                        </div>
                        <div class="col-9 col-md-8">
                            {{-- <strong>Användarinformation</strong><br> --}}
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td>Medidor N°:</td>
                                    <td>{{$medidor->Numero}}</td>
                                </tr>
                                <tr>
                                    <td>Fecha de registro:</td>
                                    @if ($histolectura != null)
                                        <td >{{date('d/m/Y H:i', strtotime($histolectura->Fecha_Hora))}} </td>
                                    @else
                                        <td >Sin lectura</td>
                                    
                                    @endif                               
                                </tr>
                                <tr>
                                    <td>Estado del medidor:</td>
                                    @if ($histolectura != null)
                                        <td >{{$histolectura->Contador1}}</td>
                                    @else
                                        <td >Sin lectura</td>
                                    
                                    @endif  
                                   
                                </tr>
                                <tr>
                                    <td>Consumo calculado</td>
                                    <td>{{$medidor->ActualEstado - $medidor->AnteriorEstado}}</td>
                                </tr>
                                </tbody>
                            </table>
                                                      
                        </div>
                        
                      </div>
                      <div class="alert alert-warning" role="alert">
                        <small><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp; La fecha de registro y el estado del medidor son los últimos valores que se registraron. <br>
                        El consumo calculado es la diferencia del estado actual menos el estado anterior <br>
                        <strong> Consumo = (EstadoActual-EstadoAnterior) </strong></small>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
