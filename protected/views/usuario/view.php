<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->idUsuario,
);

$this->menu=array(
	array('label'=>'List Usuario', 'url'=>array('index')),
	array('label'=>'Create Usuario', 'url'=>array('create')),
	array('label'=>'Update Usuario', 'url'=>array('update', 'id'=>$model->idUsuario)),
	array('label'=>'Delete Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idUsuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usuario', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->NomeUsuario; ?></h1>

<div class="visao-geral">
    <?php $this->widget('bootstrap.widgets.TbDetailView', array(
            'data'=>$model,
            //'type'=>'striped',
            'attributes'=>array(
                    'idUsuario',
                    'NomeUsuario',
                    'UsuarioDB',
                    'SenhaDB',
                    'UsuarioAD',
                    'Email',
                    'idDominioLogon',
                    'idVocalixAgent',
                    'Status',
                    'idUsuarioSHIP',
                    'idUsuarioSNETD',
            ),
    )); ?>
</div>