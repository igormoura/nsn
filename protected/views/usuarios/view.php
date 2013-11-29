<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

include_once '_form.php';

$this->breadcrumbs=array(
	Yii::t('main','usuarios.title')=>array('index'),
	$model->id_usuario,
);

$this->menu=array(
	//array('label'=>'List Usuarios', 'url'=>array('index')),
	//array('label'=>'Create Usuarios', 'url'=>array('create')),
	//array('label'=>'Update Usuarios', 'url'=>array('update', 'id'=>$model->id_usuario)),
	array('label'=>'Delete Usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_usuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usuarios', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->nm_usuario; ?></h1>

<div class="visao-geral">
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
        //'type'=>'striped',
	'attributes'=>array(
		'id_usuario',
		'email_usuario',
		'nm_usuario',
                array(
                    'label'=>Yii::t('main','usuarios.pw_usuario'),
                    'value'=>$model->pw_usuario,
                    'visible'=>$model->pw_usuario == null || ' ' ? false : true,
                 ),
                array(
                    'label'=>Yii::t('main','usuarios.home_usuario'),
                    'value'=>$model->home_usuario,
                    'visible'=>$model->home_usuario == null || ' ' ? false : true,
                 ),
                array(
                    'label'=>Yii::t('main','usuarios.foto_usuario'),
                    'value'=>$model->foto_usuario,
                    'visible'=>$model->foto_usuario == null || ' ' ? false : true,
                 ),
                array(
                    'label'=>Yii::t('main','usuarios.dt_nascimento'),
                    'value'=>date("d/m/Y",strtotime($model->dt_nascimento)),
                    'visible'=>$model->dt_nascimento == null || '' ? false : true,
                ),
                array(
                    'label'=>Yii::t('main','usuarios.cel_usuario'),
                    'value'=>$model->cel_usuario,
                    'visible'=>$model->cel_usuario == null || ' ' ? false : true,
                 ),
                array(
                    'label'=>Yii::t('main','usuarios.tel_usuario'),
                    'value'=>$model->tel_usuario,
                    'visible'=>$model->tel_usuario == null || ' ' ? false : true,
                 ),
                array(
                    'label'=>Yii::t('main','usuarios.ramal_usuario'),
                    'value'=>$model->ramal_usuario,
                    'visible'=>$model->ramal_usuario == null || '' ? false : true,
                 ),
		'status',
		'nomecompleto_usuario',
		'cdGrupoVenda',
		'Id_Supervisor',
		'matricula',
		'id_cargahora',
		'filial',
                array(
                    'label'=>Yii::t('main','usuarios.usuarioad'),
                    'value'=>$model->usuarioad,
                    'visible'=>$model->usuarioad == null || '' ? false : true,
                 ),
                array(
                    'label'=>Yii::t('main','usuarios.VocalixAgenteID'),
                    'value'=>$model->VocalixAgenteID,
                    'visible'=>$model->VocalixAgenteID == null || '' ? false : true,
                 ),

	),
)); ?>
</div>

<div style="margin-top: 56px;">
<?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>Yii::t('main','helper.edit'),
        'buttonType'=>'submit',
        'icon'=>'icon-edit',
        'type' => 'primary',
	    'htmlOptions' => array(
                'style' => 'margin-top:20px;',
                    'data-toggle' => 'modal',
                    'data-target' => '#formUsuario',
                    'class' => 'pull-right',
                    'style' => 'z-index: 1053; margin-top: -56px;'        
            ),
));?> 
</div>