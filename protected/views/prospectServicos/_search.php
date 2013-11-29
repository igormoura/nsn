<?php
/* @var $this ProspectServicosController */
/* @var $model ProspectServicos */
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
     <?php echo $form->dateRangeRow(
        $model,
        'DtVend',
        array(
            'prepend' => '<i class="icon-calendar"></i>',
            'options' => array('format' => 'dd/MM/yyyy'),
            'style'=>'width: 177px',
        )
     ); ?>
      <?php echo $form->error($model,'DtVend'); ?>
        
        <?php echo CHtml::activeCheckBox($model,'totalChart', array('style'=>'margin-top: -3px; margin-right: 5px;')); ?>
        <?php echo CHtml::activeLabel($model, Yii::t('main','prospectServicos.totalChart'), array('style'=>'margin:15px 0')); ?>
        
        <?php echo $form->label($model, Yii::t('main','prospectServicos.sizeChart')); ?>
        <?php echo $form->textFieldRow($model, 'sizeChart'); ?>
    </div>
</div>
    
<div>
    <?php $this->widget('bootstrap.widgets.TbButton', 
        array(
            'buttonType'=>'submit', 
            'label'=>Yii::t('main','helper.search'),
            'type' => 'primary',
            'htmlOptions' => array('style'=>'margin-top:10px'),
    )); ?>
</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->


<?php Yii::app()->clientScript->registerScript(
    'disabledSizeChart',
    '$("#ProspectServicos_totalChart" ).click(function() {
        if($("#ProspectServicos_totalChart").is(":checked") == true){
           $("#ProspectServicos_sizeChart").attr("disabled", "disabled")
        }else{
           $("#ProspectServicos_sizeChart").removeAttr("disabled", "disabled")
        };
    });'
); ?>