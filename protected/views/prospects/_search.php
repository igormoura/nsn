<?php
/* @var $this ProspectsController */
/* @var $model Prospects */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
        'type'=>'search',
    )); ?>
	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'NoProspect'); ?>
		<?php echo $form->textField($model,'NoProspect'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'NomeProspect'); ?>
		<?php echo $form->textField($model,'NomeProspect',array('size'=>50,'maxlength'=>50)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Endereco'); ?>
		<?php echo $form->textField($model,'Endereco',array('size'=>50,'maxlength'=>50)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Bairro'); ?>
		<?php echo $form->textField($model,'Bairro',array('size'=>20,'maxlength'=>20)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'FoneResidencia'); ?>
		<?php echo $form->textField($model,'FoneResidencia',array('size'=>20,'maxlength'=>20)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'FoneComercial'); ?>
		<?php echo $form->textField($model,'FoneComercial',array('size'=>20,'maxlength'=>20)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Contato'); ?>
		<?php echo $form->textField($model,'Contato',array('size'=>50,'maxlength'=>50)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Cidade'); ?>
		<?php echo $form->textField($model,'Cidade',array('size'=>30,'maxlength'=>30)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Estado'); ?>
		<?php echo $form->textField($model,'Estado',array('size'=>2,'maxlength'=>2)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'CEP'); ?>
		<?php echo $form->textField($model,'CEP',array('size'=>10,'maxlength'=>10)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'CGF'); ?>
		<?php echo $form->textField($model,'CGF',array('size'=>20,'maxlength'=>20)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'CGC'); ?>
		<?php echo $form->textField($model,'CGC',array('size'=>20,'maxlength'=>20)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'CPF'); ?>
		<?php echo $form->textField($model,'CPF',array('size'=>20,'maxlength'=>20)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Identidade'); ?>
		<?php echo $form->textField($model,'Identidade',array('size'=>20,'maxlength'=>20)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Vendedor'); ?>
		<?php echo $form->textField($model,'Vendedor',array('size'=>50,'maxlength'=>50)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Provedor'); ?>
		<?php echo $form->textField($model,'Provedor',array('size'=>20,'maxlength'=>20)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'StatusVenda'); ?>
		<?php echo $form->textField($model,'StatusVenda',array('size'=>1,'maxlength'=>1)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'MtNaoAssina'); ?>
		<?php echo $form->textField($model,'MtNaoAssina'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Origem'); ?>
		<?php echo $form->textField($model,'Origem'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'EMail'); ?>
		<?php echo $form->textField($model,'EMail',array('size'=>60,'maxlength'=>100)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Servico'); ?>
		<?php echo $form->textField($model,'Servico',array('size'=>30,'maxlength'=>30)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Condo'); ?>
		<?php echo $form->textField($model,'Condo'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'PF_PJ'); ?>
		<?php echo $form->textField($model,'PF_PJ',array('size'=>1,'maxlength'=>1)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'FAX'); ?>
		<?php echo $form->textField($model,'FAX',array('size'=>20,'maxlength'=>20)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Telex'); ?>
		<?php echo $form->textField($model,'Telex',array('size'=>20,'maxlength'=>20)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Pager'); ?>
		<?php echo $form->textField($model,'Pager',array('size'=>20,'maxlength'=>20)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Celular'); ?>
		<?php echo $form->textField($model,'Celular',array('size'=>20,'maxlength'=>20)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Diavenc'); ?>
		<?php echo $form->textField($model,'Diavenc'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'TipoLogradouro'); ?>
		<?php echo $form->textField($model,'TipoLogradouro',array('size'=>2,'maxlength'=>2)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'NomeLogradouro'); ?>
		<?php echo $form->textField($model,'NomeLogradouro',array('size'=>50,'maxlength'=>50)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'NumeroLogradouro'); ?>
		<?php echo $form->textField($model,'NumeroLogradouro',array('size'=>5,'maxlength'=>5)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Numeroapto'); ?>
		<?php echo $form->textField($model,'Numeroapto',array('size'=>5,'maxlength'=>5)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Complemento'); ?>
		<?php echo $form->textField($model,'Complemento',array('size'=>50,'maxlength'=>50)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'nocliente'); ?>
		<?php echo $form->textField($model,'nocliente'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'observacao'); ?>
		<?php echo $form->textField($model,'observacao',array('size'=>60,'maxlength'=>1000)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'idVend'); ?>
		<?php echo $form->textField($model,'idVend'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'empresa'); ?>
		<?php echo $form->textField($model,'empresa',array('size'=>1,'maxlength'=>1)); ?>
            </div>
	</div>

                
        <div>
            
                <?php $this->widget('bootstrap.widgets.TbButton', 
                   array(
                       'buttonType'=>'submit', 
                       'label'=>'Buscar',
                       'type' => 'primary',
                       'htmlOptions' => array('style'=>'margin-top:10px'),
               )); ?>        </div>


<?php $this->endWidget(); ?>

</div><!-- search-form -->