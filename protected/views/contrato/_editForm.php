<?php
/* @var $this ContratoController */
/* @var $model Contrato */
/* @var $form CActiveForm */
?>

<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id' => 'editContrato', 'htmlOptions' => array('style' => 'width: 900px; margin-left: -457px; overflow:hidden;'))); ?>

<?php /** @var BootActiveForm $form */
	$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id'=>'verticalForm',
	)); ?>
 
<fieldset>
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h4>Contrato</h4>
    </div>
 
    <div class="modal-body" style="max-height: 600px;">
        
        <p class="note"><?php echo Yii::t('main','helper.fieldsRequired') ?></p>

	<?php echo $form->errorSummary($model); ?>
        
        <div class="row span9" style="margin-left: 0px;">
            
            <div class="span3">
                    <?php echo $form->textFieldRow($model->Contrato, 'NoContrato', array('disabled'=>true),array('class'=>'span3')); ?>
                    <?php echo $form->error($model->Contrato,'NoContrato'); ?>

                    <?php echo $form->datepickerRow(
                            $model->Contrato, 'DataInicioContr', array('disabled'=>true),
                                array('prepend'=>'<i class="icon-calendar"></i>'),
                                array('htmlOptions'=>
                                    array('style' => ' z-index:1051'),
                            ));
                    ?>
                    <?php echo $form->error($model->Contrato,'DataInicioContr'); ?>

                    <?php echo $form->textFieldRow($model->Contrato, 'Matricula',array('disabled'=>true), array('class'=>'span3')); ?>
                    <?php echo $form->error($model->Contrato,'Matricula');?> 
                
                    <?php echo $form->textFieldRow($model->Contrato, 'LoginOriginal', array('class'=>'span3', 'style' => 'width: 205px')); ?>
                    <?php echo $form->error($model->Contrato,'LoginOriginal'); ?>

                    <?php echo $form->dropDownListRow($model->Contrato, 'PrimContat',
                        array('Primeiro Contato'=>Contrato::model()->primeiroContato(),
                     )); ?>
            </div>

            <div class="span3" style="margin-left: 15px">
                    <?php echo $form->datepickerRow(
                            $model->Contrato, 'DataDigitacao',
                            array('prepend'=>'<i class="icon-calendar"></i>', 'style' => 'width: 180px')
                            );
                    ?>
                    
                   <?php echo $form->textFieldRow($model->Contrato, 'limiteemail', array('class'=>'span3', 'style' => 'width: 206px')); ?>
                   <?php echo $form->error($model->Contrato,'limiteemail'); ?>

                   <?php echo $form->datepickerRow(
                        $model->Contrato, 'ContrAtualizado',
                        array('prepend'=>'<i class="icon-calendar"></i>', 'style' => 'width: 180px')
                        );
                    ?>

                    <?php echo $form->datepickerRow(
                            $model->Contrato, 'DataCancContr',
                            array('prepend'=>'<i class="icon-calendar"></i>','style' => 'width: 180px')
                            );
                    ?>

                    <?php echo $form->dropDownListRow($model->Contrato,'CodigoMotivoCanc', 
                               CHtml::listData(MotivoCancelamento::model()->findAll(
                                       array('order' => 'DescrMotivo ASC')), 'CodigoMotivoCanc', 'DescrMotivo'), 
                               array('empty'=>'Motivo de Cancelamento')) ?>
                    <?php echo $form->error($model->Contrato,'CodigoMotivoCanc'); ?>
        
            </div>

            <div class="span3"  style="margin-left: 15px">
                <?php echo $form->dropDownListRow($model->Contrato, 'DiaVencimento',
                    array('Selecione Vencimento'=>Contrato::model()->DiaVencimento(),
                 )); ?>
                
                <?php echo $form->dropDownListRow($model->Contrato,'CodigoTipoCobr', 
                    CHtml::listData(TipoCobranca::model()->findAll(
                            array('order' => 'DescrTipoCobr ASC')), 'CodigoTipoCobr', 'DescrTipoCobr'), 
                    array('empty'=>'Selecione TipoCobranca')) ?>
                <?php echo $form->error($model->Contrato,'CodigoTipoCobr'); ?>


                <?php echo $form->dropDownListRow($model->Contrato,'CodigoDistr', 
                        CHtml::listData(Distribuidor::model()->findAll(
                                array('order' => 'NomeDistr ASC')), 'CodigoDistr', 'NomeDistr'), 
                        array('empty'=>'Selecione Distribuidor')) ?>
                <?php echo $form->error($model->Contrato,'CodigoDistr'); ?>


                <?php echo $form->dropDownListRow($model->Contrato, 'Fil',
                   array('Selecione Localização'=>Contrato::model()->locFil(),
                )); ?>
                <?php echo $form->error($model->Contrato,'Localizacao'); ?>
                

                <?php echo $form->dropDownListRow($model->Contrato, 'Empresa',
                    array('Selecione Empresa'=>Contrato::model()->NomeEmpresa(),
                 )); ?> 
            </div>

            <div class="span8">
             <?php echo $form->html5EditorRow($model->Contrato, 'Comentario', 
                   array('class'=>'span8', 
                         'rows'=>5, 
                         'options'=>array('color'=>true),
                         'style' => 'width: 780px',
                    )); ?>
            </div>
        </div>

    </div>
 </fieldset>

    <div class="modal-footer">
        <!-- BOTÃO DE EDIÇÃO DO CLIENTE -->
        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'type' => 'primary',
            'buttonType' => 'submit',
            'label' => $model->isNewRecord ? 'Criar' : 'Salvar',
        ));?>

        <?php $this->widget('bootstrap.widgets.TbButton', array(
        	'label' => 'Cancelar',
        	'url' => '#',
        	'htmlOptions' => array('data-dismiss' => 'modal'),
    	)); ?>
    </div>

    <?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>

