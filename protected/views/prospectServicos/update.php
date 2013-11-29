<?php
/* @var $this ProspectServicosController */
/* @var $model ProspectServicos */

$this->breadcrumbs=array(
	'Prospect Servicoses'=>array('index'),
	$model->cdservico=>array('view','id'=>$model->cdservico),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProspectServicos', 'url'=>array('index')),
	array('label'=>'Create ProspectServicos', 'url'=>array('create')),
	array('label'=>'View ProspectServicos', 'url'=>array('view', 'id'=>$model->cdservico)),
	array('label'=>'Manage ProspectServicos', 'url'=>array('admin')),
);
?>

<h1>Update ProspectServicos <?php echo $model->cdservico; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>