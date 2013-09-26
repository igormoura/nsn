<?php $this->widget('zii.widgets.jui.CJuiAccordion', array(
	'panels'=>array(
		'Cadastro'=>'teste',
		'Relatórios'=>'content for panel 2',
		// panel 3 contains the content rendered by a partial view
		// 'panel 3'=>$this->renderPartial('_partial',null,true),
	),
	// additional javascript options for the accordion plugin
	'options'=>array(
		'animated'=>'bounceslide',
	),
)); ?>


<div id='teste01'></div>

<?php $this->menu=array(
	array('label'=>'List Cliente', 'url'=>array('index')),
	array('label'=>'Create Cliente', 'url'=>array('create')),
//	array('label'=>'Update Cliente', 'url'=>array('update', 'id'=>$model->NoCliente)),
//	array('label'=>'Delete Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NoCliente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cliente', 'url'=>array('admin')),
)?>