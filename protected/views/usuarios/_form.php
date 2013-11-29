<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<?php
$this->beginWidget('bootstrap.widgets.TbModal', array(
    'id' => 'formUsuario',
    'htmlOptions' =>
    array('style' => 'width: 770px; margin-left: -405px; overflow:hidden;')
));
?>

<?php

$form = $this->beginWidget(    'bootstrap.widgets.TbActiveForm',
    array(
        'id' => 'usuarios-form',
       // 'htmlOptions' => array('class' => 'well'), // for inset effect
    )
);
?>

<fieldset>
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h4><?php echo $model->isNewRecord ? Yii::t('main', 'Novo Usuario') : Yii::t('main', 'Editar Usuario') ?></h4>
    </div>
    <div class="modal-body">

        <p class="note"><?php echo Yii::t('main','helper.fieldsRequired') ?></p>
        
        <?php echo $form->errorSummary($model); ?>
            
        <div class="row span8">
            <div class="span4">
            <?php echo $form->textFieldRow($model, 'nm_usuario', array('class' => 'span4')); ?>
            <?php echo $form->error($model, 'nm_usuario'); ?>
            </div>
            <div class="span3">
            <?php echo $form->textFieldRow($model, 'matricula'); ?>
            <?php echo $form->error($model, 'matricula'); ?>
            </div>
       </div>       
         
        <div class="row span8">
            <div class="span4">
            <?php echo $form->textFieldRow($model, 'nomecompleto_usuario', array('class' => 'span4')); ?>
            <?php echo $form->error($model, 'nomecompleto_usuario'); ?>
            </div>
            
            <div class="span3">
                <?php echo $form->label($model, 'dt_nascimento'); ?>
               
                
                <?php  Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');                  
                   $this->widget('CJuiDateTimePicker',array(
                            'model'=>$model,                                // Model object
                            'attribute'=>'dt_nascimento', // Attribute name
                            'language' => 'pt',
                            'themeUrl' => Yii::app()->baseUrl . '/css/jui',
                            'theme' => 'softark',
                            'cssFile' => 'jquery-ui-1.9.2.custom.css',
                           'options'=>array(
                                'dateFormat' => 'yy-mm-dd',     // format of "2012-12-25"
                                'showOtherMonths' => true,      // show dates in other months
                                'selectOtherMonths' => true,    // can seelect dates in other months
                                'changeYear' => true,           // can change year
                                'changeMonth' => true,          // can change month
                                'yearRange' => '1900:2099',     // range of year
                                'minDate' => '1900-01-01',      // minimum date
                                'maxDate' => '2099-12-31',      // maximum date
                                'showButtonPanel' => true,      // show button panel
                              // 'showSecond'=>true,
                                'showMinute'=>false,
                                'showHour'=>false,
                               'showTime'=>false,
                               ),                     // jquery plugin options
                       //    'htmlOptions'=>array('readonly'=>true) // HTML options
                   ));                             
                ?> 
            </div>
       </div>
        
        <div class="row span8">
            <div class="span4">
            <?php echo $form->textFieldRow($model, 'email_usuario', array( 'class' => 'span4')); ?>
            <?php echo $form->error($model, 'email_usuario'); ?>
            </div>
            <div class="span3">
            <?php echo $form->textFieldRow($model, 'usuarioad'); ?>
            <?php echo $form->error($model, 'usuarioad'); ?>
            </div>     
        </div>
        
        <div class="row span8">
            <div class="span2">
            <?php echo $form->textFieldRow($model, 'ramal_usuario', array('size' => 4, 'maxlength' => 4, 'style' => 'width: 100px')); ?>
            <?php echo $form->error($model, 'ramal_usuario'); ?>
            </div>
            <div class="span2" style="margin-left: -24px;">
            <?php echo $form->labelEx($model, 'cel_usuario'); ?>
            <?php
            $this->widget('CMaskedTextField', array(
                'model' => $model,
                'attribute' => 'cel_usuario',
                'mask' => '(99) 9999-9999',
                'htmlOptions' => array('maxlength' => 10, 'style' => 'width: 210px')
            ));
            ?>
            <?php echo $form->error($model, 'cel_usuario'); ?>
            </div>
            <div class="span2" style="margin-left: 84px;">
            <?php echo $form->labelEx($model, 'tel_usuario'); ?>
            <?php
            $this->widget('CMaskedTextField', array(
                'model' => $model,
                'attribute' => 'tel_usuario',
                'mask' => '(99) 9999-9999',
                'htmlOptions' => array('maxlength' => 10, 'style' => 'width: 210px')
            ));
            ?>
            <?php echo $form->error($model, 'tel_usuario'); ?>
            </div>
        </div>
        
        <div class="row span8">
            <div class="row span4">
                <?php echo $form->textFieldRow($model, 'home_usuario', array('class' => 'span4')); ?>
                <?php echo $form->error($model, 'home_usuario'); ?>
            </div>
            <div class="span3">
                <?php echo $form->textFieldRow($model, 'filial'); ?>
                <?php echo $form->error($model, 'filial'); ?>
            </div>  
        </div>
        
        <div class="row span8">
            <div class="row span4">
             <?php /*$form = $this->beginWidget(
                'CActiveForm',
                array(
                    'id' => 'upload-form',
                    'enableAjaxValidation' => false,
                    'htmlOptions' => array('enctype' => 'multipart/form-data'),
                )
            );
             
            echo $form->labelEx($model, 'foto_usuario');
            echo $form->fileField($model, 'foto_usuario', array('class' => 'span4', 'style'=>'370px'));
            echo $form->error($model, 'foto_usuario');
         
            $this->endWidget(); 
            */?>
               
             <div class="span3" style="margin-left:0;">
                <?php echo $form->labelEx($model, 'Setor'); ?>
                <?php $this->widget('ext.select2.ESelect2', array(
                    //'model'=>$model,
                    'attribute'=>'ds_setor',
                  //  'name'=>'selectInput',
                    'name' => 'Form[field]',
                    'data' => CHtml::listData(Setor::model()->findAll(), 'id_setor', 'ds_setor'),
                    'htmlOptions' => array(
                        'style' => 'width: 370px; height: 15px;',
                       'multiple' => 'multiple',
                    ),
                  )); ?>
                <?php echo $form->error($model, 'Setor'); ?>       

            </div>
                
            </div>
            
            <div class="span3">
                <?php echo $form->labelEx($model, 'id_cargahora'); ?>
                <?php $this->widget('ext.select2.ESelect2', array(
                    'model'=>$model,
                    'attribute'=>'id_cargahora',
                    'name'=>'selectInput',
                    'data' => CHtml::listData(CargaHoraria::model()->findAll(), 'id_grupo_horario', 'ds_grupo_horario'),
                    'htmlOptions' => array(
                        'style' => 'width: 220px; height: 34px;'
                    ),
                    'options'=>array(
                        'placeholder'=>'Selecione Carga Horária',
                    ),
                  )); ?>
                <?php echo $form->error($model, 'id_cargahora'); ?>
            </div>

    </div><!-- END MODAL-BODY -->
</fieldset>


<div class="modal-footer">
    <!-- BOTÃO CRIAR/SALVAR USUARIO -->
      
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'type' => 'primary',
        'buttonType' => 'submit',
        'label' => $model->isNewRecord ? Yii::t('main','helper.create') : Yii::t('main','helper.save'),
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