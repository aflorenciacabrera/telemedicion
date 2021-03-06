@extends('layouts.footer')
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row   m-0">
        <div class="col-12  col-md-6">
            <form>
                <div class="form-row ">
                  <div class="form-group col-12 col-md-12">                  
                    <select data-medidor="{{$medidor->Numero}}" class="form-control" name="filtro" id="filtro" placeholder="Search" aria-label="Search">
                        <option value="1">Últimas 24 hs</option>
                        <option value="2">Últimos 7 días</option>
                        <option value="3">Período Actual</option>
                    </select>
                  </div>
                  
                </div>
            </form>
        </div>
    </div>
</div>
<br>

    {{-- ************************************************************ --}}
    <div class="">   
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- *************************** --}}
            <div class="card-deck">
                <div class="card ">                  
                    <div class="card-header menu">
                        <h3 class="text-font"> CONSUMO</h3></div>                
                    <div class="card-body"> 
                        <div id="consumo"></div>
                        {{-- <canvas id="myChart"  height="100" aria-label="" role="img"></canvas> --}}
                        {{-- <div class="chart-container" style="position: relative; height:40vh; width:80vw">
                            <canvas id="myChart"></canvas>
                        </div> --}}
                    </div>
                </div>
                <div class="card" style="background-color: #fffff4" >
                    {{-- <div class="card-header">Tabla del contador</div> --}}
                    <div class="card-body">                      
                        {{-- <canvas id="contador" width="400" height="400"></canvas> --}}
                            <div class=" col-12  ">
                                <strong class="text-font">DATOS REFERENTES AL CONSUMO </strong><br>
                                <hr>
                                <div class="table-responsive ">
                                <table class="table table-bordered table-sm" id="tabla">
                                    <thead class="text-center">
                                        {{-- <tr>
                                            <th colspan="2" class="text-center"> Lectura </th>
                                            <th  class="text-center border-bottom-0">   </th>
                                            <th  class="text-center border-bottom-0" >   </th>
                                        </tr> --}}
                                        <tr>
                                            <th scope="col" >Fecha </th>  
                                            <th scope="col" >Hora </th>  
                                            <th scope="col" > Valor Leído</th>          
                                            <th scope="col" > Consumo</th>                                 
                                        </tr>
                                      
                                    </thead>
                                    <tbody class="text-center" id="tableBody">
                                       
                                        
                                    </tbody>
                                </table> 
                            </div>                    
                          </div>
                    </div>
                </div>
            </div>
           <br>
            {{-- ************************** --}}
            <div class="row">
                <div class="col-md-6">
                <div class=" card ">
                    <div class="card-header menu">
                        <h3 class="text-font">CONSUMOS ANTERIORES </h3> 
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
</div>
</div>


@endsection

@section('script')

