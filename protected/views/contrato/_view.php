<?php
/* @var $this ContratoController */
/* @var $data Contrato */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NoContrato')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NoContrato), array('view', 'id'=>$data->NoContrato)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoEstadoContr')); ?>:</b>
	<?php echo CHtml::encode($data->CodigoEstadoContr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoGrupo')); ?>:</b>
	<?php echo CHtml::encode($data->CodigoGrupo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoColegio')); ?>:</b>
	<?php echo CHtml::encode($data->CodigoColegio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoMotivoCanc')); ?>:</b>
	<?php echo CHtml::encode($data->CodigoMotivoCanc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CondicoesAcesso')); ?>:</b>
	<?php echo CHtml::encode($data->CondicoesAcesso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DataInicioContr')); ?>:</b>
	<?php echo CHtml::encode($data->DataInicioContr); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoDistr')); ?>:</b>
	<?php echo CHtml::encode($data->CodigoDistr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DiaVencimento')); ?>:</b>
	<?php echo CHtml::encode($data->DiaVencimento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DataEntregDistrib')); ?>:</b>
	<?php echo CHtml::encode($data->DataEntregDistrib); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DataDigitacao')); ?>:</b>
	<?php echo CHtml::encode($data->DataDigitacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoTipoCobr')); ?>:</b>
	<?php echo CHtml::encode($data->CodigoTipoCobr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DataPrimeiroAcesso')); ?>:</b>
	<?php echo CHtml::encode($data->DataPrimeiroAcesso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DataUltimoAcesso')); ?>:</b>
	<?php echo CHtml::encode($data->DataUltimoAcesso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NoCliente')); ?>:</b>
	<?php echo CHtml::encode($data->NoCliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Agencia')); ?>:</b>
	<?php echo CHtml::encode($data->Agencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Conta')); ?>:</b>
	<?php echo CHtml::encode($data->Conta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DataCancContr')); ?>:</b>
	<?php echo CHtml::encode($data->DataCancContr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Comentario')); ?>:</b>
	<?php echo CHtml::encode($data->Comentario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Matricula')); ?>:</b>
	<?php echo CHtml::encode($data->Matricula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Verba')); ?>:</b>
	<?php echo CHtml::encode($data->Verba); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LoginOriginal')); ?>:</b>
	<?php echo CHtml::encode($data->LoginOriginal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CartaoCredito')); ?>:</b>
	<?php echo CHtml::encode($data->CartaoCredito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ValidCartCredito')); ?>:</b>
	<?php echo CHtml::encode($data->ValidCartCredito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cvv')); ?>:</b>
	<?php echo CHtml::encode($data->cvv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PrimContat')); ?>:</b>
	<?php echo CHtml::encode($data->PrimContat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DataLimPovo')); ?>:</b>
	<?php echo CHtml::encode($data->DataLimPovo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoPovo')); ?>:</b>
	<?php echo CHtml::encode($data->CodigoPovo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TipoCartCred')); ?>:</b>
	<?php echo CHtml::encode($data->TipoCartCred); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Localizacao')); ?>:</b>
	<?php echo CHtml::encode($data->Localizacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DataLimiteApuramento')); ?>:</b>
	<?php echo CHtml::encode($data->DataLimiteApuramento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PrimCobr')); ?>:</b>
	<?php echo CHtml::encode($data->PrimCobr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dv')); ?>:</b>
	<?php echo CHtml::encode($data->dv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ContrAtualizado')); ?>:</b>
	<?php echo CHtml::encode($data->ContrAtualizado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CandidatoWebcabo')); ?>:</b>
	<?php echo CHtml::encode($data->CandidatoWebcabo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DataImprWE')); ?>:</b>
	<?php echo CHtml::encode($data->DataImprWE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TransWE')); ?>:</b>
	<?php echo CHtml::encode($data->TransWE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TmpWEDataInit')); ?>:</b>
	<?php echo CHtml::encode($data->TmpWEDataInit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TmpWECondicoesAcesso')); ?>:</b>
	<?php echo CHtml::encode($data->TmpWECondicoesAcesso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TmpWECondicoesAcAnterior')); ?>:</b>
	<?php echo CHtml::encode($data->TmpWECondicoesAcAnterior); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Condo')); ?>:</b>
	<?php echo CHtml::encode($data->Condo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grupo_autent')); ?>:</b>
	<?php echo CHtml::encode($data->grupo_autent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qtsimult')); ?>:</b>
	<?php echo CHtml::encode($data->qtsimult); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QtSimultPLogin')); ?>:</b>
	<?php echo CHtml::encode($data->QtSimultPLogin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StatusWP')); ?>:</b>
	<?php echo CHtml::encode($data->StatusWP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DataImpWP')); ?>:</b>
	<?php echo CHtml::encode($data->DataImpWP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TMPWPDataInit')); ?>:</b>
	<?php echo CHtml::encode($data->TMPWPDataInit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TMPWPCondicoesAcesso')); ?>:</b>
	<?php echo CHtml::encode($data->TMPWPCondicoesAcesso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TMPWPCondicoesAcAnterior')); ?>:</b>
	<?php echo CHtml::encode($data->TMPWPCondicoesAcAnterior); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DescPont')); ?>:</b>
	<?php echo CHtml::encode($data->DescPont); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TipoEntrega')); ?>:</b>
	<?php echo CHtml::encode($data->TipoEntrega); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QtContas')); ?>:</b>
	<?php echo CHtml::encode($data->QtContas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Empresa')); ?>:</b>
	<?php echo CHtml::encode($data->Empresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fil')); ?>:</b>
	<?php echo CHtml::encode($data->Fil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('limiteemail')); ?>:</b>
	<?php echo CHtml::encode($data->limiteemail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ClienteCorporativo')); ?>:</b>
	<?php echo CHtml::encode($data->ClienteCorporativo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FlagCarta')); ?>:</b>
	<?php echo CHtml::encode($data->FlagCarta); ?>
	<br />

	*/ ?>

</div>