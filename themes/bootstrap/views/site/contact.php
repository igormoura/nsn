<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form TbActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>Contact Us</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('contact'),
    )); ?>

<?php else: ?>

<p>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'contact-form',
        'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        <?php echo $form->textFieldRow($model,'email', array('prepend' => '<i class="icon-envelope"></i>', 'class'=>'span6', 'style' => 'width: 620px;')); ?>
        
        <?php echo $form->textFieldRow($model,'subject',array('size'=>60,'maxlength'=>128, 'prepend' => '<i class="icon-edit"></i>', 'class'=>'span6', 'style' => 'width: 620px;')); ?>
        
        <div class="row">
            <?php echo $form->labelEx($model,'attachment'); ?>
            <?php  $this->widget('CMultiFileUpload',
              array(
                   'model'=>$model,
                   'attribute' => 'attachment',
                   'accept'=> 'doc|docx|pdf|txt|jpg|jpeg',
                   'denied'=>'Only doc,docx,pdf and txt are allowed', 
                   'max'=>200,
                   'remove'=>'[x]',
                   'duplicate'=>'Already Selected',
                   ));?>
            <?php echo $form->error($model,'attachments'); ?>
        </div>
        

        <?php echo $form->html5EditorRow(
            $model,
            'body',
            array(
                'class' => 'span4',
                'rows' => 5,
                'height' => '200',
                'style' => 'display: block; width: 648px; min-height: 200px;',
                'options' => array('color' => true)
            )
        ); ?>


	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton',array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>'Submit',
        )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>