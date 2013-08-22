<?php
/* @var $this DuplicatasController */
/* @var $model Duplicatas */

$this->breadcrumbs=array(
	'Duplicatases'=>array('index'),
	$model->NumeroDup,
);

$this->menu=array(
	array('label'=>'List Duplicatas', 'url'=>array('index')),
	array('label'=>'Create Duplicatas', 'url'=>array('create')),
	array('label'=>'Update Duplicatas', 'url'=>array('update', 'id'=>$model->NumeroDup)),
	array('label'=>'Delete Duplicatas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NumeroDup),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Duplicatas', 'url'=>array('admin')),
);
?>

<h1>View Duplicatas #<?php echo $model->NumeroDup; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NumeroDup',
		'NumeroConta',
		'FormaPaga',
		'NumeroLote',
		'CodigoVendedor',
		'NoContrato',
		'NoCliente',
		'CodigoColegio',
		'DataEmisDup',
		'DataVencDup',
		'AgenciaDup',
		'PagamentoDup',
		'BaixaDup',
		'ValorDup',
		'ValorJurosDup',
		'ValorMultaDup',
		'ValorDespDup',
		'ValorDescDup',
		'ValorAdicDup',
		'Observacao',
		'NFEmitida',
		'NoCobr',
		'CH_Banco',
		'CH_No',
		'NoNF',
		'localpag',
		'DataAutentPag',
		'DataEfetivacaoPagam',
		'VencOriginal',
		'FlagOrigem',
		'NoNf2',
		'SerieNF',
		'EmpNF',
	),
)); ?>
