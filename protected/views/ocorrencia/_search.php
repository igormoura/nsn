<?php
/* @var $this NetAcessosController */
/* @var $model NetAcessos */
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
                    'DataOcorrencia',
                    array(
                        'prepend' => '<i class="icon-calendar"></i>',
                        'options' => array('format' => 'dd/MM/yyyy'),
                        'style'=>'width: 177px',
                    )
                ); ?>
                 <?php echo $form->error($model,'DataOcorrencia'); ?>
                
                <?php echo $form->label($model, Yii::t('main','ocorrencia.NomeUsuario')); ?>
                <?php echo $form->textFieldRow($model,'NomeUsuario'); ?>
                
                <?php echo $form->dropDownListRow($model,'cdServico', 
                           CHtml::listData(TipoServico::model()->findAll(
                                   array('order' => 'dsservico ASC')), 'cdservico', 'dsservico'), 
                           array('empty'=>'Tipo de Servico')) ?>
                <?php echo $form->error($model,'cdServico'); ?>

                <?php echo $form->dropDownListRow($model,'StatusOcorrencia', 
                           CHtml::listData(OcorrenciaStatus::model()->findAll(
                                   array('order' => 'nmStatus ASC')), 'cdStatus', 'nmStatus'), 
                           array('empty'=>'Status')) ?>
                <?php echo $form->error($model,'StatusOcorrencia'); ?>

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
    '$("#Ocorrencia_totalChart" ).click(function() {
        if($("#Ocorrencia_totalChart").is(":checked") == true){
           $("#Ocorrencia_sizeChart").attr("disabled", "disabled")
        }else{
           $("#Ocorrencia_sizeChart").removeAttr("disabled", "disabled")
        };
    });'
); ?>