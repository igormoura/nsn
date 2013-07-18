<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'well'),

)); ?>

		<?php echo $form->textFieldRow($model,'id'); ?>

		<?php echo $form->textFieldRow($model,'name',array('size'=>50,'maxlength'=>50)); ?>

		<?php echo $form->textFieldRow($model,'username',array('size'=>50,'maxlength'=>50)); ?>

		<?php echo $form->textFieldRow($model,'phone',array('size'=>50,'maxlength'=>50)); ?>

		<?php echo $form->textFieldRow($model,'email',array('size'=>60,'maxlength'=>80)); ?>

		<?php echo $form->textFieldRow($model, 'status', array('status'=>true)); ?>

                <div class="form-actions">
                    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Search')); ?>
                    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
                </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->