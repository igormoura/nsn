<?php
/* @var $this ContratoController */
/* @var $model Contrato */
/* @var $form CActiveForm */
?>


<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'verticalForm',
    'htmlOptions'=>array('class'=>'well'),
)); ?>

<?php echo $form->datepickerRow(
        $model, 'DataInicioContr', array('disabled'=>true),
            array('prepend'=>'<i class="icon-calendar"></i>'),
            array('htmlOptions'=>
                array('style' => ' z-index:1051'),
        ));
?>
<?php echo $form->error($model,'DataInicioContr'); ?>

<?php echo $form->textFieldRow($model, 'Matricula',array('disabled'=>true), array('class'=>'span3')); ?>
<?php echo $form->error($model,'Matricula');?> 

<?php echo $form->textFieldRow($model, 'LoginOriginal', array('class'=>'span3')); ?>
<?php echo $form->error($model,'LoginOriginal'); ?>

<?php echo $form->dropDownListRow($model, 'PrimContat',
    array('Primeiro Contato'=>Contrato::model()->primeiroContato(),
 )); ?>
 
<?php $this->endWidget(); ?>


