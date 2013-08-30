<?php
/* @var $this NetAcessosController */
/* @var $model NetAcessos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'LoginUsuario'); ?>
		<?php echo $form->textField($model,'LoginUsuario',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Campo_S'); ?>
		<?php echo $form->textField($model,'Campo_S',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CodigoMotivoCanc'); ?>
		<?php echo $form->textField($model,'CodigoMotivoCanc',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Campo_D'); ?>
		<?php echo $form->textField($model,'Campo_D',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Campo_H'); ?>
		<?php echo $form->textField($model,'Campo_H',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NoContrato'); ?>
		<?php echo $form->textField($model,'NoContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NomeUsuario'); ?>
		<?php echo $form->textField($model,'NomeUsuario',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CodigoEstadoAcesso'); ?>
		<?php echo $form->textField($model,'CodigoEstadoAcesso',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VersaoKit'); ?>
		<?php echo $form->textField($model,'VersaoKit',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NoCliente'); ?>
		<?php echo $form->textField($model,'NoCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DataCancAces'); ?>
		<?php echo $form->textField($model,'DataCancAces'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Campo_SM'); ?>
		<?php echo $form->textField($model,'Campo_SM',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Campo_DM'); ?>
		<?php echo $form->textField($model,'Campo_DM',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Campo_HM'); ?>
		<?php echo $form->textField($model,'Campo_HM',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IndMailAcesso'); ?>
		<?php echo $form->textField($model,'IndMailAcesso',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Dominio'); ?>
		<?php echo $form->textField($model,'Dominio',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'QtSimult'); ?>
		<?php echo $form->textField($model,'QtSimult'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seqdestino'); ?>
		<?php echo $form->textField($model,'seqdestino'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seq'); ?>
		<?php echo $form->textField($model,'seq'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TipoRedir'); ?>
		<?php echo $form->textField($model,'TipoRedir',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grupo'); ?>
		<?php echo $form->textField($model,'grupo',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'referencia'); ?>
		<?php echo $form->textField($model,'referencia',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cdemail'); ?>
		<?php echo $form->textField($model,'cdemail'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomePainel'); ?>
		<?php echo $form->textField($model,'nomePainel',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->