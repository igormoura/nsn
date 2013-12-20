<?php
/* @var $this OcorrenciaController */
/* @var $model Ocorrencia */


$this->breadcrumbs=array(
    Yii::t('main', 'dashboard.title')=>array('index'),
    Yii::t('main', 'dashboard.ocorrencias'),
);

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
        'id' => 'dashboard-ocorrencias',
        'type' => 'tabs',
        'tabs' => array(
            array(
                'label'=>Yii::t('main','dashboard.ocorrencias.tipoServicos'),
                'content' => $this->renderPartial('//dashboard/graficosOcorrencias/servicos/_porTipoServico',array('model'=>$model),true),  
                'active' => true,
                ),
            array(
                'label'=>Yii::t('main','dashboard.ocorrencias.tipoProblema'),
                'content' => $this->renderPartial('//dashboard/graficosOcorrencias/problemas/_porTipoProblema',array('model'=>$model),true),
            ), 
            array(
                'label'=>Yii::t('main','dashboard.ocorrencias.tipoSetor'),
                'content' => $this->renderPartial('//dashboard/graficosOcorrencias/setor/_porTipoSetor',array('model'=>$model),true),
            ),
        
        )
    )
);?>
</div>

