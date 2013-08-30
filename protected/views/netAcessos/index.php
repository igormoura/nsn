<?php
/* @var $this NetAcessosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Net Acessoses',
);

$this->menu=array(
	array('label'=>'Create NetAcessos', 'url'=>array('create')),
	array('label'=>'Manage NetAcessos', 'url'=>array('admin')),
);
?>

<h1>Net Acessoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
