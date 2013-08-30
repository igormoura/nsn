<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'cobrAdic-grid',
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
        'dataProvider' => new CArrayDataProvider(
            $model->Contrato->CobrAdic, 
            array(
                'keyField'=>'Seq',
                'sort'=>array('defaultOrder'=>'Vencimento DESC')
            )),
    
        'columns' =>  array_merge(array(
            array(
                'name' => Yii::t('main', 'cobrAdic.Seq'),
                'value' => '$data->Seq',
            ),
           array(
                'name' => Yii::t('main', 'cobrAdic.NoContrato'),
                'value' => '$data->NoContrato', 
            ),
            array(
                'name' => Yii::t('main', 'cobrAdic.TipoCobrAdic'),
                'value' => '$data->DescrTipo->DescrTipo', 
            ),
            array(
                'name' => Yii::t('main', 'cobrAdic.Historico'),
                'value' => '$data->Historico', 
            ),
            array(
                'name' => Yii::t('main', 'cobrAdic.Valor'),
                'value' => '$data->Valor', 
            ),
            array(
                'name' => Yii::t('main', 'cobrAdic.FreqCobr'),
                'value' => '$data->FreqCobr', 
            ),
            array(
                'name'=>Yii::t('main', 'cobrAdic.Vencimento'),
                'htmlOptions'=>array('style'=>'width: 12%'),
                'value'=>'date("d/m/Y",strtotime($data->Vencimento))',
             ),
        )),    
    
   
)); ?>
    