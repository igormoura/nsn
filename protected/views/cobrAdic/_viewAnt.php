<?php
/* @var $this CobrAdicController */
/* @var $data CobrAdic */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('columnName')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->columnName), array('view', 'id'=>$data->columnName)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NoContrato')); ?>:</b>
	<?php echo CHtml::encode($data->NoContrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Historico')); ?>:</b>
	<?php echo CHtml::encode($data->Historico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Valor')); ?>:</b>
	<?php echo CHtml::encode($data->Valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FreqCobr')); ?>:</b>
	<?php echo CHtml::encode($data->FreqCobr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Seq')); ?>:</b>
	<?php echo CHtml::encode($data->Seq); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aux')); ?>:</b>
	<?php echo CHtml::encode($data->aux); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Vencimento')); ?>:</b>
	<?php echo CHtml::encode($data->Vencimento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TipoCobrAdic')); ?>:</b>
	<?php echo CHtml::encode($data->TipoCobrAdic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdentificaOper')); ?>:</b>
	<?php echo CHtml::encode($data->IdentificaOper); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SeqPai')); ?>:</b>
	<?php echo CHtml::encode($data->SeqPai); ?>
	<br />

	*/ ?>

</div>