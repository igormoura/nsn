<?php
/* @var $this ProspectServicosController */
/* @var $model ProspectServicos */

$this->breadcrumbs=array(
	'Prospect Servicoses'=>array('index'),
	$model->cdservico,
);

$this->menu=array(
	array('label'=>'List ProspectServicos', 'url'=>array('index')),
	array('label'=>'Create ProspectServicos', 'url'=>array('create')),
	array('label'=>'Update ProspectServicos', 'url'=>array('update', 'id'=>$model->cdservico)),
	array('label'=>'Delete ProspectServicos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cdservico),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProspectServicos', 'url'=>array('admin')),
);
?>

<h1>View ProspectServicos #<?php echo $model->cdservico; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cdservico',
		'NoProspect',
		'Servico',
		'Valor',
		'Freq',
		'historico',
		'vencimento',
		'IdVend',
		'IdIndic',
		'DtVend',
		'DtIndic',
		'status',
		'FidelidadePredial',
		'DtFidelidadePredial',
		'PlanoFidelidadePredial',
	),
)); ?>
