<?php
/* @var $this ProspectsController */
/* @var $model Prospects */

$this->breadcrumbs=array(
	'Prospects'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Prospects', 'url'=>array('index')),
	array('label'=>'Create Prospects', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#prospects-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Prospects</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<div class="advanced-search">
    <?php echo CHtml::link(Yii::t('main','helper.advancedSearch'),'#',array('class'=>'search-button')); ?>    <div class="search-form well" style="display:block">
    <?php $this->renderPartial('_search',array(
            'model'=>$model,
    )); ?>    </div><!-- search-form -->
</div>

<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'prospects-grid',
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'NoProspect',
		'NomeProspect',
		'Endereco',
		'Bairro',
		'FoneResidencia',
		'FoneComercial',
		/*
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
		*/
		array(
                    'header'=>Yii::t('main','helper.action'), 
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    'template' => '{view}{update}{delete}',
                    )
                ),
	)); ?>
