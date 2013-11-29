<?php
/* @var $this ProspectServicosController */
/* @var $data ProspectServicos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cdservico')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cdservico), array('view', 'id'=>$data->cdservico)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NoProspect')); ?>:</b>
	<?php echo CHtml::encode($data->NoProspect); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Servico')); ?>:</b>
	<?php echo CHtml::encode($data->Servico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Valor')); ?>:</b>
	<?php echo CHtml::encode($data->Valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Freq')); ?>:</b>
	<?php echo CHtml::encode($data->Freq); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('historico')); ?>:</b>
	<?php echo CHtml::encode($data->historico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vencimento')); ?>:</b>
	<?php echo CHtml::encode($data->vencimento); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('IdVend')); ?>:</b>
	<?php echo CHtml::encode($data->IdVend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdIndic')); ?>:</b>
	<?php echo CHtml::encode($data->IdIndic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DtVend')); ?>:</b>
	<?php echo CHtml::encode($data->DtVend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DtIndic')); ?>:</b>
	<?php echo CHtml::encode($data->DtIndic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FidelidadePredial')); ?>:</b>
	<?php echo CHtml::encode($data->FidelidadePredial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DtFidelidadePredial')); ?>:</b>
	<?php echo CHtml::encode($data->DtFidelidadePredial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PlanoFidelidadePredial')); ?>:</b>
	<?php echo CHtml::encode($data->PlanoFidelidadePredial); ?>
	<br />

	*/ ?>

</div>