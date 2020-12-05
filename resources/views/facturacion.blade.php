@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           
            <div class="card">
                <div class="card-header">Mi Facturación</div>
                <div class="card-body">
                    <div class="list-group col-12 col-md-12">                          
                        <label class=""><strong>N° Medidor : </strong>4383056</label>
                        <label class=""> <strong> N° Usuario:</strong> 36024848 </label>
                        <label class=""><strong>Dni:</strong> 36024848</label>
                        <label class=""> <strong> Apellido y Nombre:</strong> Ramirez  &nbsp;  Martin</label>
                
                    </div>
                    <hr>
                   {{-- Tabla web --}}
                    <div class="d-none d-md-block">
                    <table class="table table-bordered  ">
                        <thead>
                          <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col">Fecha</th>
                            <th scope="col">Vencimiento</th>
                            <th scope="col">Comprobante</th>
                            <th scope="col">Monto</th>
                            <th scope="col" >Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            {{-- <th scope="row">1</th> --}}
                            <td>dato</td>
                            <td>dato</td>
                            <td>dato</td>
                            <td>dato</td>
                            <td >  <button class="btn btn-outline-primary btn-block " type="submit">Descargar </button></td>
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
                          <tr>
                           
                            <th scope="col">Fecha</th>
                            <td>dato</td>
                            </tr>
                             <tr>
                           
                           <th scope="col">Vencimiento</th>
                            <td>dato</td>
                            </tr>
                             <tr>
                           
                            <th scope="col">Comprobante</th>
                            <td>dato</td>
                            </tr>
                            <tr>
                          
                           <th scope="col">Monto</th>
                            <td>dato</td>
                            </tr>
                            <tr>
                          
                            <th scope="col" >Acción</th>
                              <td >  <button class="btn btn-outline-primary btn-block" type="submit">Descargar </button></td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>

@endsection
