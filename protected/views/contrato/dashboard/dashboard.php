<?php
/* @var $this ContratoController */
/* @var $model Contrato */

//include '_editForm.php';

$this->breadcrumbs=array(
	Yii::t('main', 'contrato.title')=>array('index'),
        Yii::t('main', 'contrato.dashBoardCancelamento'),
);

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
");
?>

<h1><?php echo Yii::t('main','dashboard.cancelamento')?></h1>

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
        'id' => 'dashboard-cancelamento',
        'type' => 'tabs',
        'tabs' => array(
            array(
                'label'=>'Grupo Serviços',
                'content' => $this->renderPartial('//contrato/dashboard/_cancGrupoServicos',array('model'=>$model),true),  
                'active' => true,
            ),
            array(
                'label'=>'Motivo Cancelamento',
                'content' => $this->renderPartial('//contrato/dashboard/_cancMotivo',array('model'=>$model),true),  
            ),
        ),
    )
);?>
</div>


