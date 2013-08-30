<?php
/* @var $this CobrAdicController */
/* @var $model CobrAdic */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'NoContrato'); ?>
		<?php echo $form->textField($model,'NoContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Historico'); ?>
		<?php echo $form->textField($model,'Historico',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Valor'); ?>
		<?php echo $form->textField($model,'Valor',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FreqCobr'); ?>
		<?php echo $form->textField($model,'FreqCobr',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Seq'); ?>
		<?php echo $form->textField($model,'Seq'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aux'); ?>
		<?php echo $form->textField($model,'aux',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Vencimento'); ?>
		<?php echo $form->textField($model,'Vencimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TipoCobrAdic'); ?>
		<?php echo $form->textField($model,'TipoCobrAdic',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IdentificaOper'); ?>
		<?php echo $form->textField($model,'IdentificaOper',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SeqPai'); ?>
		<?php echo $form->textField($model,'SeqPai'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->