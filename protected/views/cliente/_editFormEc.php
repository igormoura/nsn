<?php
/* @var $this ContratoController */
/* @var $model Contrato */
/* @var $form CActiveForm */
?>
<style>  
    .modal-backdrop-editEC {
        z-index: 1050;
        opacity: .6;
        filter: alpha(opacity=80);
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1050;
        background-color: #000;
    }
</style>

<?php $this->beginWidget('bootstrap.widgets.TbModal', 
    array('id' => 'editClienteEc', 
      'htmlOptions' => array(
          'style' =>
             'width: 625px;
              margin-left: -302px;
              overflow: hidden;
              z-index: 1051;
              top: 27%;'
          )
 )); ?>



<?php
/** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'EditEc',
        ));
?>

<fieldset>
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h4>Editar Endereço Cobrança</h4>
    </div>

    <div class="modal-body">
        <p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo $form->errorSummary($model); ?>

        <div class="row span8">    
            <div class="span6">
                <?php echo $form->textFieldRow($model, 'ECEndereco', array('style'=>'width: 495px;')) ?>
                <?php echo $form->error($model, 'Endereco'); ?>
            </div>
            <div class="span3">
                <?php echo $form->textFieldRow($model, 'ECEstado', array('class' => 'span3')) ?>
                <?php echo $form->error($model, 'ECEstado'); ?>
            </div>
            <div class="span3">
                <?php echo $form->textFieldRow($model, 'ECCidade', array('class' => 'span3')) ?>
                <?php echo $form->error($model, 'ECCidade'); ?>
            </div>
            <div class="span3">
                <?php echo $form->textFieldRow($model, 'ECBairro', array('class' => 'span3')) ?>
                <?php echo $form->error($model, 'ECBairro'); ?>
            </div> 
            <div class="span3">
                <?php echo $form->labelEx($model, 'ECCEP'); ?>
                <?php
                $this->widget('CMaskedTextField', array(
                    'model' => $model,
                    'attribute' => 'ECCEP',
                    'mask' => '99.999-999',
                    'htmlOptions' => array('size' => 10)
                ));
                ?>
                <?php echo $form->error($model, 'ECCEP'); ?>
            </div>
        </div>

    </div>
</fieldset>

<div class="modal-footer">
    <!-- BOTÃO DE EDIÇÃO DO ENDEREÇO DE COBRANÇA -->
    <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'type' => 'primary',
            'buttonType' => 'submit',
            //'url' => '#',
            'label' => $model->isNewRecord ? 'Criar' : 'Salvar',
        ));
    ?>
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'label' => 'Cancelar',
        'url' => '#',
        'htmlOptions' => array(
            'data-dismiss' => 'modal'
            ),
    ));
    ?>
</div>

<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>

