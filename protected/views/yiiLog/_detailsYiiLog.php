<div class="visao-geral">
<?php $model = YiiLog::model()->findByPk($id) ?>
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
        'data' => $model,
        'htmlOptions' => array('style' => 'border-left: none;'),
	'attributes'=>array(
		'id',
		'level',
		'category',
                array(
                    'label'=>Yii::t('main','yiiLog.logtime'),
                    'value'=>date("d/m/Y H:i:s",strtotime($model->logtime)),
                ),
		'IP_User',
		'user_name',
		'request_URL',
                array(
                    'label'=>Yii::t('main','yiiLog.message'),
                    'value'=>$model->message,
                ),
	),
)); ?>
</div>