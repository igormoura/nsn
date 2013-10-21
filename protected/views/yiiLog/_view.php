<?php
/* @var $this YiiLogController */
/* @var $data YiiLog */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level')); ?>:</b>
	<?php echo CHtml::encode($data->level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category')); ?>:</b>
	<?php echo CHtml::encode($data->category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logtime')); ?>:</b>
	<?php echo CHtml::encode($data->logtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IP_User')); ?>:</b>
	<?php echo CHtml::encode($data->IP_User); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_name')); ?>:</b>
	<?php echo CHtml::encode($data->user_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_URL')); ?>:</b>
	<?php echo CHtml::encode($data->request_URL); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('message')); ?>:</b>
	<?php echo CHtml::encode($data->message); ?>
	<br />

	*/ ?>

</div>