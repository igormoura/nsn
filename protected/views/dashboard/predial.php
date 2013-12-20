<?php
/* @var $this DashboardController */
/* @var $model Dashboard */

$this->breadcrumbs=array(
    Yii::t('main', 'dashboard.title')=>array('index'),
    Yii::t('main', 'dashboard.predialFibra'),
);

Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/js/functionChart.js');

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contrato-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");?>

<h1><?php echo Yii::t('main','dashboard.predialFibra')?></h1>

<div class="advanced-search">
    <?php echo CHtml::link( Yii::t('main', 'helper.advancedSearch'), '#',array('class'=>'search-button')); ?>
    <div class="search-form well" style="display:block">
    <?php $this->renderPartial('_search',array(
            'model'=>$model,
    )); ?>
    </div><!-- search-form -->
</div>

<div class="span9 margin-left-none">
<?php $this->widget(
    'bootstrap.widgets.TbTabs',
    array(
        'id' => 'dashboard-predialFibra',
        'type' => 'tabs',
        'tabs' => array(
            array(
                'label'=>'Prediais Fibra',
                'content' => $this->renderPartial('graficosPredial/_predial',array('model'=>$model),true), 
                'active' => true,
            ),
        ),
    )
);?>
</div>

<?php $this->renderPartial('graficosPredial/_modalPredial',array('model'=>$model)) ?>