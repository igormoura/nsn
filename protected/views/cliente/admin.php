<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	Yii::t('main','cliente.title')=>array('index'),
	Yii::t('main','cliente.manager'),
);

$this->menu=array(
	array('label'=>'List Cliente', 'url'=>array('index')),
	array('label'=>'Create Cliente', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cliente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('main','cliente.manager')?></h1>

<p><?php echo Yii::t('main','helper.infoManager') ?></p>

<div class="advanced-search">
    <?php echo CHtml::link(Yii::t('main','helper.advancedSearch'),'#',array('class'=>'search-button')); ?>
    <div class="search-form well" style="display:none">
    <?php $this->renderPartial('_search',array(
            'model'=>$model,
    )); ?>
    </div><!-- search-form -->
</div>



<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'cliente-grid',
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
                    'name'=>'NoCliente', 
                    'header'=>Yii::t('main','contrato.NoContrato'),
                    'htmlOptions'=>array('style'=>'width: 12%')
                 ),
		'NomeCliente',
		'Endereco',
		'Bairro',
		'Cidade',
		array(
                    'name'=>'Estado', 
                    'header'=>Yii::t('main','cliente.Estado'),
                    'htmlOptions'=>array('style'=>'width: 8%')
                ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
