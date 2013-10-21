<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

    <?php echo $form->label($model,'id_usuario'); ?>
    <?php echo $form->textField($model,'id_usuario'); ?>

    <?php echo $form->label($model,'nm_usuario'); ?>
    <?php echo $form->textField($model,'nm_usuario',array('size'=>60,'maxlength'=>100)); ?>

    <?php echo $form->label($model,'email_usuario'); ?>
    <?php echo $form->textField($model,'email_usuario',array('size'=>60,'maxlength'=>100)); ?>

    <?php echo $form->label($model,'usuarioad'); ?>
    <?php echo $form->textField($model,'usuarioad',array('size'=>60,'maxlength'=>255)); ?>

    <?php echo $form->label($model,'matricula'); ?>
    <?php echo $form->textField($model,'matricula',array('size'=>20,'maxlength'=>20)); ?>



    <div style="margin-top: 10px;">
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>Yii::t('main','helper.search'))); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
