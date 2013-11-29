<?php
/* @var $this ProspectAlunoController */
/* @var $model ProspectAluno */
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
		<?php echo $form->label($model,'idPessoa'); ?>
		<?php echo $form->textField($model,'idPessoa'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'idTurma'); ?>
		<?php echo $form->textField($model,'idTurma'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'cdServico'); ?>
		<?php echo $form->textField($model,'cdServico'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Seq'); ?>
		<?php echo $form->textField($model,'Seq'); ?>
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