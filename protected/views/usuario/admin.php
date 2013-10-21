<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

include_once '_form.php';

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Usuario', 'url'=>array('index')),
	array('label'=>'Create Usuario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<h1>Manage Usuarios</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>



    <?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button', 'style' => 'float: right; margin-right: -145px; margin-bottom: 32px; margin-top: 19px;')); ?>
    <div class="search-form well span2 pull-right" style="display:block; width: 223px; margin-right: -293px; margin-top: 45px;">
    <?php $this->renderPartial('_search',array(
            'model'=>$model,
    )); ?>
    </div><!-- search-form -->



<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'usuario-grid',
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
                 array('name'=>'idUsuario', 'header'=>'ID','htmlOptions'=>array('style'=>'width: 8%')),
		'NomeUsuario',
                'UsuarioAD',
                'Status',
		//'SenhaDB',
		'Email',
		/*
		'idDominioLogon',
		'idVocalixAgent',
                'UsuarioDB',
		'Status',
		'idUsuarioSHIP',
		'idUsuarioSNETD',
		*/
                array(
                    'header'=>Yii::t('main','helper.action'), 
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    'template' => '{view}'),
	),

)); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>Yii::t('main','helper.new', array('{model}'=> get_class($model) )),
        'buttonType'=>'submit',
        'icon'=>'icon-edit',
        'type' => 'primary',
	    'htmlOptions' => array(
                'style' => 'margin-top:20px;',
                    'data-toggle' => 'modal',
                    'data-target' => '#editUsuario',
                    'class' => 'pull-right',
                    'style' => 'z-index: 1053; margin-top: -60px;'        
            ),
));?> 