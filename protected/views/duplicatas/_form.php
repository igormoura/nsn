<?php
/* @var $this DuplicatasController */
/* @var $model Duplicatas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'duplicatas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NumeroDup'); ?>
		<?php echo $form->textField($model,'NumeroDup',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'NumeroDup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NumeroConta'); ?>
		<?php echo $form->textField($model,'NumeroConta',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'NumeroConta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FormaPaga'); ?>
		<?php echo $form->textField($model,'FormaPaga',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'FormaPaga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NumeroLote'); ?>
		<?php echo $form->textField($model,'NumeroLote',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'NumeroLote'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CodigoVendedor'); ?>
		<?php echo $form->textField($model,'CodigoVendedor',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'CodigoVendedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NoContrato'); ?>
		<?php echo $form->textField($model,'NoContrato'); ?>
		<?php echo $form->error($model,'NoContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NoCliente'); ?>
		<?php echo $form->textField($model,'NoCliente'); ?>
		<?php echo $form->error($model,'NoCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CodigoColegio'); ?>
		<?php echo $form->textField($model,'CodigoColegio',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'CodigoColegio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DataEmisDup'); ?>
		<?php echo $form->textField($model,'DataEmisDup'); ?>
		<?php echo $form->error($model,'DataEmisDup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DataVencDup'); ?>
		<?php echo $form->textField($model,'DataVencDup'); ?>
		<?php echo $form->error($model,'DataVencDup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AgenciaDup'); ?>
		<?php echo $form->textField($model,'AgenciaDup',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'AgenciaDup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PagamentoDup'); ?>
		<?php echo $form->textField($model,'PagamentoDup'); ?>
		<?php echo $form->error($model,'PagamentoDup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BaixaDup'); ?>
		<?php echo $form->textField($model,'BaixaDup',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'BaixaDup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ValorDup'); ?>
		<?php echo $form->textField($model,'ValorDup',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'ValorDup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ValorJurosDup'); ?>
		<?php echo $form->textField($model,'ValorJurosDup',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'ValorJurosDup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ValorMultaDup'); ?>
		<?php echo $form->textField($model,'ValorMultaDup',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'ValorMultaDup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ValorDespDup'); ?>
		<?php echo $form->textField($model,'ValorDespDup',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'ValorDespDup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ValorDescDup'); ?>
		<?php echo $form->textField($model,'ValorDescDup',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'ValorDescDup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ValorAdicDup'); ?>
		<?php echo $form->textField($model,'ValorAdicDup',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'ValorAdicDup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Observacao'); ?>
		<?php echo $form->textField($model,'Observacao',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'Observacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NFEmitida'); ?>
		<?php echo $form->textField($model,'NFEmitida',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'NFEmitida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NoCobr'); ?>
		<?php echo $form->textField($model,'NoCobr',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'NoCobr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CH_Banco'); ?>
		<?php echo $form->textField($model,'CH_Banco',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'CH_Banco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CH_No'); ?>
		<?php echo $form->textField($model,'CH_No',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'CH_No'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NoNF'); ?>
		<?php echo $form->textField($model,'NoNF'); ?>
		<?php echo $form->error($model,'NoNF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'localpag'); ?>
		<?php echo $form->textField($model,'localpag',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'localpag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DataAutentPag'); ?>
		<?php echo $form->textField($model,'DataAutentPag'); ?>
		<?php echo $form->error($model,'DataAutentPag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DataEfetivacaoPagam'); ?>
		<?php echo $form->textField($model,'DataEfetivacaoPagam'); ?>
		<?php echo $form->error($model,'DataEfetivacaoPagam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VencOriginal'); ?>
		<?php echo $form->textField($model,'VencOriginal'); ?>
		<?php echo $form->error($model,'VencOriginal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FlagOrigem'); ?>
		<?php echo $form->textField($model,'FlagOrigem',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'FlagOrigem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NoNf2'); ?>
		<?php echo $form->textField($model,'NoNf2'); ?>
		<?php echo $form->error($model,'NoNf2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SerieNF'); ?>
		<?php echo $form->textField($model,'SerieNF',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'SerieNF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpNF'); ?>
		<?php echo $form->textField($model,'EmpNF',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'EmpNF'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->