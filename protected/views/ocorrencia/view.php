<?php
/* @var $this OcorrenciaController */
/* @var $model Ocorrencia */

$this->breadcrumbs=array(
	'Ocorrencias'=>array('index'),
	$model->NoOcorrencia,
);

$this->menu=array(
	array('label'=>'List Ocorrencia', 'url'=>array('index')),
	array('label'=>'Create Ocorrencia', 'url'=>array('create')),
	array('label'=>'Update Ocorrencia', 'url'=>array('update', 'id'=>$model->NoOcorrencia)),
	array('label'=>'Delete Ocorrencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NoOcorrencia),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ocorrencia', 'url'=>array('admin')),
);
?>

<h1>View Ocorrencia #<?php echo $model->NoOcorrencia; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NoContrato',
		'DataOcorrencia',
		'DataOcorrenciaF',
		'NomeUsuario',
		'NomeContactado',
		'Ocorrencia',
		'NoOcorrencia',
		'StatusOcorrencia',
		'NoOcorrenciaPai',
		'NoChamado',
		'cdproblema',
		'cdServico',
		'ObsFec',
		'NomeUsuarioFec',
		'cdproblemafec',
		'dt_hr_ini_atendimento',
		'dt_hr_fim_atendimento',
		'id_usuario',
		'id_setor',
		'OrigemdaOcorrencia',
		'id_grupo',
		'OrigemEmail',
		'idUsuarioF',
		'flagVisivelCliente',
		'flagSolicitacao',
	),
)); ?>
