<?php
/* @var $this ClienteController */
/* @var $model Cliente */


$this->breadcrumbs=array(
	Yii::t('main','contrato.title')=>array('index'),
	Yii::t('main','contrato.manager'),
);

$this->menu=array(
	//array('label'=>Yii::t('main','contrato.list'), 'url'=>array('index')),
	//array('label'=>Yii::t('main','contrato.create'), 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cliente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('main','contrato.manager')?></h1>

<?php Yii::app()->user->setFlash('warning', Yii::t('main','helper.infoManager'));
	$this->widget('bootstrap.widgets.TbAlert', array(
	    'block'=>true, // display a larger alert block?
	    'fade'=>true, // use transitions?
	    'closeText'=>'×', // close link text - if set to false, no close link is displayed
	    'alerts'=>array( // configurations per alert type
		   'warning'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
	    ),
	));
?>


<div class="advanced-search">
    <?php echo CHtml::link(Yii::t('main','helper.advancedSearch'),'#',array('class'=>'search-button')); ?>
    <div class="search-form well" style="display:block">
    <?php $this->renderPartial('_search',array(
            'model'=>$model,
    )); ?>
    </div><!-- search-form -->
</div>

<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'cliente-grid',
        'headerOffset' => 42,
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
        'dataProvider'=>$model->search(),
        //'filter'=>$model,
        'columns'=>array(
                array(
                    'header'=>Yii::t('main','contrato.NoContrato'),
                    'name'=>'Contrato.NoContrato',
                    'filter'=>CHtml::activeTextField($model->searchContrato,'NoContrato'),
                    'value'=>'$data->Contrato->NoContrato',
                    'htmlOptions'=>array('style'=>'width: 12%')
                ),
                array(
                    'name'=>'NomeCliente', 
                    'header'=>Yii::t('main','cliente.NomeCliente'),
                    'htmlOptions'=>array('style'=>'width: 40%')
                ),
                array(
                    'header'=>Yii::t('main','contrato.DataInicioContr'),
                    'name'=>'Contrato.DataInicioContr',
                    'filter'=>CHtml::activeTextField($model->searchContrato,'DataInicioContr'),
                    'value'=>'date("d/m/Y",strtotime($data->Contrato->DataInicioContr))',
                ),
                array(
                    'header'=>Yii::t('main','contrato.CodigoEstadoContr'),
                    'name'=>'Contrato.CodigoEstadoContr',
                    'filter'=>CHtml::activeTextField($model->searchContrato,'CodigoEstadoContr'),
                    'value'=>'$data->Contrato->CodigoEstadoContr',
                    'htmlOptions'=>array('style'=>'width: 8%')
                ),
                'Cidade',
                array(
                  'name'=>'Estado', 
                  'header'=>Yii::t('main','cliente.Estado'),
                  'htmlOptions'=>array('style'=>'width: 8%')
                ),
                array(
                    'header'=>Yii::t('main','helper.action'), 
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    'template' => '{view}'),
                ),
)); ?>
