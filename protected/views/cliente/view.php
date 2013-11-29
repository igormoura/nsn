
<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	Yii::t('main', 'contrato.title')=>array('index'),
	$model->NoCliente,
);

$this->menu=array(
	//array('label'=>Yii::t('main', 'contrato.list'), 'url'=>array('index')),
	//array('label'=>Yii::t('main', 'contrato.create'), 'url'=>array('create')),
	//array('label'=>Yii::t('main', 'contrato.update'), 'url'=>array('update', 'id'=>$model->NoCliente)),
	//array('label'=>Yii::t('main', 'contrato.delete'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NoCliente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('main', 'contrato.manager'), 'url'=>array('admin')),
);?>

<h1><?php echo $model->NomeCliente; ?></h1>

<?php $this->widget('bootstrap.widgets.TbTabs', array(
    'type' => 'tabs',
	'tabs' => array(
		array(
                    'label'=>Yii::t('main','cliente.title'),
                    'content' => $this->renderPartial('_viewCliente',array('model'=>$model),true), 
                    'active' => true,
                ),
                array(
                    'label'=>Yii::t('main','contrato.title'),
                    'content' => $this->renderPartial('/contrato/_view',array('model'=>$model),true),   
                ),
		array(
                    'label'=>Yii::t('main','duplicatas.title'),
                    'content' => $this->renderPartial('/duplicatas/_view',array('model'=>$model),true),
		),
		array(
                    'label'=>Yii::t('main','cobrAdic.title'),
                    'content' => $this->renderPartial('/cobrAdic/_view',array('model'=>$model),true),
                ),
		array(
                    'label'=>Yii::t('main','netAcessos.title'),
                    'content' => $this->renderPartial('/netAcessos/_view',array('model'=>$model),true),
		),
                array(
                    'label'=>Yii::t('main','ocorrencia.title'),
                    'content' => $this->renderPartial('/ocorrencia/_view',array('model'=>$model),true),
                ),
	)
));	?>


