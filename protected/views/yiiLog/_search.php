<?php
/* @var $this YiiLogController */
/* @var $model YiiLog */
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
<?php echo $form->label($model,'user_name'); ?>
<?php echo $form->textField($model,'user_name',array('size'=>50,'maxlength'=>50)); ?>

<?php echo $form->dateRangeRow(
    $model,
    'logtime',
    array(
        'prepend' => '<i class="icon-calendar"></i>',
        'options' => array('format' => 'dd/MM/yyyy'),
        'style'=>'width: 177px',
    )
); ?>

<?php echo $form->label($model,'IP_User'); ?>
<?php echo $form->textField($model,'IP_User',array('size'=>50,'maxlength'=>50)); ?>
    
<?php echo $form->dropDownListRow($model, 'level',
    array(Yii::t('main','yiiLog.typeLevel.select')=>YiiLog::model()->typeLevel(), )
); ?>
    
<?php echo $form->label($model,'request_URL'); ?>
<?php echo $form->textArea($model,'request_URL',array('rows'=>6, 'cols'=>50)); ?>
   
            </div>
        </div>

<div style="margin-top: 10px;">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>Yii::t('main','helper.search'))); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->