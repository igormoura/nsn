<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

include_once('_form.php');

/*$this->breadcrumbs=array(
	Yii::t('main','usuarios.title')=>array('index'),
	Yii::t('main','usuarios.manager'),
);

$this->menu=array(
	array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Create Usuarios', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuarios-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('main','usuarios.manager') ?></h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link(Yii::t('main','helper.advancedSearch'),'#',array('class'=>'search-button', 'style' => 'float: right; margin-right: -145px; margin-bottom: 32px; margin-top: 19px;')); ?>
<div class="search-form well span2 pull-right" style="display:block; width: 223px; margin-right: -293px; margin-top: 45px;">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'usuarios-grid',
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id_usuario',
                'nm_usuario',
		'email_usuario',
                'usuarioad',
                'status',
                'matricula',            
                'filial',
		/*
                'foto_usuario',
		'dt_nascimento',
		'cel_usuario',
		'tel_usuario',
		'ramal_usuario',
		'status',
		'nomecompleto_usuario',
		'cdGrupoVenda',
		'Id_Supervisor',
		'pw_usuario',
		'home_usuario',
		'id_cargahora',
		'filial',
		'usuarioad',
		'VocalixAgenteID',
		*/
		/* array(
                    'header'=>Yii::t('main','helper.action'), 
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    'template' => '{view}'),
	),
)); ?>
*/

$this->widget('bootstrap.widgets.TbButton', array(
        'label'=>Yii::t('main','helper.new', array('{model}'=> get_class($model) )),
        'buttonType'=>'submit',
        'icon'=>'icon-edit',
        'type' => 'primary',
	    'htmlOptions' => array(
                'style' => 'margin-top:20px;',
                    'data-toggle' => 'modal',
                    'data-target' => '#formUsuario',
                    'class' => 'pull-right',
                    'style' => 'z-index: 1053;'        
            ),
));?> 