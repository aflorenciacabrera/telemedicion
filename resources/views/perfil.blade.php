@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-deck">
            <div class="card">
                <div class="card-header">
                    <h3>Datos personales </h3></div>
                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    {{-- {{$medidor->Numero}} --}}
                    <div class="row">
                        <div class="col-4 offset-4  offset-md-0 col-md-3">
                            <img src="{{ asset('image/user.jpg') }}" alt="" style="width: 100%">
                        </div>
                        <div class=" col-12  col-md-9">
                            {{-- <strong></strong><br> --}}
                            <table class="table table-user-information">
                                <tbody>
                                {{-- <tr>
                                    <td>N° Usuario:</td>
                                    <td>{{$conexion->UsuarioID}}</td>
                                </tr> --}}
                               
                                <tr>
                                    <td>Apellido:</td>
                                    <td>{{$persona->Apellido}}</td>
                                </tr>
                                <tr>
                                    <td>Nombre</td>
                                    <td>{{$persona->Nombre}}</td>
                                </tr>
                                <tr>
                                    <td>Dni:</td>
                                    <td>{{$persona->DocNro}}</td>
                                </tr>
                                <tr>
                                    <td>Domicilio postal:</td>
                                    <td>{{$persona->Domicilio}}</td>
                                </tr>
                                <tr>
                                    <td>Domicilio suministro:</td>
                                    <td>{{$conexion->DomicSumin}}</td>
                                   
                                </tr>
                                </tbody>
                            </table>
                        </div>
                      </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>Datos del suministro </h3></div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <div class="row">
                        <div class=" col-4 offset-4 offset-md-0 col-md-3">
                            <img src="{{ asset('image/medidor.png') }}" alt="" style="width: 100%">
                        </div>
                        <div class="col-12 col-md-9">
                            {{-- <strong></strong><br> --}}
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td>Cliente:</td>
                                    <td>{{ $facturas != null ? $facturas->ClienteID : "-"}}</td>
                                </tr>
                                <tr>
                                    <td>Suministro:</td>
                                    <td>{{ $facturas != null ? $facturas->NumeroSuministro : "-"}}</td>
                                </tr>
                                <tr>
                                    <td>Número de medidor:</td>
                                    <td>{{$medidor->Numero}}</td>
                                </tr>
                                <tr>
                                    <td>Fecha de lectura:</td>
                                    @if ($facturas != null)
                                        <td >{{date('d/m/Y H:i', strtotime($facturas->FechaLectura))}} </td>
                                    @else
                                        <td >Sin lectura</td>
                                    
                                    @endif                               
                                </tr>
                                <tr>
                                    <td>Último valor leído:</td>
                                   
                                        @if ($facturas != null)
                                            <td >{{round($facturas->ValorLeido,0, PHP_ROUND_HALF_DOWN)}} &nbsp; kWh </td>
                                        @else
                                            <td >Sin lectura</td>                                   
                                        @endif  
                                    
                                </tr>
                                <tr>
                                    <td>Consumo del período:</td>
                                    <td>{{$medidor->consumo() }} &nbsp; kWh   </td>
                                </tr>
                                {{-- <tr>
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
                                        <td >{{$histolectura->Contador1}} </td>
                                    @else
                                        <td >Sin lectura</td>                                   
                                    @endif  
                                </tr>
                                <tr>
                                    <td>Consumo calculado</td>
                                    <td>{{$medidor->ActualEstado - $medidor->AnteriorEstado}} &nbsp; kWh</td>
                                </tr> --}}
                                </tbody>
                            </table>
                                                      
                        </div>
                        
                      </div>
                     
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
