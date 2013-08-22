<?php
/* @var $this DuplicatasController */
/* @var $model Duplicatas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'NumeroDup'); ?>
		<?php echo $form->textField($model,'NumeroDup',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NumeroConta'); ?>
		<?php echo $form->textField($model,'NumeroConta',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FormaPaga'); ?>
		<?php echo $form->textField($model,'FormaPaga',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NumeroLote'); ?>
		<?php echo $form->textField($model,'NumeroLote',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CodigoVendedor'); ?>
		<?php echo $form->textField($model,'CodigoVendedor',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NoContrato'); ?>
		<?php echo $form->textField($model,'NoContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NoCliente'); ?>
		<?php echo $form->textField($model,'NoCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CodigoColegio'); ?>
		<?php echo $form->textField($model,'CodigoColegio',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DataEmisDup'); ?>
		<?php echo $form->textField($model,'DataEmisDup'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DataVencDup'); ?>
		<?php echo $form->textField($model,'DataVencDup'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AgenciaDup'); ?>
		<?php echo $form->textField($model,'AgenciaDup',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PagamentoDup'); ?>
		<?php echo $form->textField($model,'PagamentoDup'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BaixaDup'); ?>
		<?php echo $form->textField($model,'BaixaDup',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ValorDup'); ?>
		<?php echo $form->textField($model,'ValorDup',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ValorJurosDup'); ?>
		<?php echo $form->textField($model,'ValorJurosDup',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ValorMultaDup'); ?>
		<?php echo $form->textField($model,'ValorMultaDup',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ValorDespDup'); ?>
		<?php echo $form->textField($model,'ValorDespDup',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ValorDescDup'); ?>
		<?php echo $form->textField($model,'ValorDescDup',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ValorAdicDup'); ?>
		<?php echo $form->textField($model,'ValorAdicDup',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Observacao'); ?>
		<?php echo $form->textField($model,'Observacao',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NFEmitida'); ?>
		<?php echo $form->textField($model,'NFEmitida',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NoCobr'); ?>
		<?php echo $form->textField($model,'NoCobr',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CH_Banco'); ?>
		<?php echo $form->textField($model,'CH_Banco',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CH_No'); ?>
		<?php echo $form->textField($model,'CH_No',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NoNF'); ?>
		<?php echo $form->textField($model,'NoNF'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'localpag'); ?>
		<?php echo $form->textField($model,'localpag',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DataAutentPag'); ?>
		<?php echo $form->textField($model,'DataAutentPag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DataEfetivacaoPagam'); ?>
		<?php echo $form->textField($model,'DataEfetivacaoPagam'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VencOriginal'); ?>
		<?php echo $form->textField($model,'VencOriginal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FlagOrigem'); ?>
		<?php echo $form->textField($model,'FlagOrigem',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NoNf2'); ?>
		<?php echo $form->textField($model,'NoNf2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SerieNF'); ?>
		<?php echo $form->textField($model,'SerieNF',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EmpNF'); ?>
		<?php echo $form->textField($model,'EmpNF',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->