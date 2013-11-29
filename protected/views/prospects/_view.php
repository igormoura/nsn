<?php
/* @var $this ProspectsController */
/* @var $data Prospects */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NoProspect')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NoProspect), array('view', 'id'=>$data->NoProspect)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NomeProspect')); ?>:</b>
	<?php echo CHtml::encode($data->NomeProspect); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Endereco')); ?>:</b>
	<?php echo CHtml::encode($data->Endereco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Bairro')); ?>:</b>
	<?php echo CHtml::encode($data->Bairro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FoneResidencia')); ?>:</b>
	<?php echo CHtml::encode($data->FoneResidencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FoneComercial')); ?>:</b>
	<?php echo CHtml::encode($data->FoneComercial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Contato')); ?>:</b>
	<?php echo CHtml::encode($data->Contato); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Cidade')); ?>:</b>
	<?php echo CHtml::encode($data->Cidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
	<?php echo CHtml::encode($data->Estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CEP')); ?>:</b>
	<?php echo CHtml::encode($data->CEP); ?>
	<br />

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

	<b><?php echo CHtml::encode($data->getAttributeLabel('Vendedor')); ?>:</b>
	<?php echo CHtml::encode($data->Vendedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Provedor')); ?>:</b>
	<?php echo CHtml::encode($data->Provedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StatusVenda')); ?>:</b>
	<?php echo CHtml::encode($data->StatusVenda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MtNaoAssina')); ?>:</b>
	<?php echo CHtml::encode($data->MtNaoAssina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Origem')); ?>:</b>
	<?php echo CHtml::encode($data->Origem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMail')); ?>:</b>
	<?php echo CHtml::encode($data->EMail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Servico')); ?>:</b>
	<?php echo CHtml::encode($data->Servico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Condo')); ?>:</b>
	<?php echo CHtml::encode($data->Condo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PF_PJ')); ?>:</b>
	<?php echo CHtml::encode($data->PF_PJ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAX')); ?>:</b>
	<?php echo CHtml::encode($data->FAX); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telex')); ?>:</b>
	<?php echo CHtml::encode($data->Telex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pager')); ?>:</b>
	<?php echo CHtml::encode($data->Pager); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Celular')); ?>:</b>
	<?php echo CHtml::encode($data->Celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Diavenc')); ?>:</b>
	<?php echo CHtml::encode($data->Diavenc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TipoLogradouro')); ?>:</b>
	<?php echo CHtml::encode($data->TipoLogradouro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NomeLogradouro')); ?>:</b>
	<?php echo CHtml::encode($data->NomeLogradouro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NumeroLogradouro')); ?>:</b>
	<?php echo CHtml::encode($data->NumeroLogradouro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Numeroapto')); ?>:</b>
	<?php echo CHtml::encode($data->Numeroapto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Complemento')); ?>:</b>
	<?php echo CHtml::encode($data->Complemento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nocliente')); ?>:</b>
	<?php echo CHtml::encode($data->nocliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacao')); ?>:</b>
	<?php echo CHtml::encode($data->observacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idVend')); ?>:</b>
	<?php echo CHtml::encode($data->idVend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa')); ?>:</b>
	<?php echo CHtml::encode($data->empresa); ?>
	<br />

	*/ ?>

</div>