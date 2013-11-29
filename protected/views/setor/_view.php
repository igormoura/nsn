<?php
/* @var $this SetorController */
/* @var $data Setor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_setor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_setor), array('view', 'id'=>$data->id_setor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ds_setor')); ?>:</b>
	<?php echo CHtml::encode($data->ds_setor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ativo')); ?>:</b>
	<?php echo CHtml::encode($data->ativo); ?>
	<br />


</div>