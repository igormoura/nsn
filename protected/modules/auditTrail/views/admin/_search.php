<style>
.advanced-search {
    float: right;
    margin-right: 145px;
    margin-top: -3px;
}
    
</style>

<div class="wide form">


<?php /** @var TbActiveForm $form */
$form = $this->beginWidget(
    'bootstrap.widgets.TbActiveForm',
    array(
        'id' => 'searchForm-auditTrail',
    )
); ?>
  

<?php echo $form->label($model, Yii::t('main','audit.model')) ?>
<?php echo $form->textField($model,'model',array('size'=>60,'maxlength'=>255)); ?>

<?php echo $form->label($model, Yii::t('main','audit.action')); ?>
<?php echo $form->textField($model,'action',array('size'=>20,'maxlength'=>20)); ?>

<?php echo $form->label($model, Yii::t('main','audit.field')); ?>
<?php echo $form->textField($model,'field',array('size'=>60,'maxlength'=>64)); ?>


<?php echo $form->dateRangeRow(
    $model,
    'stamp',
    array(
        'prepend' => '<i class="icon-calendar"></i>',
        //'options' => array('callback' => 'js:function(start, end){console.log(start.toString("yyyy-MM-dd") + " - " + end.toString("yyyy-MM-dd"));}'),
        //'options' => array('callback' => "js:function(start, end){ $('#AuditTrail_stamp').val(start.toString('yyyy/MM/dd') + ' - ' + end.toString('yyyy/MM/dd'));}"),
        'options' => array('format' => 'dd/MM/yyyy'),
        'style'=>'width: 177px',
    )
); ?>
    
<?php echo $form->label($model, Yii::t('main','audit.user_id')); ?>
<?php echo $form->textField($model,'user_id'); ?>

<?php echo $form->label($model, Yii::t('main','audit.model_id')); ?>
<?php echo $form->textField($model,'model_id'); ?>
    
<?php echo $form->label($model, Yii::t('main','audit.old_value')); ?>
<?php echo $form->textArea($model,'old_value',array('rows'=>3, 'cols'=>50)); ?>

<?php echo $form->label($model, Yii::t('main','audit.new_value')); ?>
<?php echo $form->textArea($model,'new_value',array('rows'=>3, 'cols'=>50)); ?>

<div style="margin-top: 10px;">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Search')); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->