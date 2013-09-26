<h1><?php echo TranslateModule::t('Manage Messages')?></h1>

<?php 
$source=MessageSource::model()->findAll();
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'message-grid',
    'headerOffset' => 42,
    'fixedHeader' => true,
    'type'=>'striped bordered',
    'responsiveTable' => true,
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
            'name'=>'id',
            'filter'=>CHtml::listData($source,'id','id'),
        ),
        array(
            'name'=>'message',
            'filter'=>CHtml::listData($source,'message','message'),
        ),
        array(
            'name'=>'category',
            'filter'=>CHtml::listData($source,'category','category'),
        ),
        array(
            'name'=>'language',
            'filter'=>CHtml::listData($source,'language','language')
            // 'filter'=>CHtml::listData($model->findAll(new CDbCriteria(array('group'=>'language'))),'language','language')
        ),
        'translation',
        array(
            'header'=>Yii::t('main','helper.action'), 
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{update}{delete}',
            'updateButtonUrl'=>'Yii::app()->getController()->createUrl("update",array("id"=>$data->id,"language"=>$data->language))',
            'deleteButtonUrl'=>'Yii::app()->getController()->createUrl("delete",array("id"=>$data->id,"language"=>$data->language))',
        ),
	),
)); ?>
