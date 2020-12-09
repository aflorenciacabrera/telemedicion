@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           
            <div class="card">
                <div class="card-header">Mi Facturación</div>
                <div class="card-body">
                    <div class="list-group col-12 col-md-12">                          
                        <label class=""><strong>N° Medidor : </strong>{{$medidor->Numero}}</label>
                        <label class=""> <strong> N° Usuario:</strong> {{$conexion->UsuarioID}} </label>
                        <label class=""><strong>Dni:</strong> {{$persona->DocNro}}</label>
                        <label class=""> <strong> Apellido y Nombre:</strong> {{$persona->Apellido}}    {{$persona->Nombre}}</label>
                
                    </div>
                    <hr>
                    @if ($factura == null)
                    <div class="alert alert-danger" role="alert">
                      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Los datos de facturación no se encuentran disponibles momentáneamente
                    </div>
                    @else
                   {{-- Tabla web --}}
                    <div class="d-none d-md-block">
                    <table class="table table-bordered  ">
                        <thead>
                          <tr>
                            {{-- <th scope="col">#</th> --}}
                            {{-- <th scope="col">Fecha</th> --}}
                            <th scope="col">Vencimiento </th>
                            <th scope="col">Detalle</th>
                            <th scope="col">Monto</th>
                            <th scope="col" >Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            {{-- <th scope="row">1</th> --}}
                            {{-- <td>7/10/2020</td> --}}
                            <td>4/11/2020</td>
                            <td>Total Bimestral...</td> 
                            <td>$3.535,78</td> 
                            <td >  <a class="btn btn-outline-primary btn-block " href="#"  type="submit">Descargar </a></td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                      {{-- Tabla movil --}}
                       <div class="d-block d-md-none">
                    <table class="table table-bordered  ">
                        {{-- <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Vencimiento</th>
                            <th scope="col">Comprobante</th>
                            <th scope="col">Monto</th>
                            <th scope="col">Acción</th>
                          </tr>
                        </thead> --}}
                        <tbody>
                          {{-- <tr>
                           
                            <th scope="col">Fecha</th>
                            <td>dato</td>
                            </tr> --}}
                             <tr>
                           
                           <th scope="col">Vencimiento</th>
                            <td>4/11/2020</td>
                            </tr>
                            <tr>
                           
                            <th scope="col">Detalle</th>
                            <td>Total Bimestral...</td>
                            </tr>
                            <tr>
                          
                           <th scope="col">Monto</th>
                            <td>3.535,78</td>
                            </tr>
                            <tr>                         
                            <th scope="col" >Acción</th>
                              <td >  <button class="btn btn-outline-primary btn-block" type="submit">Descargar </button></td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                    @endif
                </div>
            </div>
           
        </div>
    </div>
</div>

@endsection
