<?php
/* @var $this DuplicatasController */
/* @var $model Duplicatas */

$this->breadcrumbs=array(
	Yii::t('main', 'duplicatas.title')=>array('index'),
	Yii::t('main', 'duplicatas.manager'),
);

$this->menu=array(
	array('label'=>'List Duplicatas', 'url'=>array('index')),
	array('label'=>'Create Duplicatas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#duplicatas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('main', 'duplicatas.manager') ?></h1>

<p><?php echo Yii::t('main', 'helper.infoManager') ?></p>

<div class="advanced-search">
    <?php echo CHtml::link( Yii::t('main', 'helper.advancedSearch'), '#',array('class'=>'search-button')); ?>
    <div class="search-form well" style="display:block">
    <?php $this->renderPartial('_search',array(
            'model'=>$model,
    )); ?>
    </div><!-- search-form -->
</div>

<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'duplicatas-grid',
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
                'NoCliente',
		'NumeroDup',
                'NumeroLote',
                array(
                   'name'=>'DataEmisDup','htmlOptions'=>array('style'=>'width: 11%'),
                   'value'=>'date("d/m/Y",strtotime($data->DataEmisDup))',
                ),
                array(
                   'name'=>'DataVencDup','htmlOptions'=>array('style'=>'width: 12%'),
                   'value'=>'date("d/m/Y",strtotime($data->DataVencDup))',
                ),
                array(
                   'name'=>'DataEfetivacaoPagam','htmlOptions'=>array('style'=>'width: 12%'),
                   'value'=>'date("d/m/Y",strtotime($data->DataEfetivacaoPagam))',
                ),
                'BaixaDup',
		'FormaPaga',
                'ValorDup',
		array(
                    'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