<script>
    //  let ctx1= document.getElementById("consumo").getContext("2d");
     let consumo;
    $(document).ready(function(){

        consumo = Highcharts.chart('consumo', {
            chart: {
                type: 'spline'
            },
            title: {
                text: 'Aún no hay lecturas'
            },
            series: [{
                name:"",
                data: []
            }],
            xAxis: {
                title:{
                    text:""
                },
                categories: []
            },
            yAxis: {
                title: {
                    text: 'KW/h'
                }
            },

            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                },
              

        }})


       
        var numero = {!!$medidor->Numero!!}
         endpoint = "{{route('api.diario')}}";
         $.post(endpoint,{numero_medidor:numero},function(data,status,xhr){

            if(xhr.status != 200)
                {
                graficoError();

                }
                else
                {
                    title = "Consumo de los últimas 24 Horas";
                    sub = "Hora de lectura";
                actualizarGrafico(data,title,sub);
                actualizarTabla(data);
                }
                // actualizarGrafico(data);
            
               

            }).fail(function(){

                    console.log("fail");
                    graficoError();
                })


        $("#filtro").change(function(e){

            var numero = $(this).data("medidor");
               var option = $(this).val();
                console.log(option);


                endpoint = "";

                switch(option)
                {
                    case "1": 
                    endpoint = "{{route('api.diario')}}";
                    title = "Consumo de los últimas 24 Horas";
                    sub = "Hora de lectura";
                    break;
                    case "2": 
                    endpoint = "{{route('api.semanal')}}";
                    title = "Consumo de los últimos 7 Días";
                    sub = "Día";
                    break;
                    case "3": 
                    endpoint = "{{route('api.periodo')}}";
                    title = "Consumo del Periodo Actual";
                    sub = "Día";
                    break;
                }
                // console.log(endpoint);
                
            $.post(endpoint,{numero_medidor:numero},function(data,status,xhr){
                               
                actualizarGrafico(data,title,sub);
                actualizarTabla(data);
                
               

            }).fail(function(){

                console.log("fail");
                graficoError();
                //     console.log(error)
            })

        })




    })

    function graficoError()
    {
        consumo.update({
            title: {
                text: 'Aún no hay lecturas'
            },
            series: [{
                name:"",
                data: []
            }],
            xAxis: {
                title:{
                    text:""
                },
                categories: []
            },
    })
    
    var tabla = $("#tableBody");
        tabla.html("");

        
            tabla.append("<tr>")
                tabla.append("<td>-</td>")
                tabla.append("<td>-</td>")
                tabla.append("<td>-</td>")
                tabla.append("<td>-</td>")

            tabla.append("</tr>")
        
    
    }

    function actualizarTabla(data)
    {
        var tabla = $("#tableBody");
        tabla.html("");

        data.tabla.forEach(element => {
            tabla.append("<tr>")
                tabla.append("<td>"+element.t_dia+"</td>")
                    tabla.append("<td>"+element.t_hora+"</td>")
                        tabla.append("<td>"+element.valor+"</td>")
                            tabla.append("<td>"+element.x+"</td>")

            tabla.append("</tr>")
        });
    }

    function actualizarGrafico(data,title,dia)
    {
        consumo.update({


            title: {
                text: title
            },
            series: [{
                name:"consumo",
                data: data.values
            }],
            xAxis: {
                title:{
                    text:dia
                },
                categories: data.labels
            },


        })
       
                
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script>
   
    // transformacgion de fecha de periodo de 202011 a 11/2020
    var fecha = [];
    {!! json_encode($fecha) !!}.forEach( f => {
       
        fecha =  f.substring(4) + "/" + f.substring(4,-1);
        
    });
        console.log(Array(fecha));
    var ctx= document.getElementById("consumoPeriodo").getContext("2d");
    var condumoPeriodo= new Chart(ctx,{
        type:"bar",
        data:{
            labels: {!! json_encode($fecha) !!}  ,
            datasets: [{
                       label: 'Consumo',
                      
                       data:   {!! json_encode($periodo) !!},    
                       backgroundColor:'rgba(255, 159, 64, 0.5)',                                       
                       order: 1
                   }],
        },           
       options:{
           Response:true,
            scales:{
                yAxes:[{
                        ticks:{
                            beginAtZero:true
                        },
                        scaleLabel:{
                            display:true,
                            labelString:'KWh'
                        }
                       
                       
                
                }],
                xAxes:[{
                    scaleLabel:{
                        display:true,
                            labelString:'Período'
                        }
                       
                
                }],
           
            },
            tooltips: {
                callbacks: {
                    title: function (tooltipItem, data) { 
                // return "Período: " + data.labels[tooltipItem[0].index].substring(3,-1); 
                return false
            },
            label: function(tooltipItems, data) {
                return "Consumo: " + tooltipItems.yLabel ;
            },
            footer: function (tooltipItem, data) { 
                return "Período: " + data.labels[tooltipItem[0].index].substring(4,6) + "\nAño: " + data.labels[tooltipItem[0].index].substring(0,4)}
               
            }
           }
        }
    });
</script>

@endsection
