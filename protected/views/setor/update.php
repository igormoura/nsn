<?php
/* @var $this SetorController */
/* @var $model Setor */

$this->breadcrumbs=array(
	'Setors'=>array('index'),
	$model->id_setor=>array('view','id'=>$model->id_setor),
	'Update',
);

$this->menu=array(
	array('label'=>'List Setor', 'url'=>array('index')),
	array('label'=>'Create Setor', 'url'=>array('create')),
	array('label'=>'View Setor', 'url'=>array('view', 'id'=>$model->id_setor)),
	array('label'=>'Manage Setor', 'url'=>array('admin')),
);
?>

<h1>Update Setor <?php echo $model->id_setor; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>