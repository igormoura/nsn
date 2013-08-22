<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
		<?php echo $form->error($model,'idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NomeUsuario'); ?>
		<?php echo $form->textField($model,'NomeUsuario',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'NomeUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UsuarioDB'); ?>
		<?php echo $form->textField($model,'UsuarioDB',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'UsuarioDB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SenhaDB'); ?>
		<?php echo $form->textField($model,'SenhaDB',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'SenhaDB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UsuarioAD'); ?>
		<?php echo $form->textField($model,'UsuarioAD',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'UsuarioAD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idDominioLogon'); ?>
		<?php echo $form->textField($model,'idDominioLogon'); ?>
		<?php echo $form->error($model,'idDominioLogon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idVocalixAgent'); ?>
		<?php echo $form->textField($model,'idVocalixAgent'); ?>
		<?php echo $form->error($model,'idVocalixAgent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->textField($model,'Status'); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idUsuarioSHIP'); ?>
		<?php echo $form->textField($model,'idUsuarioSHIP'); ?>
		<?php echo $form->error($model,'idUsuarioSHIP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idUsuarioSNETD'); ?>
		<?php echo $form->textField($model,'idUsuarioSNETD'); ?>
		<?php echo $form->error($model,'idUsuarioSNETD'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->