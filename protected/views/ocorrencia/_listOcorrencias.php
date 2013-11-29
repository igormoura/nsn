<!-- GRIDVIEW OCORRENCIAS -->
<?php $this->widget('ext.bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'ocorrencia-grid',
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
	    'dataProvider'=>$model->search(),
	    'columns'=>array(
		'NoOcorrencia',
                array(
                    'header'=>Yii::t('main','ocorrencia.DataOcorrencia'),
                    'name'=>'DataOcorrencia',
                    'value'=>'date("d/m/Y H:i:s",strtotime($data->DataOcorrencia))',
                    'htmlOptions'=>array('style'=>'width: 11%')
                ),
		'NomeContactado',
		'Ocorrencia',
                'TipoServico.nmservico',
                'TipoProblema.dsproblema',
		'NomeUsuario',
		array(
                    'header'=>Yii::t('main','helper.action'), 
                    'class'=>'bootstrap.widgets.TbButtonColumn',                
                    'viewButtonUrl'=>'Yii::app()->controller->createUrl("view",$data->primaryKey)', 
                    'updateButtonUrl'=>'Yii::app()->controller->createUrl("update",$data->primaryKey)', 
                    'deleteButtonUrl'=>'Yii::app()->controller->createUrl("delete",$data->primaryKey)',
                    'htmlOptions'=>array('style'=>'width: 51px;')
                )
           )  
    )); ?>