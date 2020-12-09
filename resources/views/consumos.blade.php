
@extends('layouts.app')

@section('content')

{{-- <div class="container">
    <div class="row justify-content-end m-0">
        <div class="col-6 ">
            <form>
                <div class="form-row ">
                  <div class="form-group col-8">
                   
                    <select class="form-control " name="filtro" id="filtro" placeholder="Search" aria-label="Search">
                        <option value="">Día</option>
                        <option value="">Semana</option>
                        <option value="">Mes</option>
                        <option value="">Bimestre</option>
                        <option value="">Trimestre</option>
                        <option value="">Semestre</option>
                        <option value="">Año</option>
                        <option value="">Rango</option>
                    </select>
                  </div>
                  <div class="form-group col-2">
                    
                    <button class="btn btn-outline-primary " type="submit">Filtrar</button>
                  </div>
                </div>
            </form>
        </div>
    </div>
</div>
<br> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- *************************** --}}
            <div class="card-deck">
                <div class="card">                  
                    <div class="card-header">Valores del Consumo diario</div>                
                    <div class="card-body"> 
                        <canvas id="consumoDiario" width="400" height="400"></canvas>
                        {{-- <canvas id="myChart"  height="100" aria-label="" role="img"></canvas> --}}
                        {{-- <div class="chart-container" style="position: relative; height:40vh; width:80vw">
                            <canvas id="myChart"></canvas>
                        </div> --}}
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Valores del contador</div>
                    <div class="card-body">                      
                        <canvas id="contador" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
           <br>
            {{-- ************************** --}}
            <div class="row">
                <div class="col-sm-6">
                <div class=" card ">
                    <div class="card-header">
                        Total de consumo del medidor por período
                    </div>
                    <div class="card-body">
                        <canvas id="consumoPeriodo" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>


@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script>
    var ctx= document.getElementById("consumoDiario").getContext("2d");
    var consumoDiario= new Chart(ctx,{
        type:"line",
        data:{
            labels:{!! json_encode($fecha) !!},
            datasets: [{
                       label: 'Consumo diarios',
                       data:  {!! json_encode($consumo) !!},    
                       backgroundColor:'rgb(66, 134, 244,0.5)',                                       
                       order: 1
                   }],
        },           
       options:{
            scales:{
                yAxes:[{
                        ticks:{
                            beginAtZero:true
                        }
                }]
            }
        }
    });
</script>


<script>
    var ctx= document.getElementById("contador").getContext("2d");
    var contador= new Chart(ctx,{
        type:"bar",
        data:{
            labels:{!! json_encode($fecha) !!},
            datasets: [{
                       label: 'Valores del contador',
                       data:  {!! json_encode($contador) !!},    
                       backgroundColor:'rgba(75, 192, 192, 0.5)',                                       
                       order: 1
                   }],
        },           
       options:{
        scales: {
        xAxes: [{
            gridLines: {
                offsetGridLines: true
            }
        }]
    }
        }
    });
</script>

<script>
    var ctx= document.getElementById("consumoPeriodo").getContext("2d");
    var condumoPeriodo= new Chart(ctx,{
        type:"bar",
        data:{
            labels:{!! json_encode($periodo) !!},
            datasets: [{
                       label: 'Total de consumo del medidor por período',
                       data:   {!! json_encode($consumo) !!},    
                       backgroundColor:'rgba(255, 159, 64, 0.5)',                                       
                       order: 1
                   }],
        },           
       options:{
            scales:{
                yAxes:[{
                        ticks:{
                            beginAtZero:true
                        }
                }]
            }
        }
    });
</script>

@endsection
{{-- --------------------- Ejemplo de Grafico ------------------- --}}
{{-- <script>
    var ctx = document.getElementById('myChart').getContext("2d");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script> --}}