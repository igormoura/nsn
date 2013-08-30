<?php
/* @var $this CobrAdicController */
/* @var $model CobrAdic */

$this->breadcrumbs=array(
	'Cobr Adics'=>array('index'),
	$model->id=>array('view','id'=>$model->columnName),
	'Update',
);

$this->menu=array(
	array('label'=>'List CobrAdic', 'url'=>array('index')),
	array('label'=>'Create CobrAdic', 'url'=>array('create')),
	array('label'=>'View CobrAdic', 'url'=>array('view', 'id'=>$model->columnName)),
	array('label'=>'Manage CobrAdic', 'url'=>array('admin')),
);
?>

<h1>Update CobrAdic <?php echo $model->columnName; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>