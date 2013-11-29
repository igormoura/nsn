<?php
/* @var $this ProspectAlunoController */
/* @var $data ProspectAluno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Seq')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Seq), array('view', 'id'=>$data->Seq)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPessoa')); ?>:</b>
	<?php echo CHtml::encode($data->idPessoa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTurma')); ?>:</b>
	<?php echo CHtml::encode($data->idTurma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cdServico')); ?>:</b>
	<?php echo CHtml::encode($data->cdServico); ?>
	<br />


</div>