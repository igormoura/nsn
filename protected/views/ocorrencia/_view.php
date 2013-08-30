<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'Ocorrencia-grid',
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
        'dataProvider' => new CArrayDataProvider(
            $model->Contrato->Ocorrencia, 
            array(
                'keyField'=>'DataOcorrencia',
                'sort'=>array('defaultOrder'=>'DataOcorrencia ASC')
            )),
    
        'columns' =>  array_merge(array(
            array(
                'name' => Yii::t('main', 'ocorrencia.NoOcorrencia'),
                'value' => '$data->NoOcorrencia',
            ),
           array(
                'name' => Yii::t('main', 'ocorrencia.DataOcorrencia'),
                'value' => '$data->DataOcorrencia', 
                'value'=>'date("d/m/Y",strtotime($data->DataOcorrencia))',
            ),
            array(
                'name' => Yii::t('main', 'ocorrencia.NomeContactado'),
                'value' => '$data->NomeContactado', 
            ),
            array(
                'name' => Yii::t('main', 'ocorrencia.Ocorrencia'),
                'value' => '$data->Ocorrencia', 
            ),
            array(
                'name' => Yii::t('main', 'ocorrencia.StatusOcorrencia'),
                'value' => '$data->StatusOcorrencia', 
            ),
            array(
                'name' => Yii::t('main', 'ocorrencia.NomeUsuario'),
                'value' => '$data->NomeUsuario', 
            ),
        )),    
    
   
)); ?>
    