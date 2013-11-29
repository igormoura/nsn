<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'prospect-servicos-grid',
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'cdservico',
		//'NoProspect',
		'Servico',
		'Valor',
		'Freq',
		//'historico',
                array(
                    'header'=>Yii::t('main','prospectServicos.DtVend'),
                    'name'=>'DtVend',
                    'value'=>'date("d/m/Y H:i:s",strtotime($data->DtVend))',
                    //'htmlOptions'=>array('style'=>'width: 11%')
                ),
                'status',
		/*
		'vencimento',
		'IdVend',
		'IdIndic',
		'DtVend',
		'DtIndic',
		'status',
		'FidelidadePredial',
		'DtFidelidadePredial',
		'PlanoFidelidadePredial',
		*/
		array(
                    'header'=>Yii::t('main','helper.action'), 
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    'template' => '{view}{update}{delete}',
                    )
                ),
	)); ?>