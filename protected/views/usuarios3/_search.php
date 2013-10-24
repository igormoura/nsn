<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
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
		<?php echo $form->label($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'email_usuario'); ?>
		<?php echo $form->textField($model,'email_usuario',array('size'=>60,'maxlength'=>100)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'nm_usuario'); ?>
		<?php echo $form->textField($model,'nm_usuario',array('size'=>60,'maxlength'=>100)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'pw_usuario'); ?>
		<?php echo $form->textField($model,'pw_usuario',array('size'=>60,'maxlength'=>100)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'home_usuario'); ?>
		<?php echo $form->textField($model,'home_usuario',array('size'=>60,'maxlength'=>100)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'foto_usuario'); ?>
		<?php echo $form->textField($model,'foto_usuario',array('size'=>50,'maxlength'=>50)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'dt_nascimento'); ?>
		<?php echo $form->textField($model,'dt_nascimento'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'cel_usuario'); ?>
		<?php echo $form->textField($model,'cel_usuario',array('size'=>10,'maxlength'=>10)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'tel_usuario'); ?>
		<?php echo $form->textField($model,'tel_usuario',array('size'=>10,'maxlength'=>10)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'ramal_usuario'); ?>
		<?php echo $form->textField($model,'ramal_usuario',array('size'=>10,'maxlength'=>10)); ?>
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
		<?php echo $form->label($model,'nomecompleto_usuario'); ?>
		<?php echo $form->textField($model,'nomecompleto_usuario',array('size'=>60,'maxlength'=>100)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'cdGrupoVenda'); ?>
		<?php echo $form->textField($model,'cdGrupoVenda'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'Id_Supervisor'); ?>
		<?php echo $form->textField($model,'Id_Supervisor'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'matricula'); ?>
		<?php echo $form->textField($model,'matricula',array('size'=>20,'maxlength'=>20)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'id_cargahora'); ?>
		<?php echo $form->textField($model,'id_cargahora'); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'filial'); ?>
		<?php echo $form->textField($model,'filial',array('size'=>3,'maxlength'=>3)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'usuarioad'); ?>
		<?php echo $form->textField($model,'usuarioad',array('size'=>60,'maxlength'=>255)); ?>
            </div>
	</div>

	<div class="row">
            <div class="span2">
		<?php echo $form->label($model,'VocalixAgenteID'); ?>
		<?php echo $form->textField($model,'VocalixAgenteID'); ?>
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