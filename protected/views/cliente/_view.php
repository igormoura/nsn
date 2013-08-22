<?php
/* @var $this ClienteController */
/* @var $data Cliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NoCliente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NoCliente), array('view', 'id'=>$data->NoCliente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NomeCliente')); ?>:</b>
	<?php echo CHtml::encode($data->NomeCliente); ?>
	<br />

	
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CGF')); ?>:</b>
	<?php echo CHtml::encode($data->CGF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CGC')); ?>:</b>
	<?php echo CHtml::encode($data->CGC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CPF')); ?>:</b>
	<?php echo CHtml::encode($data->CPF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Identidade')); ?>:</b>
	<?php echo CHtml::encode($data->Identidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FoneResidencia')); ?>:</b>
	<?php echo CHtml::encode($data->FoneResidencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FoneComerical')); ?>:</b>
	<?php echo CHtml::encode($data->FoneComerical); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAX')); ?>:</b>
	<?php echo CHtml::encode($data->FAX); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telex')); ?>:</b>
	<?php echo CHtml::encode($data->Telex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Contato')); ?>:</b>
	<?php echo CHtml::encode($data->Contato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pager')); ?>:</b>
	<?php echo CHtml::encode($data->Pager); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Celular')); ?>:</b>
	<?php echo CHtml::encode($data->Celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMail')); ?>:</b>
	<?php echo CHtml::encode($data->EMail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PF_PJ')); ?>:</b>
	<?php echo CHtml::encode($data->PF_PJ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ECNomeCliente')); ?>:</b>
	<?php echo CHtml::encode($data->ECNomeCliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ECEndereco')); ?>:</b>
	<?php echo CHtml::encode($data->ECEndereco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ECBairro')); ?>:</b>
	<?php echo CHtml::encode($data->ECBairro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ECCidade')); ?>:</b>
	<?php echo CHtml::encode($data->ECCidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ECEstado')); ?>:</b>
	<?php echo CHtml::encode($data->ECEstado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ECCEP')); ?>:</b>
	<?php echo CHtml::encode($data->ECCEP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EmailCobr')); ?>:</b>
	<?php echo CHtml::encode($data->EmailCobr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ViaECT')); ?>:</b>
	<?php echo CHtml::encode($data->ViaECT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InscricaoMunicipal')); ?>:</b>
	<?php echo CHtml::encode($data->InscricaoMunicipal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EmailFinanceiro')); ?>:</b>
	<?php echo CHtml::encode($data->EmailFinanceiro); ?>
	<br />

	*/ ?>

</div>