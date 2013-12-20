<?php
/* @var $this SetorController */
/* @var $model Setor */

$this->breadcrumbs=array(
	'Setors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Setor', 'url'=>array('index')),
	array('label'=>'Create Setor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#setor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Setors</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<div class="advanced-search">
    <?php echo CHtml::link(Yii::t('main','helper.advancedSearch'),'#',array('class'=>'search-button')); ?>    <div class="search-form well" style="display:block">
    <?php $this->renderPartial('_search',array(
            'model'=>$model,
    )); ?>    </div><!-- search-form -->
</div>

<?php
    $rawData=Yii::app()->db->createCommand('SELECT * FROM Setor')->queryAll();
    $setores = Array();
    foreach ($rawData as $setor) {
        $setor = (object)$setor;
        $setores[] = array('id' => $setor->id_setor, 'Setor' =>  $setor->ds_setor, 'Ativo' =>  $setor->ativo);
    }
    
    $gridColumns = array(
        array('name'=>'id', 'header'=>'ID'),
        array('name'=>'Setor', 'header'=>'Setor'),
        array('name'=>'Ativo', 'header'=>'Ativo'),
    );

    $dataProvider=new CArrayDataProvider($setores);
   
?>

<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'setor-grid',
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
	'dataProvider'=>$dataProvider,
	'columns'=> $gridColumns,
	)); ?>
