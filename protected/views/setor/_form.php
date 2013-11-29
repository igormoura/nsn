<?php
/* @var $this SetorController */
/* @var $model Setor */
/* @var $form CActiveForm */
?>

<div class="form">
                            
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'setor-form',
        'htmlOptions'=>array('class'=>'well'),
	'enableAjaxValidation'=>false,
)); ?>
        <fieldset>
	<p class="note">Fields with <span class="required">*</span> are required.</p>
        
	<?php echo $form->errorSummary($model); ?>

	
        <?php echo $form->labelEx($model,'id_setor'); ?>
        <?php echo $form->textField($model,'id_setor'); ?>
        <?php echo $form->error($model,'id_setor'); ?>

	
        <?php echo $form->labelEx($model,'ds_setor'); ?>
        <?php echo $form->textField($model,'ds_setor',array('size'=>60,'maxlength'=>200)); ?>
        <?php echo $form->error($model,'ds_setor'); ?>

	
        <?php echo $form->labelEx($model,'ativo'); ?>
        <?php echo $form->textField($model,'ativo',array('size'=>1,'maxlength'=>1)); ?>
        <?php echo $form->error($model,'ativo'); ?>

        </fieldset>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'type' => 'primary',
    'buttonType' => 'submit',
    'label' => $model->isNewRecord ? Yii::t('main','helper.create') : Yii::t('main','helper.save'),
    ));
    ?>        

<?php $this->endWidget(); ?>

</div><!-- form -->