<?php
/* @var $this ProspectAlunoController */
/* @var $model ProspectAluno */

$this->breadcrumbs=array(
	'Prospect Alunos'=>array('index'),
	$model->Seq=>array('view','id'=>$model->Seq),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProspectAluno', 'url'=>array('index')),
	array('label'=>'Create ProspectAluno', 'url'=>array('create')),
	array('label'=>'View ProspectAluno', 'url'=>array('view', 'id'=>$model->Seq)),
	array('label'=>'Manage ProspectAluno', 'url'=>array('admin')),
);
?>

<h1>Update ProspectAluno <?php echo $model->Seq; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>