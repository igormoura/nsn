<?php
/* @var $this MotivoCancelamentoController */
/* @var $model MotivoCancelamento */

$this->breadcrumbs=array(
	'Motivo Cancelamentos'=>array('index'),
	$model->CodigoMotivoCanc=>array('view','id'=>$model->CodigoMotivoCanc),
	'Update',
);

$this->menu=array(
	array('label'=>'List MotivoCancelamento', 'url'=>array('index')),
	array('label'=>'Create MotivoCancelamento', 'url'=>array('create')),
	array('label'=>'View MotivoCancelamento', 'url'=>array('view', 'id'=>$model->CodigoMotivoCanc)),
	array('label'=>'Manage MotivoCancelamento', 'url'=>array('admin')),
);
?>

<h1>Update MotivoCancelamento <?php echo $model->CodigoMotivoCanc; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>