<?php
/* @var $this ContratoController */
/* @var $model Contrato */
/* @var $form CActiveForm */
?>

<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id' => 'myModal', 'htmlOptions' => array('style' => 'width: 922px; margin-left: -457px; overflow:hidden;'))); ?>

<?php /** @var BootActiveForm $form */
	$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id'=>'verticalForm',
	)); ?>
 
<fieldset>
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h4>Contrato</h4>
    </div>
 
    <div class="modal-body">
        <p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <div class="row span9">
            
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
                
                    <?php echo $form->textFieldRow($model->Contrato, 'LoginOriginal', array('class'=>'span3')); ?>
                    <?php echo $form->error($model->Contrato,'LoginOriginal'); ?>

                    <?php echo $form->dropDownListRow($model->Contrato, 'PrimContat',
                        array('Primeiro Contato'=>Contrato::model()->primeiroContato(),
                     )); ?>
            </div>

            <div class="span3">
                    <?php echo $form->datepickerRow(
                            $model->Contrato, 'DataDigitacao',
                            array('prepend'=>'<i class="icon-calendar"></i>'       
                                )
                            );
                    ?>
                    
                   <?php echo $form->textFieldRow($model->Contrato, 'limiteemail', array('class'=>'span3')); ?>
                   <?php echo $form->error($model->Contrato,'limiteemail'); ?>

                   <?php echo $form->datepickerRow(
                        $model->Contrato, 'ContrAtualizado',
                        array('prepend'=>'<i class="icon-calendar"></i>')
                        );
                    ?>

                    <?php echo $form->datepickerRow(
                            $model->Contrato, 'DataCancContr',
                            array('prepend'=>'<i class="icon-calendar"></i>',
                                )
                            );
                    ?>

                    <?php echo $form->dropDownListRow($model->Contrato,'CodigoMotivoCanc', 
                               CHtml::listData(MotivoCancelamento::model()->findAll(
                                       array('order' => 'DescrMotivo ASC')), 'CodigoMotivoCanc', 'DescrMotivo'), 
                               array('empty'=>'Motivo de Cancelamento')) ?>
                    <?php echo $form->error($model->Contrato,'CodigoMotivoCanc'); ?>
        
            </div>

            <div class="span3">
                <?php echo $form->dropDownListRow($model->Contrato, 'DiaVencimento',
                    array('Selecione Dia do Vencimento'=>Contrato::model()->DiaVencimento(),
                 )); ?>
                
                <?php echo $form->dropDownListRow($model->Contrato,'TipoCobranca', 
                    CHtml::listData(TipoCobranca::model()->findAll(
                            array('order' => 'DescrTipoCobr ASC')), 'CodigoTipoCobr', 'DescrTipoCobr'), 
                    array('empty'=>'Selecione TipoCobranca')) ?>

                <?php echo $form->dropDownListRow($model->Contrato,'Distribuidor', 
                        CHtml::listData(Distribuidor::model()->findAll(
                                array('order' => 'NomeDistr ASC')), 'CodigoDistr', 'NomeDistr'), 
                        array('empty'=>'Selecione Distribuidor')) ?>

                <?php echo $form->dropDownListRow($model->Contrato, 'Localizacao',
                   array('Selecione Localização'=>Contrato::model()->OptionsLocalizacao(),
                )); ?>

                <?php echo $form->dropDownListRow($model->Contrato, 'Empresa',
                    array('Selecione Empresa'=>Contrato::model()->NomeEmpresa(),
                 )); ?> 
            </div>

            <div class="span8">
             <?php echo $form->html5EditorRow($model->Contrato, 'Comentario', 
                   array('class'=>'span8', 
                         'rows'=>5, 
                         'width'=>'600',
                         'height'=>'200', 
                         'options'=>array('color'=>true),
                       )); ?>
            </div>
        </div>

    </div>
 </fieldset>

    <div class="modal-footer">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
		'type' => 'primary',
                'buttonType'=>'submit',
		'label' => $model->Contrato->isNewRecord ? 'Criar' : 'Editar',
		'url' => '#',
		'htmlOptions' => array('data-dismiss' => 'modal'),
	)); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array(
		'label' => 'Cancelar',
		'url' => '#',
		'htmlOptions' => array('data-dismiss' => 'modal'),
	)); ?>
    </div>

    <?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>
