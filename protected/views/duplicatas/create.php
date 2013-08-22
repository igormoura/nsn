<?php
/* @var $this DuplicatasController */
/* @var $model Duplicatas */

$this->breadcrumbs=array(
	'Duplicatases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Duplicatas', 'url'=>array('index')),
	array('label'=>'Manage Duplicatas', 'url'=>array('admin')),
);
?>

<h1>Create Duplicatas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>