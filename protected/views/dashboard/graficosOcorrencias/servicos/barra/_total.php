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
            'text' => Yii::t('main','dashboard.ocorrencias.tipoServicoTotal').'<br><br>'.$model->dataGrafico
        ),
        'xAxis' => array(
            'categories' => array('Quantidade'),
        ),
        'yAxis' => array(
           'title' => array('text' => 'Ocorrências')
        ),
        'tooltip' => array(
            'pointFormat' => '{series.name} <b>{point.y}</b>',
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
        'series' => $model->dashboardOcorrencias('nmServico', 'totalBar'),
      ),
    'htmlOptions' => array('style'=>'margin-bottom: 50px;'),
    ));

