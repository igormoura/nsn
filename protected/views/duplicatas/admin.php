<?php
/* @var $this DuplicatasController */
/* @var $model Duplicatas */

$this->breadcrumbs=array(
	'Duplicatases'=>array('index'),
	'Manage',
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

<h1>Manage Conta Corrente</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

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
