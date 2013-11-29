<?php
/* @var $this MotivoCancelamentoController */
/* @var $model MotivoCancelamento */

$this->breadcrumbs=array(
	'Motivo Cancelamentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MotivoCancelamento', 'url'=>array('index')),
	array('label'=>'Manage MotivoCancelamento', 'url'=>array('admin')),
);
?>

<h1>Create MotivoCancelamento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>