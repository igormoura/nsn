<?php
/* @var $this DuplicatasController */
/* @var $model Duplicatas */

$this->breadcrumbs=array(
	'Duplicatases'=>array('index'),
	$model->NumeroDup=>array('view','id'=>$model->NumeroDup),
	'Update',
);

$this->menu=array(
	array('label'=>'List Duplicatas', 'url'=>array('index')),
	array('label'=>'Create Duplicatas', 'url'=>array('create')),
	array('label'=>'View Duplicatas', 'url'=>array('view', 'id'=>$model->NumeroDup)),
	array('label'=>'Manage Duplicatas', 'url'=>array('admin')),
);
?>

<h1>Update Duplicatas <?php echo $model->NumeroDup; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>