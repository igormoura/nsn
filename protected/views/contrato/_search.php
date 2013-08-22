<?php
/* @var $this ContratoController */
/* @var $model Contrato */
/* @var $form CActiveForm */
?>
  
<div class="wide form">
    
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
        'id'=>'searchForm',
        'type'=>'search',
    )); ?>
    
    <div class="row">
        <div class="span2">
            <?php echo $form->label($model,'Nº Contrato'); ?>
            <?php echo $form->textFieldRow($model,'NoContrato',array('style'=>'width:207px')); ?>
            
            <?php /*echo $form->label($model->Cliente->NomeCliente, 'NomeCliente');*/ ?>
            <?php /*echo $form->textFieldRow($model->Cliente->NomeCliente, 'NomeCliente', array('class' => 'span7'))*/ ?>
  
            <?php echo $form->dateRangeRow($model, 'DataInicioContr',
                array('prepend'=>'<i class="icon-calendar"></i>',
                      'style'=>'width:180px', 
                      'options' => array('callback'=>'js:function(start, end){console.log(start.toString("MMMM d, yyyy") + " - " + end.toString("MMMM d, yyyy"));}')
                )); ?>
            <?php echo $form->dropDownListRow($model, 'Localizacao',
               array('Selecione Localização'=>Contrato::model()->OptionsLocalizacao(),
            )); ?>
            

            <?php echo $form->dropDownListRow($model, 'Empresa',
               array('Selecione Empresa'=>Contrato::model()->NomeEmpresa(), )
            ); ?>
            

            <?php echo $form->label($model,'DiaVencimento'); ?>
             <?php echo $form->datepickerRow($model, 'DiaVencimento',
            array('prepend'=>'<i class="icon-calendar"></i>','style'=>'width:180px')); ?>

            </div>
        </div>
           
        <?php $this->widget('bootstrap.widgets.TbButton', 
            array(
                'buttonType'=>'submit', 
                'label'=>'Buscar',
                'type' => 'primary',
                'htmlOptions' => array(
                    'style'=>'margin-top:10px'),
        )); ?>
    
    
    <?php $this->endWidget(); ?>

</div><!-- search-form -->

<!--
    
-->