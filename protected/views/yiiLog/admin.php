<?php
/* @var $this YiiLogController */
/* @var $model YiiLog */


$this->breadcrumbs=array(
	Yii::t('main','yiiLog.title')=>array('index'),
	Yii::t('main','yiiLog.manager'),
);

/*$this->menu=array(
	array('label'=>'List YiiLog', 'url'=>array('index')),
	array('label'=>'Create YiiLog', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#yii-log-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('main','yiiLog.manager') ?></h1>

<p>
</p>

<?php echo CHtml::link((Yii::t('main','helper.advancedSearch')),'#',array('class'=>'search-button', 'style' => 'float: right; margin-right: -145px; margin-bottom: 32px; margin-top: 19px;')); ?>
<div class="search-form well span2 pull-right" style="display:block; width: 223px; margin-right: -293px; margin-top: 45px;">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'yii-log-grid',
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
        'dataProvider' => $model->search(),
        /*'dataProvider' => new CArrayDataProvider(
             $model->search(), 
            array(
                'keyField'=>'id',
                'sort'=>array('defaultOrder'=>'id DESC'))
         ),*/
   
	//'filter'=>$model,
	'columns' => array_merge(array(
                array(
                    'class'=>'bootstrap.widgets.TbRelationalColumn',
                    'name' => Yii::t('main', 'yiiLog.id'),
                    'url' => $this->createUrl('yiiLog/relational'),
                    'value' => '$data->id', 
                    'afterAjaxUpdate'=>'js:function(tr,rowid, data){ console.log(rowid); }',
                ),
		'level',
                array(
                    'header'=>Yii::t('main','yiiLog.request_URL'),
                    'name'=>'request_URL',
                    'filter'=>CHtml::activeTextField($model,'request_URL'),
                    'value'=>'$data->request_URL',
                    'htmlOptions'=>array('style'=>'max-width: 485px; overflow: hidden; display: block; min-height: 40px;')
                ),
                array(
                    'header'=>Yii::t('main','yiiLog.logtime'),
                    'name'=>'logtime',
                    'filter'=>CHtml::activeTextField($model,'logtime'),
                    'value'=>'date("d/m/Y H:i:s",strtotime($data->logtime))',
                    'htmlOptions'=>array('style'=>'width: 12%')
                ),
                array(
                    'header'=>Yii::t('main','yiiLog.IP_User'),
                    'name'=>'request_URL',
                    'filter'=>CHtml::activeTextField($model,'IP_User'),
                    'value'=>'$data->IP_User',
                    'htmlOptions'=>array('style'=>'width: 11%')
                ),
		'user_name',

	)),
)); ?>

