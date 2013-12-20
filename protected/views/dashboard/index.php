<?php
/* @var $this DashboardController */
/* @var $model Dashboard */

$this->breadcrumbs=array(
	Yii::t('main', 'dashboard.title')
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contrato-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<div class="span12 margin-left-none">
    
    <h1><?php echo Yii::t('main','dashboard.title')?></h1>
    
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
            'text' => Yii::t('main','dashboard.ocorrencias.tempoFechamento').'<br><br>'.$model->dataGrafico
        ),
        'xAxis' => array(
         'categories' => array('Quantidade'),
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
       'series' => $model->menorMaior('menorMaiorBar'),
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


    
</div>

