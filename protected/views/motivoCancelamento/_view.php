<?php
/* @var $this MotivoCancelamentoController */
/* @var $data MotivoCancelamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoMotivoCanc')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CodigoMotivoCanc), array('view', 'id'=>$data->CodigoMotivoCanc)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DescrMotivo')); ?>:</b>
	<?php echo CHtml::encode($data->DescrMotivo); ?>
	<br />


</div>