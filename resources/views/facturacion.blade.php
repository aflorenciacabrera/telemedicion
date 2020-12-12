@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           
            <div class="card">
                <div class="card-header">Mi Facturación</div>
                <div class="card-body">
                    <div class="list-group col-12 col-md-12">      

                        <label class=""><strong>Cliente: </strong>0</label>
                        <label class=""><strong>Suministro: </strong>0</label>
                        <label class=""><strong>Número de Medidor : </strong>{{$medidor->Numero}}</label>
                        {{-- <label class=""> <strong> N° Usuario:</strong> {{$conexion->UsuarioID}} </label> --}}
                        {{-- <label class=""><strong>Dni:</strong> {{$persona->DocNro}}</label> --}}
                        <label class=""> <strong> Apellido y Nombre:</strong> {{$persona->Apellido}} {{$persona->Nombre}}</label>
                
                    </div>
                    <hr>
                    @if ($factura == null)
                    <div class="alert alert-danger" role="alert">
                      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Los datos de facturación no se encuentran disponibles momentáneamente
                    </div>
                    @else
                   {{-- Tabla web --}}
                    {{-- <div class="d-none d-md-block table-responsive"> --}}
                      <div class="table-responsive">
                    <table class="table table-bordered  ">
                        <thead>
                          <tr>
                            <th scope="col">Período</th>
                            <th scope="col">Nº Factura</th>
                            <th scope="col">Vencimiento </th>
                            <th scope="col">Importe</th>
                            <th scope="col" >Operación</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($factura as $item)
                              <tr>

                            <td> {{date('M Y', strtotime($item->Periodo))}}</td>
                            <td> {{ $item->ConexionID }}</td>
                            <td> 17/12/2020</td> 
                            <td>$ &nbsp; {{ $item->Importe }}</td> 
                            <td >  <a class="btn btn-outline-primary  " href="#"  role="submit">Descargar </a></td>
                          </tr>
                          @endforeach
                          
                          
                        </tbody>
                      </table>
                      <hr>
                      <div class="d-none d-md-block">
                        <div class="container ">
                          <div class="row justify-content-center m-0"> 
                                        
                              {{ $factura->links() }}
                          </div>
                        </div>
                      </div>
                  
                      <div class="d-block d-md-none">
                        <div class="col-12 ">
                          <div class="row "> 
                                        
                              {{ $factura->links() }}
                          </div>
                        </div>
                      </div>
                   
                      {{-- Tabla movil --}}
                       {{-- <div class="d-block d-md-none">
                    <table class="table table-bordered  ">
                        
                        <tbody>
                          <tr>
                            <th scope="col">Período</th>
                            <td>12/2020</td>
                          </tr>
                          <tr>
                            <th scope="col">Nº Factura</th>
                            <td>B 0203-10663494</td>
                          </tr>
                          <tr>
                            <th scope="col">Vencimiento </th>
                            <td>03/02/2021</td> 
                          </tr>
                          <tr>
                            <th scope="col">Importe</th>
                            <td>$ &nbsp; 750</td> 
                          </tr>
                            
                          <tr>
                            <th scope="col" >Operaciones</th>
                            <td >  <button class="btn btn-outline-primary btn-block" type="submit">Descargar </button></td>
                          </tr> 

                        </tbody>
                      </table>
                    </div> --}}
                    @endif
                   
                {{-- </div> --}}
               
               
                
            </div>
   	
        </div>
    </div>
</div>
</div>
@endsection
