<?php
/* @var $this DuplicatasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Duplicatases',
);

$this->menu=array(
	array('label'=>'Create Duplicatas', 'url'=>array('create')),
	array('label'=>'Manage Duplicatas', 'url'=>array('admin')),
);
?>

<h1>Duplicatases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
