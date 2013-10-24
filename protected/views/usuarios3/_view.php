<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_usuario), array('view', 'id'=>$data->id_usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->email_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nm_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->nm_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pw_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->pw_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('home_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->home_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->foto_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_nascimento')); ?>:</b>
	<?php echo CHtml::encode($data->dt_nascimento); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cel_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->cel_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->tel_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ramal_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->ramal_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomecompleto_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->nomecompleto_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cdGrupoVenda')); ?>:</b>
	<?php echo CHtml::encode($data->cdGrupoVenda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id_Supervisor')); ?>:</b>
	<?php echo CHtml::encode($data->Id_Supervisor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matricula')); ?>:</b>
	<?php echo CHtml::encode($data->matricula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cargahora')); ?>:</b>
	<?php echo CHtml::encode($data->id_cargahora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filial')); ?>:</b>
	<?php echo CHtml::encode($data->filial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioad')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VocalixAgenteID')); ?>:</b>
	<?php echo CHtml::encode($data->VocalixAgenteID); ?>
	<br />

	*/ ?>

</div>