<?php
$this->breadcrumbs=array(
	Yii::t('main','audit.title')=>array('/auditTrail'),
	Yii::t('main','audit.manager'),
);
/*
$this->menu=array(
	array('label'=>'List AuditTrail', 'url'=>array('index')),
	array('label'=>'Create AuditTrail', 'url'=>array('create')),
);
*/
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('audit-trail-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->renderPartial('//components/_TbNavbarModules') ?>

<?php if(isset($this->breadcrumbs)):?>
    <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
    ));?><!-- breadcrumbs -->
<?php endif  ?>
    
<h1><?php echo Yii::t('main','audit.manager') ?></h1>

<div class="advanced-search">
    <?php echo CHtml::link(Yii::t('main','helper.advancedSearch'),'#',array('class'=>'search-button')); ?>
    <div class="search-form well" style="display:block">
    <?php $this->renderPartial('_search',array(
            'model'=>$model,
    )); ?>
    </div><!-- search-form -->
</div>

<div class="span9" style="margin-left: 0px;">
<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'audit-trail-grid',
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'old_value',
		'new_value',
		'action',
		'model',
		'field',
                array(
                    'header'=>Yii::t('main','audit.stamp'),
                    'name'=>'stamp',
                    'value'=>'date("d/m/Y H:i:s",strtotime($data->stamp))',
                    'htmlOptions'=>array('style'=>'width: 12%')
                ),
		'user_id',
                array(
                  'name'=>'model_id', 
                  'header'=>Yii::t('main','audit.model_id'),
                  'htmlOptions'=>array('style'=>'width: 11%')
                ),
//		array(
//			'class'=>'CButtonColumn',
//		),
	),
)); ?>

</di>