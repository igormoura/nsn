<?php
/* @var $this NetAcessosController */
/* @var $model NetAcessos */

$this->breadcrumbs=array(
	'Net Acessoses'=>array('index'),
	$model->LoginUsuario,
);

$this->menu=array(
	array('label'=>'List NetAcessos', 'url'=>array('index')),
	array('label'=>'Create NetAcessos', 'url'=>array('create')),
	array('label'=>'Update NetAcessos', 'url'=>array('update', 'id'=>$model->LoginUsuario)),
	array('label'=>'Delete NetAcessos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->LoginUsuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NetAcessos', 'url'=>array('admin')),
);
?>

<h1>View NetAcessos #<?php echo $model->LoginUsuario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'LoginUsuario',
		'Campo_S',
		'CodigoMotivoCanc',
		'Campo_D',
		'Campo_H',
		'NoContrato',
		'NomeUsuario',
		'CodigoEstadoAcesso',
		'VersaoKit',
		'NoCliente',
		'DataCancAces',
		'Campo_SM',
		'Campo_DM',
		'Campo_HM',
		'IndMailAcesso',
		'Dominio',
		'QtSimult',
		'seqdestino',
		'seq',
		'TipoRedir',
		'grupo',
		'referencia',
		'cdemail',
		'nomePainel',
	),
)); ?>
