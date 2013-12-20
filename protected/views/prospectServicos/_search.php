<?php
/* @var $this ProspectServicosController */
/* @var $model ProspectServicos */
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
		<?php echo $form->label($model,'cdservico'); ?>
		<?php echo $form->textField($model,'cdservico'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'NoProspect'); ?>
		<?php echo $form->textField($model,'NoProspect'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Servico'); ?>
		<?php echo $form->textField($model,'Servico',array('size'=>15,'maxlength'=>15)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Valor'); ?>
		<?php echo $form->textField($model,'Valor',array('size'=>11,'maxlength'=>11)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Freq'); ?>
		<?php echo $form->textField($model,'Freq',array('size'=>1,'maxlength'=>1)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'historico'); ?>
		<?php echo $form->textField($model,'historico',array('size'=>60,'maxlength'=>70)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'vencimento'); ?>
		<?php echo $form->textField($model,'vencimento'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'IdVend'); ?>
		<?php echo $form->textField($model,'IdVend'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'IdIndic'); ?>
		<?php echo $form->textField($model,'IdIndic'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'DtVend'); ?>
		<?php echo $form->textField($model,'DtVend'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'DtIndic'); ?>
		<?php echo $form->textField($model,'DtIndic'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'FidelidadePredial'); ?>
		<?php echo $form->textField($model,'FidelidadePredial',array('size'=>1,'maxlength'=>1)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'DtFidelidadePredial'); ?>
		<?php echo $form->textField($model,'DtFidelidadePredial'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'PlanoFidelidadePredial'); ?>
		<?php echo $form->textField($model,'PlanoFidelidadePredial',array('size'=>12,'maxlength'=>12)); ?>
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