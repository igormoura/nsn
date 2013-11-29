<?php
/* @var $this ProspectAlunoController */
/* @var $model ProspectAluno */

$this->breadcrumbs=array(
	'Prospect Alunos'=>array('index'),
	$model->Seq,
);

$this->menu=array(
	array('label'=>'List ProspectAluno', 'url'=>array('index')),
	array('label'=>'Create ProspectAluno', 'url'=>array('create')),
	array('label'=>'Update ProspectAluno', 'url'=>array('update', 'id'=>$model->Seq)),
	array('label'=>'Delete ProspectAluno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Seq),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProspectAluno', 'url'=>array('admin')),
);
?>

<h1>View ProspectAluno #<?php echo $model->Seq; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPessoa',
		'idTurma',
		'cdServico',
		'Seq',
	),
)); ?>
