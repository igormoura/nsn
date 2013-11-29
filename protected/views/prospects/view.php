<?php
/* @var $this ProspectsController */
/* @var $model Prospects */

$this->breadcrumbs=array(
	'Prospects'=>array('index'),
	$model->NoProspect,
);

$this->menu=array(
	array('label'=>'List Prospects', 'url'=>array('index')),
	array('label'=>'Create Prospects', 'url'=>array('create')),
	array('label'=>'Update Prospects', 'url'=>array('update', 'id'=>$model->NoProspect)),
	array('label'=>'Delete Prospects', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NoProspect),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Prospects', 'url'=>array('admin')),
);
?>

<h1>View Prospects #<?php echo $model->NoProspect; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NoProspect',
		'NomeProspect',
		'Endereco',
		'Bairro',
		'FoneResidencia',
		'FoneComercial',
		'Contato',
		'Cidade',
		'Estado',
		'CEP',
		'CGF',
		'CGC',
		'CPF',
		'Identidade',
		'Vendedor',
		'Provedor',
		'StatusVenda',
		'MtNaoAssina',
		'Origem',
		'EMail',
		'Servico',
		'Condo',
		'PF_PJ',
		'FAX',
		'Telex',
		'Pager',
		'Celular',
		'Diavenc',
		'TipoLogradouro',
		'NomeLogradouro',
		'NumeroLogradouro',
		'Numeroapto',
		'Complemento',
		'nocliente',
		'observacao',
		'idVend',
		'empresa',
	),
)); ?>
