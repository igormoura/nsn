<?php
/* @var $this CobrAdicController */
/* @var $model CobrAdic */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cobr-adic-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NoContrato'); ?>
		<?php echo $form->textField($model,'NoContrato'); ?>
		<?php echo $form->error($model,'NoContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Historico'); ?>
		<?php echo $form->textField($model,'Historico',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'Historico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Valor'); ?>
		<?php echo $form->textField($model,'Valor',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FreqCobr'); ?>
		<?php echo $form->textField($model,'FreqCobr',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'FreqCobr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aux'); ?>
		<?php echo $form->textField($model,'aux',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'aux'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Vencimento'); ?>
		<?php echo $form->textField($model,'Vencimento'); ?>
		<?php echo $form->error($model,'Vencimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TipoCobrAdic'); ?>
		<?php echo $form->textField($model,'TipoCobrAdic',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'TipoCobrAdic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IdentificaOper'); ?>
		<?php echo $form->textField($model,'IdentificaOper',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'IdentificaOper'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SeqPai'); ?>
		<?php echo $form->textField($model,'SeqPai'); ?>
		<?php echo $form->error($model,'SeqPai'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->