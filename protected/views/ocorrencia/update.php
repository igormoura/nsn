<?php
/* @var $this OcorrenciaController */
/* @var $model Ocorrencia */

$this->breadcrumbs=array(
	'Ocorrencias'=>array('index'),
	$model->NoOcorrencia=>array('view','id'=>$model->NoOcorrencia),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ocorrencia', 'url'=>array('index')),
	array('label'=>'Create Ocorrencia', 'url'=>array('create')),
	array('label'=>'View Ocorrencia', 'url'=>array('view', 'id'=>$model->NoOcorrencia)),
	array('label'=>'Manage Ocorrencia', 'url'=>array('admin')),
);
?>

<h1>Update Ocorrencia <?php echo $model->NoOcorrencia; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>