<?php
/* @var $this OcorrenciaController */
/* @var $model Ocorrencia */

$this->breadcrumbs=array(
	'Ocorrencias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ocorrencia', 'url'=>array('index')),
	array('label'=>'Manage Ocorrencia', 'url'=>array('admin')),
);
?>

<h1>Create Ocorrencia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>