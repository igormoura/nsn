<?php $translate=Yii::app()->translate; ?>

<?php $form = $this->beginWidget(
    'bootstrap.widgets.TbActiveForm',
    array(
        'id' => 'verticalForm',
        'htmlOptions' => array('class' => 'span11'), // for inset effect
        
    )
);?>

<fieldset> 
	<legend><?php echo Yii::t('main','helper.languages'); ?></legend>
	<?php echo $translate->dropdown(); ?>
</fieldset>



<?php $this->endWidget(); ?>

