<?php
/* @var $this CobrAdicController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cobr Adics',
);

$this->menu=array(
	array('label'=>'Create CobrAdic', 'url'=>array('create')),
	array('label'=>'Manage CobrAdic', 'url'=>array('admin')),
);
?>

<h1>Cobr Adics</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
