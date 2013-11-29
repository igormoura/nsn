<?php

$this->Widget('ext.highcharts.HighchartsWidget', array(
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
        'text' => Yii::t('main','dashboard.ocorrencias.tipoServicoMaior72').'<br><br>'.$model->DataOcorrencia
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
                . 'gerarRelatorio(chave, relatorioMaior72);'
                . '$("#modal").modal(\'show\'); }',
            ),
        )
        ),
        'series' => array(
            array(
                'type' => 'pie', //line, spline, area, areaspline, column, bar, pie, scatter, angular gauges, arearange, areasplinerange, columnrange, bubble, box plot, error bars, funnel, 
                'name' => 'Quantidade: ',
                'data' => $model->graficoPorTipo('nmServico', 'maior'),
            ),
        ),
      ),
    'htmlOptions' => array('style'=>'margin-bottom: 50px;'),
    ));?>


<?php
    $dados = $model->graficoPorTipo('nmServico', 'relatorioMaior72');
    $dados = json_encode( $dados );
?>

<script type="text/javascript">
    var relatorioMaior72 = <?php echo $dados ?>;
</script>