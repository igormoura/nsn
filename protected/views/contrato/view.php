<?php
/* @var $this ContratoController */
/* @var $model Contrato */

include '/_editForm.php';

$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	$model->NoContrato,
);

$this->menu=array(
	array('label'=>'Create Contrato', 
              'url'=>'#',
              'htmlOptions' => array(
		'data-toggle' => 'modal',
		'data-target' => '#myModal',
            )),
	array('label'=>'Update Contrato', 'url'=>array('update', 'id'=>$model->NoContrato)),
	array('label'=>'Delete Contrato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NoContrato),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contrato', 'url'=>array('admin')),
);
?>


<h2><?php echo $model->Cliente->NomeCliente; ?></h2>


<?php $this->widget('bootstrap.widgets.TbTabs', array(
        'type' => 'tabs',
	'tabs' => array(
		array(
                      'label' =>'Cliente',
                      'content' => $this->renderPartial('tabs/_viewCliente',array('model'=>$model),true),      
                ),
                array(
                      'label' =>'Contrato',
                      'content' => $this->renderPartial('contrato/_viewContrato',array('model'=>$model),true),   
                      
                    ),
            
		array(
			'label'=>'Conta Corrente',
			'content' => $this->renderPartial('../duplicatas/_viewDuplicatas',array('model'=>$model),true),
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


