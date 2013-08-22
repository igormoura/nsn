<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idUsuario), array('view', 'id'=>$data->idUsuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NomeUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->NomeUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UsuarioDB')); ?>:</b>
	<?php echo CHtml::encode($data->UsuarioDB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SenhaDB')); ?>:</b>
	<?php echo CHtml::encode($data->SenhaDB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UsuarioAD')); ?>:</b>
	<?php echo CHtml::encode($data->UsuarioAD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idDominioLogon')); ?>:</b>
	<?php echo CHtml::encode($data->idDominioLogon); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('idVocalixAgent')); ?>:</b>
	<?php echo CHtml::encode($data->idVocalixAgent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuarioSHIP')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuarioSHIP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuarioSNETD')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuarioSNETD); ?>
	<br />

	*/ ?>

</div>