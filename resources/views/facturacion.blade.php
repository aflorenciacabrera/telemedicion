@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           
            <div class="card">
                <div class="card-header">
                  <h3>Facturas </h3></div>
                <div class="card-body">
                  @if ($facturas == null)
                  <div class="alert alert-danger" role="alert">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Los datos de facturación no se encuentran disponibles momentáneamente
                  </div>
                  @else
                    <div class="list-group col-12 col-md-12">      
                      {{-- @foreach ($suministroDatos as $item) --}}
                        <label class=""><strong>Cliente: </strong>{{$facturaDatos!==null ? $facturaDatos->ClienteID : "-" }}</label>
                        <label class=""><strong>Suministro: </strong>{{$facturaDatos!==null ? $facturaDatos->NumeroSuministro : "-" }}</label>
                        <label class=""><strong>Número de medidor : </strong>{{$medidor->Numero}}</label>
                        {{-- <label class=""> <strong> N° Usuario:</strong> {{$conexion->UsuarioID}} </label> --}}
                        {{-- <label class=""><strong>Dni:</strong> {{$persona->DocNro}}</label> --}}
                        <label class=""> <strong> Apellido y Nombre:</strong> {{$persona->Apellido}} {{$persona->Nombre}}</label>
                        {{-- @endforeach --}}
                    </div>
                    <hr>
                  
                   
                   {{-- Tabla web --}}
                    {{-- <div class="d-none d-md-block table-responsive"> --}}
                      {{-- <div class="d-lg-none" style="font-size: 11px"> --}}
                      <div class="table-responsive ">
                    <table class="table table-bordered table-sm ">
                        <thead>
                          <tr>
                            <th scope="col">Período</th>
                            <th scope="col">Factura</th>
                            <th scope="col">Vto </th>
                            <th scope="col">Importe</th>
                            <th scope="col" class="text-center">Descargar</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($facturas as $item)
                              <tr>
                                {{-- {{date('M Y', strtotime($item->Periodo))}} --}}
                            <td> {{str_replace(".","",strtoupper(strftime('%b%Y', strtotime($item->PeriodoFacturado) ))) }} </td>
                            <td> {{ $item->NroFactura }}</td>
                            <td> {{ date('d/m/Y', strtotime($item->FechaVencimiento) ) }}</td> 
                            <td class="fit">$ &nbsp; {{ $item->ImporteFacturado }}</td> 
                            <td class="text-center">  <a class="btn btn-outline-primary  " href="#"  role="submit"><i class="fa fa-download" aria-hidden="true"></i> </a></td>
                          </tr>
                          @endforeach
                          
                          
                        </tbody>
                      </table>
                      <hr>
                      <div class="d-none d-md-block">
                        <div class="container ">
                          <div class="row justify-content-center m-0"> 
                                        
                              {{ $facturas->links() }}
                          </div>
                        </div>
                      </div>
                  
                      <div class="d-block d-md-none">
                        <div class="col-12 ">
                          <div class="row "> 
                                        
                              {{ $facturas->links() }}
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
               
              {{-- </div> --}}
            </div>
              
   	
        </div>
    </div>
</div>
</div>
@endsection
<style>
  .fit {
    white-space: nowrap;
    width: 1%;
}
  </style>