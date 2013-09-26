<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

include_once '_form.php';

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Usuario', 'url'=>array('index')),
	array('label'=>'Create Usuario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Usuarios</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<div class="advanced-search">
    <?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
    <div class="search-form well" style="display:block">
    <?php $this->renderPartial('_search',array(
            'model'=>$model,
    )); ?>
    </div><!-- search-form -->
</div>



<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'usuario-grid',
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
                 array('name'=>'idUsuario', 'header'=>'ID','htmlOptions'=>array('style'=>'width: 8%')),
		'NomeUsuario',
                'UsuarioAD',
                'Status',
		//'SenhaDB',
		'Email',
		/*
		'idDominioLogon',
		'idVocalixAgent',
                'UsuarioDB',
		'Status',
		'idUsuarioSHIP',
		'idUsuarioSNETD',
		*/
                array(
                    'header'=>Yii::t('main','helper.action'), 
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    'template' => '{view}'),
	),

)); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>Yii::t('main','helper.new', array('{model}'=> get_class($model) )),
        'buttonType'=>'submit',
        'icon'=>'icon-edit',
        'type' => 'primary',
	    'htmlOptions' => array(
                'style' => 'margin-top:20px;',
                    'data-toggle' => 'modal',
                    'data-target' => '#editUsuario',
                    'class' => 'pull-right',
                    'style' => 'z-index: 1053'        
            ),
));?> 


<?php $this->widget( 'application.modules.auditTrail.widgets.portlets.ShowAuditTrail', 
        array( 'model' => $model, ) );
?>












<?php 

/*
$a = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
);

foreach ($a as $k => $v) {
    echo "\$a[$k] => $v.\n";
}

$model_ids = array(array($model->idUsuario, 'Title'));
foreach($model as $id => $nomeUsuario){
    $model_ids[] = array($nomeUsuario, 'NomeUsuario');
}




$criteria=new CDbCriteria(array(
    'order'=>'stamp DESC',
    'with'=>array('Usuario'),
));

$param_id = 0;
foreach( $model_ids as $id_pair ) {
    $criteria->addCondition( '( model_id = ' . $param_id . ' AND model =' . $param_id . ' )', 'OR' );
    $criteria->params[  $param_id ] = $id_pair[0];
    $criteria->params[ $param_id ] = $id_pair[1];
    $param_id++;
}

$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'title-grid',
    'dataProvider'=>new CActiveDataProvider('AuditTrail', array(
        'criteria'=>$criteria,
        'pagination'=>array(
            'pageSize'=>100,
        )
    )),
    'columns'=>array(
        array(
            'name' => 'Author',
            'value' => '$data->user ? $data->user->email : ""'
        ),
        'model',
        'model_id',
        'action',
        array(
            'name' => 'field',
            'value' => '$data->getParent()->getAttributeLabel($data->field)'
        ),
        'old_value',
        'new_value',
        array(
            'name' => 'Date Changed',
            'value' => 'date("d-m-Y H:i:s", strtotime($data->stamp))'
        )
    ),
)); */ ?>