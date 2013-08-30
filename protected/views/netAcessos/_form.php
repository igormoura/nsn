<?php
/* @var $this NetAcessosController */
/* @var $model NetAcessos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'net-acessos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'LoginUsuario'); ?>
		<?php echo $form->textField($model,'LoginUsuario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'LoginUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Campo_S'); ?>
		<?php echo $form->textField($model,'Campo_S',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'Campo_S'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CodigoMotivoCanc'); ?>
		<?php echo $form->textField($model,'CodigoMotivoCanc',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'CodigoMotivoCanc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Campo_D'); ?>
		<?php echo $form->textField($model,'Campo_D',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'Campo_D'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Campo_H'); ?>
		<?php echo $form->textField($model,'Campo_H',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'Campo_H'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NoContrato'); ?>
		<?php echo $form->textField($model,'NoContrato'); ?>
		<?php echo $form->error($model,'NoContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NomeUsuario'); ?>
		<?php echo $form->textField($model,'NomeUsuario',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'NomeUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CodigoEstadoAcesso'); ?>
		<?php echo $form->textField($model,'CodigoEstadoAcesso',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'CodigoEstadoAcesso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VersaoKit'); ?>
		<?php echo $form->textField($model,'VersaoKit',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'VersaoKit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NoCliente'); ?>
		<?php echo $form->textField($model,'NoCliente'); ?>
		<?php echo $form->error($model,'NoCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DataCancAces'); ?>
		<?php echo $form->textField($model,'DataCancAces'); ?>
		<?php echo $form->error($model,'DataCancAces'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Campo_SM'); ?>
		<?php echo $form->textField($model,'Campo_SM',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'Campo_SM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Campo_DM'); ?>
		<?php echo $form->textField($model,'Campo_DM',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'Campo_DM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Campo_HM'); ?>
		<?php echo $form->textField($model,'Campo_HM',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'Campo_HM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IndMailAcesso'); ?>
		<?php echo $form->textField($model,'IndMailAcesso',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'IndMailAcesso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Dominio'); ?>
		<?php echo $form->textField($model,'Dominio',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'Dominio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'QtSimult'); ?>
		<?php echo $form->textField($model,'QtSimult'); ?>
		<?php echo $form->error($model,'QtSimult'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seqdestino'); ?>
		<?php echo $form->textField($model,'seqdestino'); ?>
		<?php echo $form->error($model,'seqdestino'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seq'); ?>
		<?php echo $form->textField($model,'seq'); ?>
		<?php echo $form->error($model,'seq'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TipoRedir'); ?>
		<?php echo $form->textField($model,'TipoRedir',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'TipoRedir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grupo'); ?>
		<?php echo $form->textField($model,'grupo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'grupo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'referencia'); ?>
		<?php echo $form->textField($model,'referencia',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'referencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cdemail'); ?>
		<?php echo $form->textField($model,'cdemail'); ?>
		<?php echo $form->error($model,'cdemail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomePainel'); ?>
		<?php echo $form->textField($model,'nomePainel',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nomePainel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->