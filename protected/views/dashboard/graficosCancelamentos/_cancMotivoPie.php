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
            'text' => Yii::t('main','dashboard.cancelamento.motivos').'<br><br>'.$model->dataGrafico
        ),
        'tooltip' => array(
           'pointFormat' => '{series.name} <b>{point.y}.00</b>',
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
                    'click' => 'js:function(event){'
                    . 'var chave = $.trim(event.point.name);'
                    . 'gerarRelatorioCanc(chave);'
                    . '$("#modal").modal(\'show\'); }',
                ),
            )
        ),
        'series' => array(
            array(
                'type' => 'pie', //line, spline, area, areaspline, column, bar, pie, scatter, angular gauges, arearange, areasplinerange, columnrange, bubble, box plot, error bars, funnel, 
                'name' => 'Valor: R$ ',
                'data' => $model->dashboardCancelamentos('motivo',null),
            ),
        ),
      ),
    'htmlOptions' => array('style'=>'margin-bottom: 50px;'),
    ));?>

<?php
    $dados = $model->dashboardCancelamentos('relatorio2',null);
    $dadosSlice = json_encode($dados); 
 ?>


