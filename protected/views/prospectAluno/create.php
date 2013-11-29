<?php
/* @var $this ProspectAlunoController */
/* @var $model ProspectAluno */

$this->breadcrumbs=array(
	'Prospect Alunos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProspectAluno', 'url'=>array('index')),
	array('label'=>'Manage ProspectAluno', 'url'=>array('admin')),
);
?>

<h1>Create ProspectAluno</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>