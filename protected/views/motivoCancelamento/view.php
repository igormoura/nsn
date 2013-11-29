<?php
/* @var $this MotivoCancelamentoController */
/* @var $model MotivoCancelamento */

$this->breadcrumbs=array(
	'Motivo Cancelamentos'=>array('index'),
	$model->CodigoMotivoCanc,
);

$this->menu=array(
	array('label'=>'List MotivoCancelamento', 'url'=>array('index')),
	array('label'=>'Create MotivoCancelamento', 'url'=>array('create')),
	array('label'=>'Update MotivoCancelamento', 'url'=>array('update', 'id'=>$model->CodigoMotivoCanc)),
	array('label'=>'Delete MotivoCancelamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodigoMotivoCanc),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MotivoCancelamento', 'url'=>array('admin')),
);
?>

<h1>View MotivoCancelamento #<?php echo $model->CodigoMotivoCanc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CodigoMotivoCanc',
		'DescrMotivo',
	),
)); ?>
