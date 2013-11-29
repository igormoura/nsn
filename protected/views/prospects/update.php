<?php
/* @var $this ProspectsController */
/* @var $model Prospects */

$this->breadcrumbs=array(
	'Prospects'=>array('index'),
	$model->NoProspect=>array('view','id'=>$model->NoProspect),
	'Update',
);

$this->menu=array(
	array('label'=>'List Prospects', 'url'=>array('index')),
	array('label'=>'Create Prospects', 'url'=>array('create')),
	array('label'=>'View Prospects', 'url'=>array('view', 'id'=>$model->NoProspect)),
	array('label'=>'Manage Prospects', 'url'=>array('admin')),
);
?>

<h1>Update Prospects <?php echo $model->NoProspect; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>