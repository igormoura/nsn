<?php
/* @var $this OcorrenciaController */
/* @var $model Ocorrencia */
/* @var $form CActiveForm */
?>

<div class="form">
                            
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'ocorrencia-form',
        'htmlOptions'=>array('class'=>'well'),
	'enableAjaxValidation'=>false,
)); ?>
        <fieldset>
	<p class="note">Fields with <span class="required">*</span> are required.</p>
        
	<?php echo $form->errorSummary($model); ?>

	
        <?php echo $form->labelEx($model,'NoContrato'); ?>
        <?php echo $form->textField($model,'NoContrato'); ?>
        <?php echo $form->error($model,'NoContrato'); ?>

	
        <?php echo $form->labelEx($model,'DataOcorrencia'); ?>
        <?php echo $form->textField($model,'DataOcorrencia'); ?>
        <?php echo $form->error($model,'DataOcorrencia'); ?>

	
        <?php echo $form->labelEx($model,'DataOcorrenciaF'); ?>
        <?php echo $form->textField($model,'DataOcorrenciaF'); ?>
        <?php echo $form->error($model,'DataOcorrenciaF'); ?>

	
        <?php echo $form->labelEx($model,'NomeUsuario'); ?>
        <?php echo $form->textField($model,'NomeUsuario',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'NomeUsuario'); ?>

	
        <?php echo $form->labelEx($model,'NomeContactado'); ?>
        <?php echo $form->textField($model,'NomeContactado',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'NomeContactado'); ?>

	
        <?php echo $form->labelEx($model,'Ocorrencia'); ?>
        <?php echo $form->textArea($model,'Ocorrencia',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->error($model,'Ocorrencia'); ?>

	
        <?php echo $form->labelEx($model,'StatusOcorrencia'); ?>
        <?php echo $form->textField($model,'StatusOcorrencia',array('size'=>2,'maxlength'=>2)); ?>
        <?php echo $form->error($model,'StatusOcorrencia'); ?>

	
        <?php echo $form->labelEx($model,'NoOcorrenciaPai'); ?>
        <?php echo $form->textField($model,'NoOcorrenciaPai'); ?>
        <?php echo $form->error($model,'NoOcorrenciaPai'); ?>

	
        <?php echo $form->labelEx($model,'NoChamado'); ?>
        <?php echo $form->textField($model,'NoChamado'); ?>
        <?php echo $form->error($model,'NoChamado'); ?>

	
        <?php echo $form->labelEx($model,'cdproblema'); ?>
        <?php echo $form->textField($model,'cdproblema'); ?>
        <?php echo $form->error($model,'cdproblema'); ?>

	
        <?php echo $form->labelEx($model,'cdServico'); ?>
        <?php echo $form->textField($model,'cdServico'); ?>
        <?php echo $form->error($model,'cdServico'); ?>

	
        <?php echo $form->labelEx($model,'ObsFec'); ?>
        <?php echo $form->textField($model,'ObsFec',array('size'=>60,'maxlength'=>1000)); ?>
        <?php echo $form->error($model,'ObsFec'); ?>

	
        <?php echo $form->labelEx($model,'NomeUsuarioFec'); ?>
        <?php echo $form->textField($model,'NomeUsuarioFec',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'NomeUsuarioFec'); ?>

	
        <?php echo $form->labelEx($model,'cdproblemafec'); ?>
        <?php echo $form->textField($model,'cdproblemafec'); ?>
        <?php echo $form->error($model,'cdproblemafec'); ?>

	
        <?php echo $form->labelEx($model,'dt_hr_ini_atendimento'); ?>
        <?php echo $form->textField($model,'dt_hr_ini_atendimento'); ?>
        <?php echo $form->error($model,'dt_hr_ini_atendimento'); ?>

	
        <?php echo $form->labelEx($model,'dt_hr_fim_atendimento'); ?>
        <?php echo $form->textField($model,'dt_hr_fim_atendimento'); ?>
        <?php echo $form->error($model,'dt_hr_fim_atendimento'); ?>

	
        <?php echo $form->labelEx($model,'id_usuario'); ?>
        <?php echo $form->textField($model,'id_usuario'); ?>
        <?php echo $form->error($model,'id_usuario'); ?>

	
        <?php echo $form->labelEx($model,'id_setor'); ?>
        <?php echo $form->textField($model,'id_setor'); ?>
        <?php echo $form->error($model,'id_setor'); ?>

	
        <?php echo $form->labelEx($model,'OrigemdaOcorrencia'); ?>
        <?php echo $form->textField($model,'OrigemdaOcorrencia'); ?>
        <?php echo $form->error($model,'OrigemdaOcorrencia'); ?>

	
        <?php echo $form->labelEx($model,'id_grupo'); ?>
        <?php echo $form->textField($model,'id_grupo'); ?>
        <?php echo $form->error($model,'id_grupo'); ?>

	
        <?php echo $form->labelEx($model,'OrigemEmail'); ?>
        <?php echo $form->textField($model,'OrigemEmail',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'OrigemEmail'); ?>

	
        <?php echo $form->labelEx($model,'idUsuarioF'); ?>
        <?php echo $form->textField($model,'idUsuarioF'); ?>
        <?php echo $form->error($model,'idUsuarioF'); ?>

	
        <?php echo $form->labelEx($model,'flagVisivelCliente'); ?>
        <?php echo $form->textField($model,'flagVisivelCliente',array('size'=>1,'maxlength'=>1)); ?>
        <?php echo $form->error($model,'flagVisivelCliente'); ?>

	
        <?php echo $form->labelEx($model,'flagSolicitacao'); ?>
        <?php echo $form->textField($model,'flagSolicitacao',array('size'=>1,'maxlength'=>1)); ?>
        <?php echo $form->error($model,'flagSolicitacao'); ?>

        </fieldset>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'type' => 'primary',
    'buttonType' => 'submit',
    'label' => $model->isNewRecord ? Yii::t('main','helper.create') : Yii::t('main','helper.save'),
    ));
    ?>        

<?php $this->endWidget(); ?>

</div><!-- form -->