<?php
/* @var $this SetorController */
/* @var $model Setor */
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
            <?php echo $form->label($model,'id_setor'); ?>
            <?php echo $form->textField($model,'id_setor'); ?>


            <?php echo $form->label($model,'ds_setor'); ?>
            <?php echo $form->textField($model,'ds_setor',array('size'=>60,'maxlength'=>200)); ?>

            <?php echo $form->dropDownListRow($model, 'ativo',
               array('Selecione Status'=>Setor::model()->status())
            ); ?>
        </div>
    </div>
            
    <?php $this->widget('bootstrap.widgets.TbButton', 
       array(
           'buttonType'=>'submit', 
           'label'=>'Buscar',
           'type' => 'primary',
           'htmlOptions' => array('style'=>'margin-top:10px'),
   )); ?>       


<?php $this->endWidget(); ?>

</div><!-- search-form -->