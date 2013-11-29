<?php
/* @var $this ProspectAlunoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Prospect Alunos',
);

$this->menu=array(
	array('label'=>'Create ProspectAluno', 'url'=>array('create')),
	array('label'=>'Manage ProspectAluno', 'url'=>array('admin')),
);
?>

<h1>Prospect Alunos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
