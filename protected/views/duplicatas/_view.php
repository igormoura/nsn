<?php
/* @var $this DuplicatasController */
/* @var $data Duplicatas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NumeroDup')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NumeroDup), array('view', 'id'=>$data->NumeroDup)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NumeroConta')); ?>:</b>
	<?php echo CHtml::encode($data->NumeroConta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FormaPaga')); ?>:</b>
	<?php echo CHtml::encode($data->FormaPaga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NumeroLote')); ?>:</b>
	<?php echo CHtml::encode($data->NumeroLote); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoVendedor')); ?>:</b>
	<?php echo CHtml::encode($data->CodigoVendedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NoContrato')); ?>:</b>
	<?php echo CHtml::encode($data->NoContrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NoCliente')); ?>:</b>
	<?php echo CHtml::encode($data->NoCliente); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoColegio')); ?>:</b>
	<?php echo CHtml::encode($data->CodigoColegio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DataEmisDup')); ?>:</b>
	<?php echo CHtml::encode($data->DataEmisDup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DataVencDup')); ?>:</b>
	<?php echo CHtml::encode($data->DataVencDup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AgenciaDup')); ?>:</b>
	<?php echo CHtml::encode($data->AgenciaDup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PagamentoDup')); ?>:</b>
	<?php echo CHtml::encode($data->PagamentoDup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BaixaDup')); ?>:</b>
	<?php echo CHtml::encode($data->BaixaDup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ValorDup')); ?>:</b>
	<?php echo CHtml::encode($data->ValorDup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ValorJurosDup')); ?>:</b>
	<?php echo CHtml::encode($data->ValorJurosDup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ValorMultaDup')); ?>:</b>
	<?php echo CHtml::encode($data->ValorMultaDup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ValorDespDup')); ?>:</b>
	<?php echo CHtml::encode($data->ValorDespDup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ValorDescDup')); ?>:</b>
	<?php echo CHtml::encode($data->ValorDescDup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ValorAdicDup')); ?>:</b>
	<?php echo CHtml::encode($data->ValorAdicDup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Observacao')); ?>:</b>
	<?php echo CHtml::encode($data->Observacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NFEmitida')); ?>:</b>
	<?php echo CHtml::encode($data->NFEmitida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NoCobr')); ?>:</b>
	<?php echo CHtml::encode($data->NoCobr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CH_Banco')); ?>:</b>
	<?php echo CHtml::encode($data->CH_Banco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CH_No')); ?>:</b>
	<?php echo CHtml::encode($data->CH_No); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NoNF')); ?>:</b>
	<?php echo CHtml::encode($data->NoNF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('localpag')); ?>:</b>
	<?php echo CHtml::encode($data->localpag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DataAutentPag')); ?>:</b>
	<?php echo CHtml::encode($data->DataAutentPag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DataEfetivacaoPagam')); ?>:</b>
	<?php echo CHtml::encode($data->DataEfetivacaoPagam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VencOriginal')); ?>:</b>
	<?php echo CHtml::encode($data->VencOriginal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FlagOrigem')); ?>:</b>
	<?php echo CHtml::encode($data->FlagOrigem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NoNf2')); ?>:</b>
	<?php echo CHtml::encode($data->NoNf2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SerieNF')); ?>:</b>
	<?php echo CHtml::encode($data->SerieNF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EmpNF')); ?>:</b>
	<?php echo CHtml::encode($data->EmpNF); ?>
	<br />

	*/ ?>

</div>