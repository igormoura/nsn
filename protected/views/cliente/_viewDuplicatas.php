<div class="visao-geral">
    
<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'contrato-grid',
       //'headerOffset' => 51,
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
	'dataProvider'=>$model->Duplicatas,
        //'filter' => $model,
	'columns'=>array(
            /*array(
                'name' => 'Contrato.NoContrato',
               // 'value' => '$data->NumeroDup', 
                //'value'=> array($model->Duplicatas, 'NumeroDup')
                //'value'=>'$data->NumeroDup',
                //'value'=> $model->numeroDup(),
            ),*/
            array(
                'name' => 'NumeroDup',
                'value' => '$data->NumeroDup', 
            ),
            array(
                'name' => 'NumeroLote',
                'value' => '$data->NumeroLote', 
            ),
            array(
                'name' => 'BaixaDup',
                'value' => '$data->BaixaDup', 
            ),
            array(
                'name' => 'FormaPaga',
                'value' => '$data->FormaPaga', 
            ),
            array(
                'name' => 'ValorDup',
                'value' => '$data->ValorDup', 
            ), 
            /*array(
                'name'=>'DataEmisDup','htmlOptions'=>array('style'=>'width: 12%'),
                'value'=>'date("d/m/Y",strtotime($data->DataEmisDup))',
             ),
             array(
                'name'=>'DataVencDup','htmlOptions'=>array('style'=>'width: 12%'),
                'value'=>'date("d/m/Y",strtotime($data->DataVencDup))',
             ),
             array(
                'name'=>'DataEfetivacaoPagam','htmlOptions'=>array('style'=>'width: 12%'),
                'value'=>'date("d/m/Y",strtotime($data->DataEfetivacaoPagam))',
             ),*/

             array('class'=>'bootstrap.widgets.TbButtonColumn',
                 'template' => '{view}'),
     ),
)); ?>
    
</div>