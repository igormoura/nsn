<?php $this->Widget('ext.highcharts.HighchartsWidget', array(
    'options' => array(
        'gradient' => array('enabled'=> true),
        'credits' => array('enabled' => false),
        'exporting' => array('enabled' => false),
        'chart' => array(
            'plotBackgroundColor' => null,
            'plotBorderWidth' => null,
            'plotShadow' => false,
            'height' => 530,
            'width' => 870,
        ),
        'legend' => array(
            'enabled' => false,
        ),
        'title' => array(
            'text' => Yii::t('main','dashboard.ocorrencias.tempoFechamento').'<br><br>'.$model->dataGrafico
        ),
        'tooltip' => array(
            'pointFormat' => '{series.name} <b>{point.y}</b>',
            'percentageDecimals' => 2,
        ),
        'plotOptions' => array(
            'pie' => array(
                'allowPointSelect' => true,
                'cursor' => 'pointer',
                'dataLabels' => array(
                    'enabled' => true,
                    'color' => '#000000',
                    'connectorColor' => '#000000',
                    'formatter' => "js:function(){return '<b>'+ this.point.name +'</b>: '+ this.percentage.toFixed(2) +' %';}",
                ),
                'events' => array(
                    'click' => 'js:function(event){ '
                    . 'var chave = $.trim(event.point.name);'
                    . 'listMaiorMenor(chave);'
                    . '$("#modal").modal(\'show\'); }',
                ),
            )
        ),
        'series' => array(
            array(
                'type' => 'pie', //line, spline, area, areaspline, column, bar, pie, scatter, angular gauges, arearange, areasplinerange, columnrange, bubble, box plot, error bars, funnel, 
                'name' => 'Quantidade ',
                'data' => $model->dashboardOcorrencias(null,'menorMaior'),
            ),
        ),
      ),
    'htmlOptions' => array('style'=>'margin-bottom: 50px;'),
    ));
?>


<?php 

$data = $model->dashboardOcorrencias(null,'menorMaior');
$data = json_encode($data);

// SUBSTITUIÇÃO DE CARACTERES JSON
$erros =    array("[[", "]]",  ",", "]", '[', ':"');
$correcao = array("{" , "}" ,  ":",  "",  '', ',"');

$data = str_replace($erros, $correcao, $data);

?>

<script type="text/javascript">
    var dados = <?php echo $data ?>;
    
    function listMaiorMenor(chave){
        var table_html = '<table class="table table-striped table-bordered"><thead><tr>' +
                             '<th>Tempo Fechamento</th><th>Valor Total</th>' +
                             '</tr></thead><tbody>' +
                             '<tr><td>'+chave+'</td><td>'+dados[chave]+'</td></tr>' +
                          '</tbody></table>';

        $("#modal-body").html(table_html);

        $("#modal-header").html('<h4>Relatório Tempo de Fechamento: '+ chave +'</h4>');
    }
</script>