<?php
/* @var $this MotivoCancelamentoController */
/* @var $model MotivoCancelamento */
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
		<?php echo $form->label($model,'CodigoMotivoCanc'); ?>
		<?php echo $form->textField($model,'CodigoMotivoCanc',array('size'=>2,'maxlength'=>2)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'DescrMotivo'); ?>
		<?php echo $form->textField($model,'DescrMotivo',array('size'=>20,'maxlength'=>20)); ?>
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