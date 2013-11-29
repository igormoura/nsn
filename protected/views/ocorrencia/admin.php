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
    #dashboard-vendas #teste > ul{
        float: right;
    }
</style>


<!-- MODAL -->
<?php $this->beginWidget(
    'bootstrap.widgets.TbModal',
    array('id' => 'modal', 'htmlOptions' => array('style' => 'width: 750px; margin-left: -395px; overflow:hidden;'))
); ?>
 
    <div class="modal-header" id="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
    </div>
 
    <div class="modal-body" id="modal-body">
    </div>
 
    <div class="modal-footer" style="height: 50px;">
        <?php $this->widget(
            'bootstrap.widgets.TbButton',
            array(
                'type' => 'primary',
                'label' => 'Fechar',
                'url' => '#',
                'htmlOptions' => array('data-dismiss' => 'modal'),
            )
        ); ?>
    </div>
 
<?php $this->endWidget(); ?>


<h1><?php echo Yii::t('main','ocorrencia.dashboard') ?></h1>

<div class="advanced-search">
    <?php echo CHtml::link(Yii::t('main','helper.advancedSearch'),'#',array('class'=>'search-button')); ?>
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
        'type' => 'tabs',
        'tabs' => array(
            /*array(
                'label'=>Yii::t('main','ocorrencia.listaOcorrencias'),
                'content' => $this->renderPartial('_listOcorrencias',array('model'=>$model),true),
                'active' => true,
            ),*/
            array(
                'label'=>Yii::t('main','dashboard.ocorrencias.tipoServicos'),
                'content' => $this->renderPartial('graficos/servicos/_porTipoServico',array('model'=>$model),true),  
                'active' => true,
                ),
            array(
                'label'=>Yii::t('main','dashboard.ocorrencias.tipoProblema'),
                'content' => $this->renderPartial('graficos/problemas/_porTipoProblema',array('model'=>$model),true),
               // 'active' => true,
            ), 
        
        )
    )
);?>
</div>

