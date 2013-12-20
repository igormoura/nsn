<?php      
 $series = $model->dashboardPredial('series',null);            
 $json_series = json_encode($series); // CONVERT TO JSON OBJECT 
 
  Yii::app()->session['sleep'] = $model->condominioPredial;
  $sleep = Yii::app()->session['sleep'];
?>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>

<script>
   
$(function () {
        $('#container').highcharts({
            chart: {
                type: 'column',
            },
            title: {
                text: 'Prediais Fibra'
            },
            xAxis: {
                categories: ['Valores Ativos', 'Valores Cancelados', 'Valores Suspensos' ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total em valor  R$: '
                },
                stackLabels: {
                    enabled: true,
                    style: {
                        fontWeight: 'bold',
                        color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                    }
                }
            },
            legend: {
                align: 'right',
                x: 0,
                verticalAlign: 'top',
                y: 32,
                floating: true,
                backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColorSolid) || 'white',
                borderColor: '#CCC',
                borderWidth: 1,
                shadow: false
            },
            tooltip: {
                formatter: function() {
                    return '<b>'+ this.x +'</b><br/>'+
                        this.series.name +': '+ this.y +'<br/>'+
                        'Total: '+ this.point.stackTotal;
                }
            },
            plotOptions: {
                column: {
                    stacking: 'normal',
                    cursor: 'pointer',
                    events: {
                        click: function(event) {
                            var chave = this.name;
                            gerarRelatorioPredial(chave);
                            $("#modal").modal('show');
                          }
                    },
        
                    dataLabels: {
                        enabled: true,
                        color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                    }
                }
            },
            series: <?php echo $json_series; ?>                
        });
    });
    
</script>

<script>
// RELATÓRIO GRÁFICOS POR CANCELAMENTO
function gerarRelatorioPredial(chave)
{ 
    $("#modal-header").html('<h4>Desempenho Prediais Fibra: '+ chave +'</h4>');
    
    $( ".relatorio" ).addClass("hide");    
       
    var div = '#'+chave;
    if ($(div).length){$(div).removeClass("hide")}

}
</script>

