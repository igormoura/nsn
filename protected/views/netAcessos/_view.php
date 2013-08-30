<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'netAcessos-grid',
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
        'dataProvider' => new CArrayDataProvider(
            $model->Contrato->NetAcessos, 
            array(
                'keyField'=>'LoginUsuario',
                'sort'=>array('defaultOrder'=>'LoginUsuario ASC')
            )),
    
        'columns' =>  array_merge(array(
            array(
                'name' => Yii::t('main', 'netAcessos.LoginUsuario'),
                'value' => '$data->LoginUsuario',
            ),
           array(
                'name' => Yii::t('main', 'netAcessos.NoContrato'),
                'value' => '$data->NoContrato', 
            ),
            array(
                'name' => Yii::t('main', 'netAcessos.NomeUsuario'),
                'value' => '$data->NomeUsuario', 
            ),
            array(
                'name' => Yii::t('main', 'netAcessos.CodigoEstadoAcesso'),
                'value' => '$data->EstadoAcesso->DescrEstadoAcesso', 
            ),
            array(
                'name' => Yii::t('main', 'netAcessos.IndMailAcesso'),
                'value' => '$data->IndMailAcesso', 
            ),
            array(
                'name' => Yii::t('main', 'netAcessos.DataCancAces'),
                'value'=>'date("d/m/Y",strtotime($data->DataCancAces))',
            ),
        )),    
    
   
)); ?>
    