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
                    <div class="row">
                        <div class="col-xs-4 col-md-3">
                            <img src="{{ asset('image/user.jpg') }}" alt="" style="width: 100%">
                        </div>
                        <div class=" col">
                            {{-- <strong>Användarinformation</strong><br> --}}
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td>N° Usuario:</td>
                                    <td>dato</td>
                                </tr>
                                <tr>
                                    <td>Dni:</td>
                                    <td>dato</td>
                                </tr>
                                <tr>
                                    <td>Apellido:</td>
                                    <td>dato</td>
                                </tr>
                                <tr>
                                    <td>Nombre</td>
                                    <td>dato</td>
                                </tr>
                                <tr>
                                    <td>Domicilio postal</td>
                                    <td>dato</td>
                                </tr>
                                <tr>
                                    <td>Domicilio suministro</td>
                                    <td>dato</td>
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
                        <div class=" col-xs-4 col-md-3">
                            <img src="{{ asset('image/medidor.png') }}" alt="" style="width: 100%">
                        </div>
                        <div class="col">
                            {{-- <strong>Användarinformation</strong><br> --}}
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td>Medidor N°:</td>
                                    <td>dato</td>
                                </tr>
                                <tr>
                                    <td>Fecha de registro:</td>
                                    <td>dato</td>
                                </tr>
                                <tr>
                                    <td>Estado del medidor:</td>
                                    <td>dato</td>
                                </tr>
                                <tr>
                                    <td>Consumo calculado</td>
                                    <td>dato</td>
                                </tr>
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
