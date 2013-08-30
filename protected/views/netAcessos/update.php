<?php
/* @var $this NetAcessosController */
/* @var $model NetAcessos */

$this->breadcrumbs=array(
	'Net Acessoses'=>array('index'),
	$model->LoginUsuario=>array('view','id'=>$model->LoginUsuario),
	'Update',
);

$this->menu=array(
	array('label'=>'List NetAcessos', 'url'=>array('index')),
	array('label'=>'Create NetAcessos', 'url'=>array('create')),
	array('label'=>'View NetAcessos', 'url'=>array('view', 'id'=>$model->LoginUsuario)),
	array('label'=>'Manage NetAcessos', 'url'=>array('admin')),
);
?>

<h1>Update NetAcessos <?php echo $model->LoginUsuario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>