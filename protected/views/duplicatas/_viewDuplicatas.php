<div class="visao-geral">
    
<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'contrato-grid',
       //'headerOffset' => 51,
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
	'dataProvider'=>$model->Duplicatas,
        'filter' => $model,
	'columns'=>array(
            /*array(
                'name' => 'Contrato.NoContrato',
               // 'value' => '$data->Duplicatas->NumeroDup', 
                //'value'=> array($model->Duplicatas, 'NumeroDup')
                //'value'=>'$data->Duplicatas->NumeroDup',
                //'value'=> $model->Duplicatas->numeroDup(),
            ),*/
            array(
                'name' => 'Duplicatas.NumeroDup',
                'value' => '$data->NumeroDup', 
            ),
            array(
                'name' => 'Duplicatas.NumeroLote',
                'value' => '$data->NumeroLote', 
            ),
            array(
                'name' => 'Duplicatas.BaixaDup',
                'value' => '$data->BaixaDup', 
            ),
            array(
                'name' => 'Duplicatas.FormaPaga',
                'value' => '$data->FormaPaga', 
            ),
            array(
                'name' => 'Duplicatas.ValorDup',
                'value' => '$data->ValorDup', 
            ), 
            /*array(
                'name'=>'Duplicatas.DataEmisDup','htmlOptions'=>array('style'=>'width: 12%'),
                'value'=>'date("d/m/Y",strtotime($data->Duplicatas->DataEmisDup))',
             ),
             array(
                'name'=>'Duplicatas.DataVencDup','htmlOptions'=>array('style'=>'width: 12%'),
                'value'=>'date("d/m/Y",strtotime($data->Duplicatas->DataVencDup))',
             ),
             array(
                'name'=>'Duplicatas.DataEfetivacaoPagam','htmlOptions'=>array('style'=>'width: 12%'),
                'value'=>'date("d/m/Y",strtotime($data->Duplicatas->DataEfetivacaoPagam))',
             ),*/

             array('class'=>'bootstrap.widgets.TbButtonColumn',
                 'template' => '{view}'),
     ),
)); ?>
    
</div>