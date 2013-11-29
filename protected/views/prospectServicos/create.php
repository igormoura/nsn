<?php
/* @var $this ProspectServicosController */
/* @var $model ProspectServicos */

$this->breadcrumbs=array(
	'Prospect Servicoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProspectServicos', 'url'=>array('index')),
	array('label'=>'Manage ProspectServicos', 'url'=>array('admin')),
);
?>

<h1>Create ProspectServicos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>