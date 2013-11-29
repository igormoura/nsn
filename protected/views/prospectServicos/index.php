<?php
/* @var $this ProspectServicosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Prospect Servicoses',
);

$this->menu=array(
	array('label'=>'Create ProspectServicos', 'url'=>array('create')),
	array('label'=>'Manage ProspectServicos', 'url'=>array('admin')),
);
?>

<h1>Prospect Servicoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
