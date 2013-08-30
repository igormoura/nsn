<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'id'=>'duplicatas-grid',
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
        'dataProvider' => new CArrayDataProvider(
            $model->Duplicatas, 
            array(
                'keyField'=>'NumeroDup',
                'sort'=>array('defaultOrder'=>'DataVencDup DESC'))
            ),
    
        'columns' => array_merge(array(
            array(
                'class'=>'bootstrap.widgets.TbRelationalColumn',
                'name' => Yii::t('main', 'duplicatas.NumeroDup'),
                'url' => $this->createUrl('cliente/relational'),
                'value' => '$data->NumeroDup', 
                'afterAjaxUpdate'=>'js:function(tr,rowid,data){ console.log(rowid); }',
            ),
            array(
                'name' => Yii::t('main', 'duplicatas.NumeroLote'),
                'value' => '$data->NumeroLote', 
            ),
            array(
                'name'=>Yii::t('main', 'duplicatas.DataEmisDup'),
                'htmlOptions'=>array('style'=>'width: 12%'),
                'value'=>'date("d/m/Y",strtotime($data->DataEmisDup))',
             ),
             array(
                'name'=>Yii::t('main', 'duplicatas.DataVencDup'),
                'htmlOptions'=>array('style'=>'width: 12%'),
                'value'=>'date("d/m/Y",strtotime($data->DataVencDup))',
             ),
             array(
                'name'=>Yii::t('main', 'duplicatas.DataEfetivacaoPagam'),
                'htmlOptions'=>array('style'=>'width: 12%'),
                'value'=>'date("d/m/Y",strtotime($data->DataEfetivacaoPagam))',
             ),
            array(
                'name' => Yii::t('main', 'duplicatas.BaixaDup'),
                'value' => '$data->BaixaDup', 
            ),
            array(
                'name' => Yii::t('main', 'duplicatas.FormaPaga'),
                'value' => '$data->FormaPaga', 
            ),
            array(
                'name' => Yii::t('main', 'duplicatas.ValorDup'),
                'value' => '$data->ValorDup', 
            )
        )),    
    
   
)); ?>
