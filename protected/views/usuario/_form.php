<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<?php $this->beginWidget('bootstrap.widgets.TbModal',
    array(
        'id' => 'editUsuario', 
        'htmlOptions' =>
            array('style' =>'width: 922px; margin-left: -457px; overflow:hidden;')
          ));
 ?>

<?php
/** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'editUsuario',
));?>

    <fieldset>
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h4><?php echo $model->isNewRecord ? Yii::t('main','Novo Usuario') :  Yii::t('main','Editar Usuario') ?></h4>
    </div>
        
   <div class="modal-body">
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        <div class="row span9"> 
            <div class="row span8">
                <?php echo $form->labelEx($model,'idUsuario'); ?>
                <?php echo $form->textField($model,'idUsuario'); ?>
                <?php echo $form->error($model,'idUsuario'); ?>
            </div>

            <div class="row span8">
                <?php echo $form->labelEx($model,'NomeUsuario'); ?>
                <?php echo $form->textField($model,'NomeUsuario',array('size'=>50,'maxlength'=>50,'class' => 'span7')); ?>
                <?php echo $form->error($model,'NomeUsuario'); ?>
            </div>
            
            <div class="row span8">
                <?php echo $form->labelEx($model,'Email'); ?>
                <?php echo $form->textField($model,'Email',array('size'=>60,'maxlength'=>80, 'class' => 'span7')); ?>
                <?php echo $form->error($model,'Email'); ?>
            </div>

            <div class="row span8">        
                <div class="span4">
                    <?php echo $form->labelEx($model,'UsuarioDB'); ?>
                    <?php echo $form->textField($model,'UsuarioDB',array('size'=>50,'maxlength'=>50, 'class' => 'span4', 'style'=>'margin-left: -20px')); ?>
                    <?php echo $form->error($model,'UsuarioDB'); ?>
                </div>
                <div class="span4" style="margin-left:10px">
                    <?php echo $form->labelEx($model,'UsuarioAD'); ?>
                    <?php echo $form->textField($model,'UsuarioAD',array('size'=>50,'maxlength'=>50, 'class' => 'span4')); ?>
                    <?php echo $form->error($model,'UsuarioAD'); ?>
                </div>
            </div>

        </div>
   </div>

    </fieldset>        
<div class="modal-footer">
        <!-- BOTÃO DE EDIÇÃO DO CLIENTE -->
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'type' => 'primary',
            'buttonType' => 'submit',
            'label' => $model->isNewRecord ? 'Criar' : 'Salvar',
        ));
        ?>

        <!-- BOTÃO DE CANCELAMENTO EDIÇÃO DO CLIENTE -->
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'label' => 'Cancelar',
            'url' => '#',
            'htmlOptions' => array('data-dismiss' => 'modal'),
        ));
        ?>
</div>
    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>