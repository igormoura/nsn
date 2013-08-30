<?php
/* @var $this CobrAdicController */
/* @var $model CobrAdic */

$this->breadcrumbs=array(
	'Cobr Adics'=>array('index'),
	$model->Seq,
);

$this->menu=array(
	array('label'=>'List CobrAdic', 'url'=>array('index')),
	array('label'=>'Create CobrAdic', 'url'=>array('create')),
	array('label'=>'Update CobrAdic', 'url'=>array('update', 'id'=>$model->Seq)),
	array('label'=>'Delete CobrAdic', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Seq),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CobrAdic', 'url'=>array('admin')),
);
?>

<h1>View CobrAdic #<?php echo $model->Seq; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NoContrato',
		'Historico',
		'Valor',
		'FreqCobr',
		'Seq',
		'aux',
		'Vencimento',
		'TipoCobrAdic',
		'IdentificaOper',
		'SeqPai',
	),
)); ?>
