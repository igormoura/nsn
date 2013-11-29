<?php
/* @var $this ProspectServicosController */
/* @var $model ProspectServicos */
/* @var $form CActiveForm */
?>

<div class="form">
                            
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'prospect-servicos-form',
        'htmlOptions'=>array('class'=>'well'),
	'enableAjaxValidation'=>false,
)); ?>
        <fieldset>
	<p class="note">Fields with <span class="required">*</span> are required.</p>
        
	<?php echo $form->errorSummary($model); ?>

	
        <?php echo $form->labelEx($model,'NoProspect'); ?>
        <?php echo $form->textField($model,'NoProspect'); ?>
        <?php echo $form->error($model,'NoProspect'); ?>

	
        <?php echo $form->labelEx($model,'Servico'); ?>
        <?php echo $form->textField($model,'Servico',array('size'=>15,'maxlength'=>15)); ?>
        <?php echo $form->error($model,'Servico'); ?>

	
        <?php echo $form->labelEx($model,'Valor'); ?>
        <?php echo $form->textField($model,'Valor',array('size'=>11,'maxlength'=>11)); ?>
        <?php echo $form->error($model,'Valor'); ?>

	
        <?php echo $form->labelEx($model,'Freq'); ?>
        <?php echo $form->textField($model,'Freq',array('size'=>1,'maxlength'=>1)); ?>
        <?php echo $form->error($model,'Freq'); ?>

	
        <?php echo $form->labelEx($model,'historico'); ?>
        <?php echo $form->textField($model,'historico',array('size'=>60,'maxlength'=>70)); ?>
        <?php echo $form->error($model,'historico'); ?>

	
        <?php echo $form->labelEx($model,'vencimento'); ?>
        <?php echo $form->textField($model,'vencimento'); ?>
        <?php echo $form->error($model,'vencimento'); ?>

	
        <?php echo $form->labelEx($model,'IdVend'); ?>
        <?php echo $form->textField($model,'IdVend'); ?>
        <?php echo $form->error($model,'IdVend'); ?>

	
        <?php echo $form->labelEx($model,'IdIndic'); ?>
        <?php echo $form->textField($model,'IdIndic'); ?>
        <?php echo $form->error($model,'IdIndic'); ?>

	
        <?php echo $form->labelEx($model,'DtVend'); ?>
        <?php echo $form->textField($model,'DtVend'); ?>
        <?php echo $form->error($model,'DtVend'); ?>

	
        <?php echo $form->labelEx($model,'DtIndic'); ?>
        <?php echo $form->textField($model,'DtIndic'); ?>
        <?php echo $form->error($model,'DtIndic'); ?>

	
        <?php echo $form->labelEx($model,'status'); ?>
        <?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
        <?php echo $form->error($model,'status'); ?>

	
        <?php echo $form->labelEx($model,'FidelidadePredial'); ?>
        <?php echo $form->textField($model,'FidelidadePredial',array('size'=>1,'maxlength'=>1)); ?>
        <?php echo $form->error($model,'FidelidadePredial'); ?>

	
        <?php echo $form->labelEx($model,'DtFidelidadePredial'); ?>
        <?php echo $form->textField($model,'DtFidelidadePredial'); ?>
        <?php echo $form->error($model,'DtFidelidadePredial'); ?>

	
        <?php echo $form->labelEx($model,'PlanoFidelidadePredial'); ?>
        <?php echo $form->textField($model,'PlanoFidelidadePredial',array('size'=>12,'maxlength'=>12)); ?>
        <?php echo $form->error($model,'PlanoFidelidadePredial'); ?>

        </fieldset>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'type' => 'primary',
    'buttonType' => 'submit',
    'label' => $model->isNewRecord ? Yii::t('main','helper.create') : Yii::t('main','helper.save'),
    ));
    ?>        

<?php $this->endWidget(); ?>

</div><!-- form -->