<?php include '_editForm.php' ?>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
            'data'=>$model->Contrato,
            'attributes'=>array(
                'NoContrato',  
                array(
                    'label'=>Yii::t('main','NomeCliente'),
                    'value'=>$model->NomeCliente,
                    'htmlOption'=>array('class'=>'span3',array('style'=> 'width:300px')),
                ),
                'dv',
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
                    'label'=>Yii::t('main','contrato.ContrAtualizado'),
                    'value'=>date("d/m/Y",strtotime($model->Contrato->ContrAtualizado)),
                    'visible'=>$model->Contrato->ContrAtualizado == null || '' ? false : true,
                    ),
                array(
                    'label'=>Yii::t('main','contrato.MotivoCancelamento'),
                    'value'=>$model->Contrato->CodigoMotivoCanc,
                    'visible'=>$model->Contrato->CodigoMotivoCanc == null ? false : true,
                ),
                array(
                    'label'=>Yii::t('main','contrato.DataCancContr'),
                    'value'=>date("d/m/Y",strtotime($model->Contrato->DataCancContr)),
                    'visible'=>$model->Contrato->DataCancContr == null || '' ? false : true,
                    ),
            /*------ Dados1 --------*/
                array(
                    'label'=>Yii::t('main','contrato.DescrTipoCobr'),
                    'value'=>$model->Contrato->TipoCobranca->DescrTipoCobr,
                    'visible'=>$model->Contrato->TipoCobranca->DescrTipoCobr == null || '' ? false : true,
                    ),
                array(
                    'label'=>Yii::t('main','distribuidor.NomeDistr'),
                    'value'=>$model->Contrato->Distribuidor->NomeDistr,
                ),
                //'Localizacao',
                'Fil',
                array(
                    'label'=>Yii::t('main','contrato.Matricula'),
                    'value'=>$model->Contrato->Matricula,
                    'visible'=>$model->Contrato->Matricula == null || '' ? false : true,
                ),
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
                'limiteemail',
                'DiaVencimento',
                array(
                    'label'=>Yii::t('main','contrato.DataEntregDistrib'),
                    'value'=>date("d/m/Y",strtotime($model->Contrato->DataEntregDistrib)),
                    'visible'=>$model->Contrato->DataEntregDistrib == null || '' ? false : true,
                    ),
                array(
                    'label'=>Yii::t('main','contrato.LoginOriginal'),
                    'value'=>$model->Contrato->LoginOriginal,
                    'visible'=>$model->Contrato->LoginOriginal == null || '' ? false : true,
                    ),
                array(
                    'label'=>Yii::t('main','contrato.PrimContat'),
                    'value'=>$model->Contrato->PrimContat,
                    'visible'=>$model->Contrato->PrimContat == null || '' ? false : true,
                    ),
            /*----- Dados2 --------*/
                 array(
                    'label'=>Yii::t('main','contrato.Comentario'),
                    'value'=>$model->Contrato->Comentario,
                    'visible'=>$model->Contrato->Comentario == null || '' ? false : true,
                    ),                
            /*---------- Débito -------*/
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
            /*------ Crédito ----------*/
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
)); ?>


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