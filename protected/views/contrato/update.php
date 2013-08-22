<?php
/* @var $this ContratoController */
/* @var $model Contrato */

$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	$model->NoContrato=>array('view','id'=>$model->NoContrato),
	'Update',
);

$this->menu=array(
	array('label'=>'List Contrato', 'url'=>array('index')),
	array('label'=>'Create Contrato', 'url'=>array('create')),
	array('label'=>'View Contrato', 'url'=>array('view', 'id'=>$model->NoContrato)),
	array('label'=>'Manage Contrato', 'url'=>array('admin')),
);
?>

<h1>Update Contrato <?php echo $model->NoContrato; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>