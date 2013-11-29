<?php
/* @var $this ProspectsController */
/* @var $model Prospects */
/* @var $form CActiveForm */
?>

<div class="form">
                            
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'prospects-form',
        'htmlOptions'=>array('class'=>'well'),
	'enableAjaxValidation'=>false,
)); ?>
        <fieldset>
	<p class="note">Fields with <span class="required">*</span> are required.</p>
        
	<?php echo $form->errorSummary($model); ?>

	
        <?php echo $form->labelEx($model,'NoProspect'); ?>
        <?php echo $form->textField($model,'NoProspect'); ?>
        <?php echo $form->error($model,'NoProspect'); ?>

	
        <?php echo $form->labelEx($model,'NomeProspect'); ?>
        <?php echo $form->textField($model,'NomeProspect',array('size'=>50,'maxlength'=>50)); ?>
        <?php echo $form->error($model,'NomeProspect'); ?>

	
        <?php echo $form->labelEx($model,'Endereco'); ?>
        <?php echo $form->textField($model,'Endereco',array('size'=>50,'maxlength'=>50)); ?>
        <?php echo $form->error($model,'Endereco'); ?>

	
        <?php echo $form->labelEx($model,'Bairro'); ?>
        <?php echo $form->textField($model,'Bairro',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'Bairro'); ?>

	
        <?php echo $form->labelEx($model,'FoneResidencia'); ?>
        <?php echo $form->textField($model,'FoneResidencia',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'FoneResidencia'); ?>

	
        <?php echo $form->labelEx($model,'FoneComercial'); ?>
        <?php echo $form->textField($model,'FoneComercial',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'FoneComercial'); ?>

	
        <?php echo $form->labelEx($model,'Contato'); ?>
        <?php echo $form->textField($model,'Contato',array('size'=>50,'maxlength'=>50)); ?>
        <?php echo $form->error($model,'Contato'); ?>

	
        <?php echo $form->labelEx($model,'Cidade'); ?>
        <?php echo $form->textField($model,'Cidade',array('size'=>30,'maxlength'=>30)); ?>
        <?php echo $form->error($model,'Cidade'); ?>

	
        <?php echo $form->labelEx($model,'Estado'); ?>
        <?php echo $form->textField($model,'Estado',array('size'=>2,'maxlength'=>2)); ?>
        <?php echo $form->error($model,'Estado'); ?>

	
        <?php echo $form->labelEx($model,'CEP'); ?>
        <?php echo $form->textField($model,'CEP',array('size'=>10,'maxlength'=>10)); ?>
        <?php echo $form->error($model,'CEP'); ?>

	
        <?php echo $form->labelEx($model,'CGF'); ?>
        <?php echo $form->textField($model,'CGF',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'CGF'); ?>

	
        <?php echo $form->labelEx($model,'CGC'); ?>
        <?php echo $form->textField($model,'CGC',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'CGC'); ?>

	
        <?php echo $form->labelEx($model,'CPF'); ?>
        <?php echo $form->textField($model,'CPF',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'CPF'); ?>

	
        <?php echo $form->labelEx($model,'Identidade'); ?>
        <?php echo $form->textField($model,'Identidade',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'Identidade'); ?>

	
        <?php echo $form->labelEx($model,'Vendedor'); ?>
        <?php echo $form->textField($model,'Vendedor',array('size'=>50,'maxlength'=>50)); ?>
        <?php echo $form->error($model,'Vendedor'); ?>

	
        <?php echo $form->labelEx($model,'Provedor'); ?>
        <?php echo $form->textField($model,'Provedor',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'Provedor'); ?>

	
        <?php echo $form->labelEx($model,'StatusVenda'); ?>
        <?php echo $form->textField($model,'StatusVenda',array('size'=>1,'maxlength'=>1)); ?>
        <?php echo $form->error($model,'StatusVenda'); ?>

	
        <?php echo $form->labelEx($model,'MtNaoAssina'); ?>
        <?php echo $form->textField($model,'MtNaoAssina'); ?>
        <?php echo $form->error($model,'MtNaoAssina'); ?>

	
        <?php echo $form->labelEx($model,'Origem'); ?>
        <?php echo $form->textField($model,'Origem'); ?>
        <?php echo $form->error($model,'Origem'); ?>

	
        <?php echo $form->labelEx($model,'EMail'); ?>
        <?php echo $form->textField($model,'EMail',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'EMail'); ?>

	
        <?php echo $form->labelEx($model,'Servico'); ?>
        <?php echo $form->textField($model,'Servico',array('size'=>30,'maxlength'=>30)); ?>
        <?php echo $form->error($model,'Servico'); ?>

	
        <?php echo $form->labelEx($model,'Condo'); ?>
        <?php echo $form->textField($model,'Condo'); ?>
        <?php echo $form->error($model,'Condo'); ?>

	
        <?php echo $form->labelEx($model,'PF_PJ'); ?>
        <?php echo $form->textField($model,'PF_PJ',array('size'=>1,'maxlength'=>1)); ?>
        <?php echo $form->error($model,'PF_PJ'); ?>

	
        <?php echo $form->labelEx($model,'FAX'); ?>
        <?php echo $form->textField($model,'FAX',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'FAX'); ?>

	
        <?php echo $form->labelEx($model,'Telex'); ?>
        <?php echo $form->textField($model,'Telex',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'Telex'); ?>

	
        <?php echo $form->labelEx($model,'Pager'); ?>
        <?php echo $form->textField($model,'Pager',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'Pager'); ?>

	
        <?php echo $form->labelEx($model,'Celular'); ?>
        <?php echo $form->textField($model,'Celular',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'Celular'); ?>

	
        <?php echo $form->labelEx($model,'Diavenc'); ?>
        <?php echo $form->textField($model,'Diavenc'); ?>
        <?php echo $form->error($model,'Diavenc'); ?>

	
        <?php echo $form->labelEx($model,'TipoLogradouro'); ?>
        <?php echo $form->textField($model,'TipoLogradouro',array('size'=>2,'maxlength'=>2)); ?>
        <?php echo $form->error($model,'TipoLogradouro'); ?>

	
        <?php echo $form->labelEx($model,'NomeLogradouro'); ?>
        <?php echo $form->textField($model,'NomeLogradouro',array('size'=>50,'maxlength'=>50)); ?>
        <?php echo $form->error($model,'NomeLogradouro'); ?>

	
        <?php echo $form->labelEx($model,'NumeroLogradouro'); ?>
        <?php echo $form->textField($model,'NumeroLogradouro',array('size'=>5,'maxlength'=>5)); ?>
        <?php echo $form->error($model,'NumeroLogradouro'); ?>

	
        <?php echo $form->labelEx($model,'Numeroapto'); ?>
        <?php echo $form->textField($model,'Numeroapto',array('size'=>5,'maxlength'=>5)); ?>
        <?php echo $form->error($model,'Numeroapto'); ?>

	
        <?php echo $form->labelEx($model,'Complemento'); ?>
        <?php echo $form->textField($model,'Complemento',array('size'=>50,'maxlength'=>50)); ?>
        <?php echo $form->error($model,'Complemento'); ?>

	
        <?php echo $form->labelEx($model,'nocliente'); ?>
        <?php echo $form->textField($model,'nocliente'); ?>
        <?php echo $form->error($model,'nocliente'); ?>

	
        <?php echo $form->labelEx($model,'observacao'); ?>
        <?php echo $form->textField($model,'observacao',array('size'=>60,'maxlength'=>1000)); ?>
        <?php echo $form->error($model,'observacao'); ?>

	
        <?php echo $form->labelEx($model,'idVend'); ?>
        <?php echo $form->textField($model,'idVend'); ?>
        <?php echo $form->error($model,'idVend'); ?>

	
        <?php echo $form->labelEx($model,'empresa'); ?>
        <?php echo $form->textField($model,'empresa',array('size'=>1,'maxlength'=>1)); ?>
        <?php echo $form->error($model,'empresa'); ?>

        </fieldset>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'type' => 'primary',
    'buttonType' => 'submit',
    'label' => $model->isNewRecord ? Yii::t('main','helper.create') : Yii::t('main','helper.save'),
    ));
    ?>        

<?php $this->endWidget(); ?>

</div><!-- form -->