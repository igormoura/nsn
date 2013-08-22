<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->NoCliente,
);

$this->menu=array(
	array('label'=>'List Cliente', 'url'=>array('index')),
	array('label'=>'Create Cliente', 'url'=>array('create')),
	array('label'=>'Update Cliente', 'url'=>array('update', 'id'=>$model->NoCliente)),
	array('label'=>'Delete Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NoCliente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cliente', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->NomeCliente; ?></h1>

<?php $this->widget('bootstrap.widgets.TbTabs', array(
        'type' => 'tabs',
	'tabs' => array(
		array(
                      'label' =>'Cliente',
                      'content' => $this->renderPartial('_viewCliente',array('model'=>$model),true),      
                ),
                array(
                      'label' =>'Contrato',
                      'content' => $this->renderPartial('/contrato/_viewContrato',array('model'=>$model),true),   
                      
                    ),
		array(
			'label'=>'Conta Corrente',
			'content' => $this->renderPartial('_viewDuplicatas',array('model'=>$model),true),
                        'active' => true,
		),
		array(
			'label'=>'Serviços',
			'url'=>'#',
			'itemOptions'=>array('class'=>''),
		),
		array(
			'label'=>'Logins',
			'url'=>'#',
			'itemOptions'=>array('class'=>''),
		),
                array(
			'label'=>'Ocorrências',
			'url'=>'#',
			'itemOptions'=>array('class'=>'disabled'),
		),
	)
));	?>


