<?php include '_editForm.php' ?>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
            'data'=>$model->Contrato,
            'attributes'=>array(
                'NoContrato',  
                array(
                    'label'=>Yii::t('main','contrato.NomeCliente'),
                    'value'=>$model->NomeCliente,
                    'htmlOption'=>array('class'=>'span3',array('style'=> 'width:300px')),
                ),
                array(
                    'label'=>Yii::t('main','contrato.DataInicioContr'),
                    'value'=>date("d/m/Y",strtotime($model->Contrato->DataInicioContr)),
                 ),
                array(
                    'label'=>Yii::t('main','contrato.DataDigitacao'),
                    'value'=>date("d/m/Y",strtotime($model->Contrato->DataDigitacao)),
                    'visible'=>$model->Contrato->DataDigitacao == null || '' ? false : true,
                 ),
                array(
                    'label'=>Yii::t('main','contrato.DiaVencimento'),
                    'value'=>$model->Contrato->dv,
                 ),
                array(
                    'label'=>Yii::t('main','contrato.ContrAtualizado'),
                    'value'=>date("d/m/Y",strtotime($model->Contrato->ContrAtualizado)),
                    'visible'=>$model->Contrato->ContrAtualizado == null || '' ? false : true,
                    ),
                array(
                    'label'=>Yii::t('main','contrato.MotivoCancelamento'),
                    'value'=>$model->Contrato->MotivoCancelamento->DescrMotivo,
                    'visible'=>$model->Contrato->MotivoCancelamento->DescrMotivo == null ? false : true,
                ),
                array(
                    'label'=>Yii::t('main','contrato.DataCancContr'),
                    'value'=>date("d/m/Y",strtotime($model->Contrato->DataCancContr)),
                    'visible'=>$model->Contrato->DataCancContr == null || '' ? false : true,
                    ),
                array(
                    'label'=>Yii::t('main','contrato.DescrTipoCobr'),
                    'value'=>$model->Contrato->TipoCobranca->DescrTipoCobr,
                    'visible'=>$model->Contrato->TipoCobranca->DescrTipoCobr == null || '' ? false : true,
                    ),
                array(
                    'label'=>Yii::t('main','distribuidor.NomeDistr'),
                    'value'=>$model->Contrato->Distribuidor->NomeDistr,
                ),
                'Fil',
                array(
                    'label'=>Yii::t('main','contrato.PrimCobr'),
                    'value'=>date("d/m/Y",strtotime($model->Contrato->PrimCobr)),
                    'visible'=>$model->Contrato->PrimCobr == null || '' ? false : true,
                    ),
                array(
                    'label'=>Yii::t('main','contrato.Empresa'),
                    'value'=>$model->Contrato->Empresa,
                    'visible'=>$model->Contrato->Empresa == null || '' ? false : true,
                    ),
                'DiaVencimento',
                 array(
                    'label'=>Yii::t('main','contrato.Comentario'),
                    'value'=>$model->Contrato->Comentario,
                    'visible'=>$model->Contrato->Comentario == null || '' ? false : true,
                    ),                                
	),
)); ?>


<?php $collapse = $this->beginWidget('bootstrap.widgets.TbCollapse');?>
<div class="accordion-group in">
    <div class="accordion-heading in">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2">
           <?php echo Yii::t('main','cliente.DadosBancario')?> <i class="icon-chevron-down"></i>
        </a>
    </div>
    <div id="collapseOne2" class="accordion-body collapse">
        <div class="accordion-inner">
          <?php $this->widget('zii.widgets.CDetailView', array(
              'data'=>$model,
              'attributes'=>array(
                    array(
                        'label'=>Yii::t('main','contrato.TipoCartCred'),
                        'value'=>$model->Contrato->TipoCartCred,
                        'visible'=>$model->Contrato->TipoCartCred == null || ' ' ? false : true,
                    ),
                    array(
                        'label'=>Yii::t('main','contrato.Agencia'),
                        'value'=>$model->Contrato->Agencia,
                        'visible'=>$model->Contrato->Agencia == null || '' ? false : true,
                    ),
                    array(
                        'label'=>Yii::t('main','contrato.Conta'),
                        'value'=>$model->Contrato->Conta,
                        'visible'=>$model->Contrato->Conta == null || '' ? false : true,
                    ),
                    array(
                        'label'=>Yii::t('main','contrato.CartaoCredito'),
                        'value'=>$model->Contrato->CartaoCredito,
                        'visible'=>$model->Contrato->CartaoCredito == null || ' ' ? false : true,
                    ),
                    array(
                        'label'=>Yii::t('main','contrato.ValidCartCredito'),
                        'value'=>$model->Contrato->ValidCartCredito,
                        'visible'=>$model->Contrato->ValidCartCredito == null || ' ' ? false : true,
                    ),
                    array(
                        'label'=>Yii::t('main','contrato.cvv'),
                        'value'=>$model->Contrato->cvv,
                        'visible'=>$model->Contrato->cvv == null || ' ' ? false : true,
                    ),
              ),
         ))?>   
        </div>
    </div>
</div>
<?php $this->endWidget();?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>Yii::t('main','helper.edit'),
        'buttonType'=>'submit',
        'type' => '',
        'icon'=>'icon-edit',
	    'htmlOptions' => array(
        'style' => 'margin-top:20px;',
		'data-toggle' => 'modal',
		'data-target' => '#editContrato',
        'class' => 'pull-right',
                
	),
));?>