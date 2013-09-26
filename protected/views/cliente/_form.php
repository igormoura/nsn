<?php
/* @var $this ContratoController */
/* @var $model Contrato */
/* @var $form CActiveForm */
?>

<script>
    $(document).ready(function() {
       if ($('#Cliente_PF_PJ').val('F')){
        $('#pj').hide();
       }else{
        $('#pf').hide();
       };
    });
</script>


<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'verticalForm',
    'htmlOptions'=>array('class'=>'well'),
)); ?>
 
<fieldset>
       <p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo $form->errorSummary($model); ?>

        <div class="row span9" style="margin-left:-8px;">   
            <div class="span6" style="">
                <?php echo $form->textFieldRow($model, 'NomeCliente', array('class' => 'span7')) ?>
                <?php echo $form->error($model, 'NomeCliente'); ?>
            </div>
            <div class="span6">
                <?php echo $form->textFieldRow($model, 'Endereco', array('class' => 'span7')) ?>
                <?php echo $form->error($model, 'Endereco'); ?>
            </div> 
            <div class="span6">
                <?php echo $form->textFieldRow($model, 'Contato', array('class' => 'span7')) ?>
                <?php echo $form->error($model, 'Contato'); ?>
            </div>
            <div class="span3" style="margin-left: 10px;">
                <?php echo $form->textFieldRow($model, 'Pager', array('class' => 'span3')) ?>
                <?php echo $form->error($model, 'Pager'); ?>
            </div>

            <div class="span3">
                <?php
                echo $form->dropDownListRow($model, 'PF_PJ', array('Tipo Pessoa' => Cliente::model()->tipoPessoa()), array('style' => 'width: 220px')
                );
                ?>

                <div id="pj"> 
                    <?php echo $form->labelEx($model, 'CGC'); ?>
                    <?php
                    $this->widget('CMaskedTextField', array(
                        'model' => $model,
                        'attribute' => 'CGC',
                        'mask' => '99.999.999/9999-99',
                        'htmlOptions' => array('size' => 10)
                    ));
                    ?>
                    <?php echo $form->error($model, 'CGC'); ?>
                </div>

                <div id="pf">
                    <?php echo $form->labelEx($model, 'Identidade'); ?>
                    <?php
                    $this->widget('CMaskedTextField', array(
                        'model' => $model,
                        'attribute' => 'Identidade',
                        'mask' => '99.999.999-999',
                        'htmlOptions' => array('size' => 10)
                    ));
                    ?>
                    <?php echo $form->error($model, 'Identidade'); ?>

                    <?php echo $form->labelEx($model, 'CPF'); ?>
                    <?php
                    $this->widget('CMaskedTextField', array(
                        'model' => $model,
                        'attribute' => 'CPF',
                        'mask' => '999.999.999-99',
                        'htmlOptions' => array('size' => 10)
                    ));
                    ?>
                <?php echo $form->error($model, 'CPF'); ?>
                </div>
            </div>
            <div class="span3">
                <?php echo $form->labelEx($model, 'FoneResidencia'); ?>
                <?php
                $this->widget('CMaskedTextField', array(
                    'model' => $model,
                    'attribute' => 'FoneResidencia',
                    'mask' => '(99) 9999-9999',
                    'htmlOptions' => array('size' => 10)
                ));
                ?>
                <?php echo $form->error($model, 'FoneResidencia'); ?>

                <?php echo $form->labelEx($model, 'FoneComerical'); ?>
                <?php
                $this->widget('CMaskedTextField', array(
                    'model' => $model,
                    'attribute' => 'FoneComerical',
                    'mask' => '(99) 9999-9999',
                    'htmlOptions' => array('size' => 10)
                ));
                ?>
                <?php echo $form->error($model, 'FoneComerical'); ?>

                <?php echo $form->labelEx($model, 'Celular'); ?>
                <?php
                $this->widget('CMaskedTextField', array(
                    'model' => $model,
                    'attribute' => 'Celular',
                    'mask' => '(99) 9999-9999',
                    'htmlOptions' => array('size' => 10)
                ));
                ?>
                <?php echo $form->error($model, 'Celular'); ?>
            </div>

            <div class="span3">
                <?php echo $form->labelEx($model, 'FAX'); ?>
                <?php
                $this->widget('CMaskedTextField', array(
                    'model' => $model,
                    'attribute' => 'FAX',
                    'mask' => '(99) 9999-9999',
                    'htmlOptions' => array('size' => 10)
                ));
                ?>
                <?php echo $form->error($model, 'FAX'); ?>

                <?php echo $form->labelEx($model, 'Telex'); ?>
                <?php
                $this->widget('CMaskedTextField', array(
                    'model' => $model,
                    'attribute' => 'Telex',
                    'mask' => '(99) 9999-9999',
                    'htmlOptions' => array('size' => 10)
                ));
                ?>
                <?php echo $form->error($model, 'Telex'); ?>
            </div>

            <div class="span6">
                <?php echo $form->textFieldRow($model, 'EMail', array('class' => 'span7')) ?>
                <?php echo $form->error($model, 'EMail'); ?>
            </div>

            <div class="span3" style="margin-left: 10px;">
                <?php
                    echo $form->dropDownListRow($model, 
                    'EmailCobr', 
                    array('Email de Cobrança' => Cliente::model()->emailCobr()), 
                    array('style' => 'width: 220px'));
                ?>
            </div>    
        </div>
</fieldset>
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'type' => 'primary',
        'buttonType'=>'submit',
        'label' => $model->isNewRecord ? 'Criar Contrato' : 'Salvar',
    ));
    ?>
<?php $this->endWidget(); ?>


<script>
    var tipo_cliente = jQuery('#Cliente_PF_PJ');
    var select = this.value;
    tipo_cliente.change(function() {
        $('#pf, #pj').hide();
        if ($(this).val() == 'F') {
            $('#pf').show();
        }
        else {
            $('#pj').show();
        }
    });
</script>
