<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
    'type'=>'search',
     'id'=>'verticalForm',
)); ?>
                <?php echo $form->select2Row($model, 'NomeUsuario', array('asDropDownList' => false, 'options' => array(
                'tags' =>$model->NomeUsuario,
                'placeholder' => 'Nome do Usuário',
                'width' => '40%',
                'tokenSeparators' => array(',', ' ')
                )));?>
		<?php echo $form->textFieldRow($model, 'NomeUsuario', array('class'=>'span3')); ?>


		<?php echo $form->label($model,'UsuarioDB'); ?>
		<?php echo $form->textField($model,'UsuarioDB',array('size'=>50,'maxlength'=>50)); ?>



		<?php echo $form->label($model,'SenhaDB'); ?>
		<?php echo $form->textField($model,'SenhaDB',array('size'=>50,'maxlength'=>50)); ?>


	
		<?php echo $form->label($model,'UsuarioAD'); ?>
		<?php echo $form->textField($model,'UsuarioAD',array('size'=>50,'maxlength'=>50)); ?>


	
		<?php echo $form->label($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>60,'maxlength'=>80)); ?>



		<?php echo $form->label($model,'idDominioLogon'); ?>
		<?php echo $form->textField($model,'idDominioLogon'); ?>



		<?php echo $form->label($model,'idVocalixAgent'); ?>
		<?php echo $form->textField($model,'idVocalixAgent'); ?>



		<?php echo $form->label($model,'Status'); ?>
		<?php echo $form->textField($model,'Status'); ?>



		<?php echo $form->label($model,'idUsuarioSHIP'); ?>
		<?php echo $form->textField($model,'idUsuarioSHIP'); ?>



		<?php echo $form->label($model,'idUsuarioSNETD'); ?>
		<?php echo $form->textField($model,'idUsuarioSNETD'); ?>

                <div>
                    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Search')); ?>
                </div>
               

<?php $this->endWidget(); ?>

</div><!-- search-form -->