<?php
/* @var $this ProspectAlunoController */
/* @var $model ProspectAluno */
/* @var $form CActiveForm */
?>

<div class="form">
                            
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'prospect-aluno-form',
        'htmlOptions'=>array('class'=>'well'),
	'enableAjaxValidation'=>false,
)); ?>
        <fieldset>
	<p class="note">Fields with <span class="required">*</span> are required.</p>
        
	<?php echo $form->errorSummary($model); ?>

	
        <?php echo $form->labelEx($model,'idPessoa'); ?>
        <?php echo $form->textField($model,'idPessoa'); ?>
        <?php echo $form->error($model,'idPessoa'); ?>

	
        <?php echo $form->labelEx($model,'idTurma'); ?>
        <?php echo $form->textField($model,'idTurma'); ?>
        <?php echo $form->error($model,'idTurma'); ?>

	
        <?php echo $form->labelEx($model,'cdServico'); ?>
        <?php echo $form->textField($model,'cdServico'); ?>
        <?php echo $form->error($model,'cdServico'); ?>

	
        <?php echo $form->labelEx($model,'Seq'); ?>
        <?php echo $form->textField($model,'Seq'); ?>
        <?php echo $form->error($model,'Seq'); ?>

        </fieldset>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'type' => 'primary',
    'buttonType' => 'submit',
    'label' => $model->isNewRecord ? Yii::t('main','helper.create') : Yii::t('main','helper.save'),
    ));
    ?>        

<?php $this->endWidget(); ?>

</div><!-- form -->