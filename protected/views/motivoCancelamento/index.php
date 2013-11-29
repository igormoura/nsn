<?php
/* @var $this MotivoCancelamentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Motivo Cancelamentos',
);

$this->menu=array(
	array('label'=>'Create MotivoCancelamento', 'url'=>array('create')),
	array('label'=>'Manage MotivoCancelamento', 'url'=>array('admin')),
);
?>

<h1>Motivo Cancelamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
