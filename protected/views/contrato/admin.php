<?php
/* @var $this ContratoController */
/* @var $model Contrato */

//include '_editForm.php';

$this->breadcrumbs=array(
	Yii::t('main', 'contrato.title')=>array('index'),
        Yii::t('main', 'contrato.manager'),
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

<h1><?php echo Yii::t('main', 'contrato.manager') ?></h1>

<p><?php echo Yii::t('main', 'helper.infoManager') ?></p>

<div class="advanced-search">
    <?php echo CHtml::link( Yii::t('main', 'helper.advancedSearch'), '#',array('class'=>'search-button')); ?>
    <div class="search-form well" style="display:block">
    <?php $this->renderPartial('_search',array(
            'model'=>$model,
    )); ?>
    </div><!-- search-form -->
</div>

<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'contrato-grid',
        'headerOffset' => 51,
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
	'dataProvider'=>$model->search(),
        //'filter' => $model,,
	'columns'=>array(
		array('name'=>'NoContrato', 'htmlOptions'=>array('style'=>'width: 13%')),

           'NoCliente',
                array(
                    'header'=>'Cliente',
                    'name'=>'Cliente.NomeCliente',
                    'filter'=>CHtml::activeTextField($model,'Cliente'), 
                    'value'=>'$data->Cliente->NomeCliente',
                    'htmlOptions'=>array('style'=>'width: 40%'),
                ),
                'CodigoEstadoContr',
                array('name'=>'DataInicioContr', 'htmlOptions'=>array('style'=>'width: 16%'),
                    'value'=>'date("d/m/Y",strtotime($data->DataInicioContr))'),
                'Empresa',
		array('class'=>'bootstrap.widgets.TbButtonColumn',
                    'template' => '{view} {delete}'),
))); ?>




