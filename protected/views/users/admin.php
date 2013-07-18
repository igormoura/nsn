<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),

);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php 
$client=new SoapClient('http://localhost/nsn/index.php?r=users/quote');
echo $client->getPrice('GOOGLE');
?>

<h1>Manage Users</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<div class="advanced-search">
    <?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button', 'type'=>'info')); ?>
        
    <div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
            'model'=>$model,
    )); ?>
    </div><!-- search-form -->
</div>
<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'users-grid',
        'fixedHeader' => true,
	'dataProvider'=>$model->search(),
        'type' => 'striped bordered condensed',
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'username',
		//'password',
		'phone',
                array(
                    'class' => 'bootstrap.widgets.TbEditableColumn',
                    'name' => 'email',
                    'sortable'=>true,
                    'editable' => array(
                            'url' => $this->createUrl('users/editable'),
                            'placement' => 'top',
                    )
		),
        	'status',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        //'viewButtonUrl'=>null,
                        //'updateButtonUrl'=>null,
                        //'deleteButtonUrl'=>null,
		),
	),
        'extendedSummary' => array(
            'title' => 'Expertise',
            'columns' => array(
                    'status' => array(
                            'label'=>'Total Expertise',
                            'types' => array(
                                    '1'=>array('label'=>'Enabled'),
                                    ''=>array('label'=>'Disabled'),
                            ),
                            'class'=>'TbPercentOfTypeEasyPieOperation',
                            // you can also configure how the chart looks like
                            'chartOptions' => array(
                                    'barColor' => '#333',
                                    'trackColor' => '#999',
                                    'lineWidth' => 10 ,
                                    'lineCap' => 'square'
                            )
                    )
            )
        ),
        'extendedSummaryOptions' => array(
            'class' => 'well pull-right',
            'style' => 'width:250px;'
        ),

)); ?>
