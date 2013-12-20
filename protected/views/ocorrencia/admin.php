<?php
/* @var $this OcorrenciaController */
/* @var $model Ocorrencia */

$this->breadcrumbs=array(
	'Ocorrencias'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List Ocorrencia', 'url'=>array('index')),
	array('label'=>'Create Ocorrencia', 'url'=>array('create')),
);*/

Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/js/functionChart.js');

Yii::app()->clientScript->registerScript('search', "
    $('.search-button').click(function(){
    	$('.search-form').toggle();
    	return false;
    });
    $('.search-form form').submit(function(){
    	$('#ocorrencia-grid').yiiGridView('update', {
    		data: $(this).serialize()
    	});
    	return false;
    });
    ");
?>

<style>
    #dashboard-vendas #teste > ul {
        float: right;
    }
</style>

<?php $this->renderPartial('//dashboard/_modal',array('model'=>$model)) ?>

<h1><?php echo Yii::t('main','ocorrencia.manager') ?></h1>

<div class="advanced-search">
    <?php echo CHtml::link(Yii::t('main','helper.advancedSearch'),'#',array('class'=>'search-button')); ?>
    <div class="search-form well" style="display:block">
    <?php $this->renderPartial('_search',array(
            'model'=>$model,
    )); ?>
    </div><!-- search-form -->
</div>

<div class="span9 margin-left-none">
<?php $this->widget('ext.bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'ocorrencia-grid',
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
	    'dataProvider'=>$model->search(),
	    'columns'=>array(
		'NoOcorrencia',
                array(
                    'header'=>Yii::t('main','ocorrencia.DataOcorrencia'),
                    'name'=>'DataOcorrencia',
                    'value'=>'date("d/m/Y H:i:s",strtotime($data->DataOcorrencia))',
                    'htmlOptions'=>array('style'=>'width: 11%')
                ),
		'NomeContactado',
		'Ocorrencia',
                'TipoServico.nmservico',
                'TipoProblema.dsproblema',
		'NomeUsuario',
		array(
                    'header'=>Yii::t('main','helper.action'), 
                    'class'=>'bootstrap.widgets.TbButtonColumn',                
                    'viewButtonUrl'=>'Yii::app()->controller->createUrl("view",$data->primaryKey)', 
                    'updateButtonUrl'=>'Yii::app()->controller->createUrl("update",$data->primaryKey)', 
                    'deleteButtonUrl'=>'Yii::app()->controller->createUrl("delete",$data->primaryKey)',
                    'htmlOptions'=>array('style'=>'width: 51px;')
                )
           )  
    )); ?>
</div>

