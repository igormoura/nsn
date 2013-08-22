<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'NoCliente'); ?>
		<?php echo $form->textField($model,'NoCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NomeCliente'); ?>
		<?php echo $form->textField($model,'NomeCliente',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Endereco'); ?>
		<?php echo $form->textField($model,'Endereco',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Bairro'); ?>
		<?php echo $form->textField($model,'Bairro',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cidade'); ?>
		<?php echo $form->textField($model,'Cidade',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Estado'); ?>
		<?php echo $form->textField($model,'Estado',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CEP'); ?>
		<?php echo $form->textField($model,'CEP',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CGF'); ?>
		<?php echo $form->textField($model,'CGF',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CGC'); ?>
		<?php echo $form->textField($model,'CGC',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CPF'); ?>
		<?php echo $form->textField($model,'CPF',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Identidade'); ?>
		<?php echo $form->textField($model,'Identidade',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FoneResidencia'); ?>
		<?php echo $form->textField($model,'FoneResidencia',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FoneComerical'); ?>
		<?php echo $form->textField($model,'FoneComerical',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FAX'); ?>
		<?php echo $form->textField($model,'FAX',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Telex'); ?>
		<?php echo $form->textField($model,'Telex',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Contato'); ?>
		<?php echo $form->textField($model,'Contato',array('size'=>60,'maxlength'=>110)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Pager'); ?>
		<?php echo $form->textField($model,'Pager',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Celular'); ?>
		<?php echo $form->textField($model,'Celular',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMail'); ?>
		<?php echo $form->textField($model,'EMail',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PF_PJ'); ?>
		<?php echo $form->textField($model,'PF_PJ',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ECNomeCliente'); ?>
		<?php echo $form->textField($model,'ECNomeCliente',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ECEndereco'); ?>
		<?php echo $form->textField($model,'ECEndereco',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ECBairro'); ?>
		<?php echo $form->textField($model,'ECBairro',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ECCidade'); ?>
		<?php echo $form->textField($model,'ECCidade',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ECEstado'); ?>
		<?php echo $form->textField($model,'ECEstado',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ECCEP'); ?>
		<?php echo $form->textField($model,'ECCEP',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EmailCobr'); ?>
		<?php echo $form->textField($model,'EmailCobr',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ViaECT'); ?>
		<?php echo $form->textField($model,'ViaECT',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InscricaoMunicipal'); ?>
		<?php echo $form->textField($model,'InscricaoMunicipal',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EmailFinanceiro'); ?>
		<?php echo $form->textField($model,'EmailFinanceiro',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->