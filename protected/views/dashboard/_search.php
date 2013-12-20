<?php
/* @var $this DashboardController */
/* @var $model Dashboard */
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
                <?php echo $form->dateRangeRow(
                    $model,
                    'dataGrafico',
                    array(
                        'prepend' => '<i class="icon-calendar"></i>',
                        'options' => array('format' => 'dd/MM/yyyy'),
                        'style'=>'width: 177px',
                    )); 
                ?>
                <?php echo $form->error($model,'dataGrafico'); ?>
                
                <div id="dashboard-condominioPredial" style="margin-top: 10px;">
                    <?php echo $form->dropDownListRow($model,
                        'condominioPredial',                
                        array('Escolha o condomínio' => $model->listCondominios()),
                        array('style' => 'width: 220px'));?>
                    <?php echo $form->error($model,'condominioPredial'); ?>
               </div>
                
                <div id="dashboard-totalChart">
                    <?php echo CHtml::activeCheckBox($model,'totalChart', array('style'=>'margin-top: -3px; margin-right: 5px;')); ?>
                    <?php echo CHtml::activeLabel($model, Yii::t('main','dashboard.totalChart'), array('style'=>'margin:15px 0')); ?>
                </div>
                
                <div id="dashboard-corporativo" class="hide" style="margin-bottom: 10px;">
                    <?php echo $form->dropDownListRow($model, 
                            'corporativo',
                            array('Corporativo' => $model->ocorrenciaCorporativa()), 
                            array('style' => 'width: 220px'))?>
                    <?php echo $form->error($model,'corporativo'); ?>
                </div>
                
                <div id="dashboard-sizeChart" style="margin-bottom: 10px;">
                    <?php echo $form->label($model, Yii::t('main','dashboard.sizeChart')); ?>
                    <?php echo $form->textFieldRow($model, 'sizeChart'); ?>
                </div>
                
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
    '$("#Dashboard_totalChart" ).click(function() {
        if($("#Dashboard_totalChart").is(":checked") == true){
           $("#Dashboard_sizeChart").attr("disabled", "disabled")
        }else{
           $("#Dashboard_sizeChart").removeAttr("disabled", "disabled")
        };
    });'
);?>

<?php Yii::app()->clientScript->registerScript(
    'hide-dashboard-corporativo',
    '$( document ).ready(function() {
        if ($("#dashboard-ocorrencias").length){
          $("#dashboard-corporativo").removeAttr("class", "hide");
          $("#dashboard-condominioPredial").addClass("hide");
     }});'
);?>

<?php Yii::app()->clientScript->registerScript(
    'hide-dashboard-condominioPredial',
    '$(document).ready(function() {
       if(($("#dashboard-cancelamento").length) || ($("#dashboard-vendas").length)){
           $("#dashboard-condominioPredial").addClass("hide");
       }
    });'
);?>

