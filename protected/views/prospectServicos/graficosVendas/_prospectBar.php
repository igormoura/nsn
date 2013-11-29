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
            'enabled' => true,
        ),
        'title' => array(
            'text' => "Vendas por Clientes".'<br><br>'.$model->DtVend
        ),
        'xAxis' => array(
         'categories' => array('Valor: R$'),
        ),
        'yAxis' => array(
           'title' => array('text' => 'Ocorrências')
        ),
        'tooltip' => array(
            'pointFormat' => '{series.name}: <b>{point.y}</b>',
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
            )
        ),
       'series' => $model->dashboardVendas('prospect','prospectBar'),
       /* 'series' => array(
            array(
                'type' => 'column', //line, spline, area, areaspline, column, bar, pie, scatter, angular gauges, arearange, areasplinerange, columnrange, bubble, box plot, error bars, funnel, 
                'name' => 'Quantidade',
                'data' => $model->menorMaior('menorMaior'),
            ),
        ),*/
    ),
    'htmlOptions' => array('style'=>'margin-bottom: 50px;'),
    ));?>