<?php
/* @var $this CobrAdicController */
/* @var $model CobrAdic */

$this->breadcrumbs=array(
	'Cobr Adics'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CobrAdic', 'url'=>array('index')),
	array('label'=>'Manage CobrAdic', 'url'=>array('admin')),
);
?>

<h1>Create CobrAdic</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>