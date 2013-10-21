<?php include '_editForm.php' ?>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
            'data'=>$model->Contrato,
            'attributes'=>array(
                'NoContrato',  
                array(
                    'label'=>'Nome do Cliente',
                    'value'=>$model->NomeCliente,
                    'htmlOption'=>array('class'=>'span3',array('style'=> 'width:300px')),
                ),
                'dv',
                array(
                    'label'=>'Início Contrato',
                    'value'=>date("d/m/Y",strtotime($model->Contrato->DataInicioContr)),
                 ),
                array(
                    'label'=>'Digitação',
                    'value'=>date("d/m/Y",strtotime($model->Contrato->DataDigitacao)),
                    'visible'=>$model->Contrato->DataDigitacao == null || '' ? false : true,
                 ),
                array(
                    'label'=>'Contrato Atualizado',
                    'value'=>date("d/m/Y",strtotime($model->Contrato->ContrAtualizado)),
                    'visible'=>$model->Contrato->ContrAtualizado == null || '' ? false : true,
                    ),
                array(
                    'label'=>'Motivo Cancelamento',
                    /*'value'=>$model->Contrato->MotivoCancelamento->DescrMotivo,
                    'visible'=>$model->Contrato->MotivoCancelamento->DescrMotivo == null ? false : true,*/
                ),
                array(
                    'label'=>'Cancelamento Contrato',
                    'value'=>date("d/m/Y",strtotime($model->Contrato->DataCancContr)),
                    'visible'=>$model->Contrato->DataCancContr == null || '' ? false : true,
                    ),
            /*------ Dados1 --------*/
                array(
                    'label'=>'Tipo Cobrança',
                    'value'=>$model->Contrato->TipoCobranca->DescrTipoCobr,
                    ),
                array(
                    'label'=>'Distribuidor',
                    'value'=>$model->Contrato->Distribuidor->NomeDistr,
                ),
                'Localizacao',
                array(
                    'label'=>'Matrícula',
                    'value'=>$model->Contrato->Matricula,
                    'visible'=>$model->Contrato->Matricula == null || '' ? false : true,
                ),
                array(
                    'label'=>'Primeira Cobrança',
                    'value'=>date("d/m/Y",strtotime($model->Contrato->PrimCobr)),
                    'visible'=>$model->Contrato->PrimCobr == null || '' ? false : true,
                    ),
                array(
                    'label'=>'Empresa',
                    'value'=>$model->Contrato->Empresa,
                    'visible'=>$model->Contrato->Empresa == null || '' ? false : true,
                    ),
                'limiteemail',
                'DiaVencimento',
                array(
                    'label'=>'Contrato Atualizado',
                    'value'=>date("d/m/Y",strtotime($model->Contrato->DataEntregDistrib)),
                    'visible'=>$model->Contrato->DataEntregDistrib == null || '' ? false : true,
                    ),
                array(
                    'label'=>'Login Original',
                    'value'=>$model->Contrato->LoginOriginal,
                    'visible'=>$model->Contrato->LoginOriginal == null || '' ? false : true,
                    ),
                array(
                    'label'=>'Primeiro Contato',
                    'value'=>$model->Contrato->PrimContat,
                    'visible'=>$model->Contrato->PrimContat == null || '' ? false : true,
                    ),
            /*----- Dados2 --------*/
                 array(
                    'label'=>'Comentário',
                    'value'=>$model->Contrato->Comentario,
                    'visible'=>$model->Contrato->Comentario == null || '' ? false : true,
                    ),                
            /*---------- Débito -------*/
                array(
                    'label'=>'Tipo Cartão',
                    'value'=>$model->Contrato->TipoCartCred,
                    'visible'=>$model->Contrato->TipoCartCred == null || ' ' ? false : true,
                    ),
                array(
                    'label'=>'Agência',
                    'value'=>$model->Contrato->Agencia,
                    'visible'=>$model->Contrato->Agencia == null || '' ? false : true,
                    ),
		array(
                    'label'=>'Conta',
                    'value'=>$model->Contrato->Conta,
                    'visible'=>$model->Contrato->Conta == null || '' ? false : true,
                    ),
            /*------ Crédito ----------*/
                array(
                    'label'=>'CartaoCredito',
                    'value'=>$model->Contrato->CartaoCredito,
                    'visible'=>$model->Contrato->CartaoCredito == null || ' ' ? false : true,
                    ),
                array(
                    'label'=>'Val. Cartão Crédito',
                    'value'=>$model->Contrato->ValidCartCredito,
                    'visible'=>$model->Contrato->ValidCartCredito == null || ' ' ? false : true,
                    ),
                array(
                    'label'=>'CVV',
                    'value'=>$model->Contrato->cvv,
                    'visible'=>$model->Contrato->cvv == null || ' ' ? false : true,
                    ),
	),
)); ?>


<?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Editar',
        'buttonType'=>'submit',
        'icon'=>'icon-edit',
	'htmlOptions' => array(
		'data-toggle' => 'modal',
		'data-target' => '#myModal',
                'class' => 'pull-right'
                
	),
));?>