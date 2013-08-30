<?php
/* @var $this NetAcessosController */
/* @var $model NetAcessos */

$this->breadcrumbs=array(
	'Net Acessoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NetAcessos', 'url'=>array('index')),
	array('label'=>'Manage NetAcessos', 'url'=>array('admin')),
);
?>

<h1>Create NetAcessos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>