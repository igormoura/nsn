<?php
/* @var $this ContratoController */
/* @var $model Contrato */
/* @var $form CActiveForm */
?>
  
<div class="wide form">
    
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
        'id'=>'searchForm-Assigment',
        'type'=>'search',
    )); ?>
    
    <div class="row">
        <div class="span2">

        <?php echo $form->label(Usuario::model(),'NomeUsuario'); ?>
        <?php echo $form->textFieldRow(Usuario::model(),'NomeUsuario',array('style'=>'width:207px')); ?>

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