<?php include_once '_editFormEc.php' ?>
<?php include_once '_editForm.php' ?>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
            'data'=>$model,
            'attributes'=>array(
		array(
                    'label'=> Yii::t('main', 'cliente.NoCliente'),
                    'value'=>$model->NoCliente,
                ),
                array(
                    'label'=> Yii::t('main', 'cliente.NomeCliente'),
                    'value'=>$model->NomeCliente,
                ),
                array(
                    'label'=> Yii::t('main', 'cliente.Endereco'),
                    'value'=>$model->Endereco,
                ),
                array(
                    'label'=> Yii::t('main', 'cliente.Contato'),
                    'value'=>$model->Contato,
                     'visible'=>$model->Contato == null || '' ? false : true,
                ),
                array(
                      'label'=> Yii::t('main', 'cliente.Pager'),
                    'value'=>$model->Pager,
                    'visible'=>$model->Pager == null || '' ? false : true,
                ),
                array(
                    'label'=> Yii::t('main', 'cliente.FoneResidencia'),
                    //'value'=>Yii::app()->numberFormatter->formatCurrency($model->FoneResidencia, "EUR"),
                    'value'=>$model->FoneResidencia,
                    'visible'=>$model->FoneResidencia == null ? false : true,
                ),
                array(
                    'label'=> Yii::t('main', 'cliente.FoneComerical'),
                    'value'=>$model->FoneComerical,
                    'visible'=>$model->FoneComerical == null ? false : true,  
                ),
                array(
                    'label'=> Yii::t('main', 'cliente.Celular'),
                    'value'=>$model->Celular,
                    'visible'=>$model->Celular == null ? false : true,
                ),
                array(
                    'label'=> Yii::t('main', 'cliente.FAX'),
                    'value'=>$model->FAX,
                    'visible'=>$model->FAX == null ? false : true,
                    
                ),
                array(
                    'label'=> Yii::t('main', 'cliente.Telex'),
                    'value'=>$model->Telex,
                    'visible'=>$model->Telex == null ? false : true,
                ),
                array(
                    'label'=> Yii::t('main', 'cliente.PF_PJ'),
                    'value'=>$model->PF_PJ,
                    'visible'=>$model->PF_PJ == null ? false : true,
                ),
                array(
                     'label'=> Yii::t('main', 'cliente.CGF'),
                     'value'=>$model->CGF,
                     'visible'=>$model->CGF == null ? false : true,    
                ),
                array(
                    'label'=> Yii::t('main', 'cliente.CGC'),
                     'value'=>$model->CGC,
                     'visible'=>$model->CGC == null ? false : true,
                ),
                array(
                    'label'=> Yii::t('main', 'cliente.CPF'),
                     'value'=>$model->CPF,
                    'visible'=>$model->CPF == null ? false : true,
                    
                ),
                array(
                    'label'=> Yii::t('main', 'cliente.Identidade'),
                     'value'=>$model->Identidade,
                    'visible'=>$model->Identidade == null ? false : true,
                ),
                array(
                    'label'=> Yii::t('main', 'cliente.EMail'),
                    'value'=>$model->EMail,
                    'visible'=>$model->EMail == null || '' ? false : true,
                ),
                array(
                    'label'=> Yii::t('main', 'cliente.EmailCobr'),
                    'value'=>$model->EmailCobr,
                    'visible'=>$model->EmailCobr == null || '' ? false : true,
                ),
            
                /*Endereço Cobrança*/       
          
        )
   ));
            
?>

<?php $collapse = $this->beginWidget('bootstrap.widgets.TbCollapse');?>
<div class="accordion-group in">
    <div class="accordion-heading in">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
            Endereço de Cobrança <i class="icon-chevron-down"></i>
        </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse">
        <div class="accordion-inner">
          <?php $this->widget('zii.widgets.CDetailView', array(
              'data'=>$model,
              'attributes'=>array(
                   array(
                        'label'=> Yii::t('main', 'cliente.ECNomeCliente'),
                         'value'=>$model->ECNomeCliente,
                       'visible'=>$model->ECNomeCliente == null || '' ? false : true,
                        ),
                        array(
                            'label'=> Yii::t('main', 'cliente.ECEndereco'),
                             'value'=>$model->ECEndereco,
                            'visible'=>$model->ECEndereco == null || '' ? false : true,
                        ),
                        array(
                            'label'=> Yii::t('main', 'cliente.ECBairro'),
                             'value'=>$model->ECBairro,
                            'visible'=>$model->ECBairro == null || '' ? false : true,
                        ),
                        array(
                            'label'=> Yii::t('main', 'cliente.ECCidade'),
                             'value'=>$model->ECCidade,
                            'visible'=>$model->ECCidade == null || '' ? false : true,
                        ),
                        array(
                            'label'=> Yii::t('main', 'cliente.ECEstado'),
                            'value'=>$model->ECEstado,
                            'visible'=>$model->ECEstado == null || '' ? false : true,
                        ),
                        array(
                           'label'=> Yii::t('main', 'cliente.Cep'),
                            'value'=>$model->ECCEP,
                            'visible'=>$model->ECCEP == null || '' ? false : true,
                        ),
                  )
              )
            )?>
                
        </div>
    </div>
</div>
<?php $this->endWidget();?>


<?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Editar',
        'buttonType'=>'submit',
        'icon'=>'icon-edit',
	'htmlOptions' => array(
		'data-toggle' => 'modal',
		'data-target' => '#editCliente',
                'class' => 'pull-right',
                'style' => 'z-index: 1053'
                
	),
));?> 
