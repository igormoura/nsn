<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form">
                            
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'usuarios-form',
        'htmlOptions'=>array('class'=>'well'),
	'enableAjaxValidation'=>false,
)); ?>
        <fieldset>
	<p class="note">Fields with <span class="required">*</span> are required.</p>
        
	<?php echo $form->errorSummary($model); ?>

	
        <div class="row span8">
            <div class="span4">
                
                <?php echo $form->textFieldRow($model, 'nm_usuario', array('size' => 60, 'maxlength' => 100, 'class' => 'span4')); ?>
                <?php echo $form->error($model, 'nm_usuario'); ?>
            </div>
            <div class="span3">
                <?php echo $form->textFieldRow($model, 'matricula', array('size' => 20, 'maxlength' => 20)); ?>
                <?php echo $form->error($model, 'matricula'); ?>
            </div>
       </div>       
         
        <div class="row span8">
            <div class="span4">
                <?php echo $form->textFieldRow($model, 'nomecompleto_usuario', array('size' => 60, 'maxlength' => 100, 'class' => 'span4')); ?>
                <?php echo $form->error($model, 'nomecompleto_usuario'); ?>
            </div>
            <div class="span3">
            <?php echo $form->label($model, 'dt_nascimento'); ?>
            <?php
                $this->widget('CMaskedTextField', array(
                    'model' => $model,
                    'attribute' => 'dt_nascimento',
                    'mask' => '99/99/9999',
                    'htmlOptions' => array('size' => 8, 'maxlength' => 8, 'style' => 'width: 180px')
            ));?> 
            <?php echo $form->error($model, 'dt_nascimento'); ?>
            </div>
       </div>
        
        <div class="row span8">
            <div class="span4">
                <?php echo $form->textFieldRow($model, 'email_usuario', array('size' => 60, 'maxlength' => 100, 'class' => 'span4')); ?>
                <?php echo $form->error($model, 'email_usuario'); ?>
            </div>
            <div class="span3">
                <?php echo $form->textFieldRow($model, 'usuarioad', array('size' => 60, 'maxlength' => 255)); ?>
                <?php echo $form->error($model, 'usuarioad'); ?>
            </div>     
        </div>
        
        <div class="row span8">
            <div class="span2">
                <?php echo $form->textFieldRow($model, 'ramal_usuario', array('size' => 4, 'maxlength' => 4, 'style' => 'width: 180px')); ?>
                <?php echo $form->error($model, 'ramal_usuario'); ?>
            </div>
            <div class="span2" style="margin-left: 43px;">
                <?php echo $form->labelEx($model, 'cel_usuario'); ?>
                <?php
                $this->widget('CMaskedTextField', array(
                    'model' => $model,
                    'attribute' => 'cel_usuario',
                    'mask' => '(99) 9999-9999',
                    'htmlOptions' => array('size' => 10, 'maxlength' => 10, 'style' => 'width: 180px')
                ));
                ?>
                <?php echo $form->error($model, 'cel_usuario'); ?>
            </div>
            <div class="span2" style="margin-left: 43px;">
                <?php echo $form->labelEx($model, 'tel_usuario'); ?>
                <?php
                $this->widget('CMaskedTextField', array(
                    'model' => $model,
                    'attribute' => 'tel_usuario',
                    'mask' => '(99) 9999-9999',
                    'htmlOptions' => array('size' => 10, 'maxlength' => 10, 'style' => 'width: 180px')
                ));
                ?>
                <?php echo $form->error($model, 'tel_usuario'); ?>
            </div>
        </div>
        
        <div class="row span8">
            <div class="row span4">
                <?php echo $form->textFieldRow($model, 'home_usuario', array('size' => 60, 'maxlength' => 100, 'class' => 'span4')); ?>
                <?php echo $form->error($model, 'home_usuario'); ?>
            </div>
            <div class="span3">
                <?php echo $form->textFieldRow($model, 'id_cargahora'); ?>
                <?php echo $form->error($model, 'id_cargahora'); ?>
            </div>  
        </div>
        
        <div class="row span8">
            <div class="row span4">
             <?php /*$form = $this->beginWidget(
                    'CActiveForm',
                    array(
                        'id' => 'upload-form',
                        'enableAjaxValidation' => false,
                        'htmlOptions' => array('enctype' => Yii::app()->request->baseUrl."/images/usuarios/"),
                    )
                );
             
                echo $form->labelEx($model, 'foto_usuario');
                echo $form->fileField($model, 'foto_usuario', array('class' => 'span4', 'style'=>'370px'));
                echo $form->error($model, 'foto_usuario');
         
                $this->endWidget(); 
            */?>
            </div>
            
            <div class="span3">
                <?php echo $form->labelEx($model, 'filial'); ?>
                <?php echo $form->textField($model, 'filial', array('size' => 3, 'maxlength' => 3)); ?>
                <?php echo $form->error($model, 'filial'); ?>
            </div>
        </div>

        </fieldset>
    
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'type' => 'primary',
    'buttonType' => 'submit',
    'label' => $model->isNewRecord ? Yii::t('main','helper.create') : Yii::t('main','helper.save'),
    ));
    ?>        

<?php $this->endWidget(); ?>

</div><!-- form -->