<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="wide form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
        'id'=>'form-search-contrato',
        'type'=>'search',
    )); ?>

	<div class="row">
            <div class="span2">
                <?php echo $form->label($model,Yii::t('main','contrato.NoContrato')); ?>
                <?php echo $form->textField($model,'NoCliente'); ?>

                <?php echo $form->label($model, Yii::t('main','cliente.NomeCliente')); ?>
                <?php echo $form->textField($model,'NomeCliente',array('size'=>50,'maxlength'=>50)); ?>

                <?php echo $form->label($model, Yii::t('main','cliente.Endereco')); ?>
                <?php echo $form->textField($model,'Endereco',array('size'=>50,'maxlength'=>50)); ?>

                <?php echo $form->label($model, Yii::t('main','cliente.Cidade')); ?>
                <?php echo $form->textField($model,'Cidade',array('size'=>30,'maxlength'=>30)); ?>

                <?php echo $form->label($model, Yii::t('main','cliente.CEP')); ?>
                <?php echo $form->textField($model,'CEP',array('size'=>10,'maxlength'=>10)); ?>

                <?php echo $form->dropDownListRow($model, 'PF_PJ',
                    array(Yii::t('main', 'cliente.tipoPessoa.select')=>Cliente::model()->tipoPessoa(), )
                 ); ?>
            </div>
	</div>

	<div>
            <?php $this->widget('bootstrap.widgets.TbButton', 
               array(
                   'buttonType'=>'submit', 
                   'label'=>'Buscar',
                   'type' => 'primary',
                   'htmlOptions' => array('style'=>'margin-top:10px'),
           )); ?>		
        </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->