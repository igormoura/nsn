<?php
/* @var $this MotivoCancelamentoController */
/* @var $model MotivoCancelamento */
/* @var $form CActiveForm */
?>

<div class="form">
                            
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'motivo-cancelamento-form',
        'htmlOptions'=>array('class'=>'well'),
	'enableAjaxValidation'=>false,
)); ?>
        <fieldset>
	<p class="note">Fields with <span class="required">*</span> are required.</p>
        
	<?php echo $form->errorSummary($model); ?>

	
        <?php echo $form->labelEx($model,'CodigoMotivoCanc'); ?>
        <?php echo $form->textField($model,'CodigoMotivoCanc',array('size'=>2,'maxlength'=>2)); ?>
        <?php echo $form->error($model,'CodigoMotivoCanc'); ?>

	
        <?php echo $form->labelEx($model,'DescrMotivo'); ?>
        <?php echo $form->textField($model,'DescrMotivo',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'DescrMotivo'); ?>

        </fieldset>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'type' => 'primary',
    'buttonType' => 'submit',
    'label' => $model->isNewRecord ? Yii::t('main','helper.create') : Yii::t('main','helper.save'),
    ));
    ?>        

<?php $this->endWidget(); ?>

</div><!-- form -->