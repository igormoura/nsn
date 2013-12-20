<?php
/* @var $this ProspectServicosController */
/* @var $model ProspectServicos */


$this->breadcrumbs=array(
    Yii::t('main', 'dashboard.title')=>array('index'),
    Yii::t('main', 'dashboard.vendas'),
);

/*$this->menu=array(
	array('label'=>'List ProspectServicos', 'url'=>array('index')),
	array('label'=>'Create ProspectServicos', 'url'=>array('create')),
);*/

Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/js/functionChart.js');

$this->renderPartial('//dashboard/_modal',array('model'=>$model));

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#prospect-servicos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

?>

<h1>Dashboard Vendas</h1>

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
        'id' => 'dashboard-vendas',
        'type' => 'tabs',
        'tabs' => array(
            array(
                'label'=>'Tipos Clientes',
                'content' => $this->renderPartial('graficosVendas/_total',array('model'=>$model),true),
                'active' => true,
            ),
            array(
                'label'=>'Grupo Serviços',
                'content' => $this->renderPartial('graficosVendas/_grupoServicos',array('model'=>$model),true),                
            ),
            array(
                'label'=>'Serviços',
                'content' => $this->renderPartial('graficosVendas/_servicos',array('model'=>$model),true),  
            ),
            array(
                'label'=>'Clientes',
                'content' => $this->renderPartial('graficosVendas/_prospect',array('model'=>$model),true),  
            ),
            array(
                'label'=>'Tipos Alunos',
                'content' => $this->renderPartial('graficosVendas/_geralProspectCurso',array('model'=>$model),true),  
            ),
            array(
                'label'=>'Cursos',
                'content' => $this->renderPartial('graficosVendas/_cursosTurmas',array('model'=>$model),true),  
            ),
            
        ),
    )
);?>
</div>