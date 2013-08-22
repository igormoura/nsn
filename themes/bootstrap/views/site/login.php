<?php


$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<style>
    body {background-color:  #f5f5f5;}
</style>


<div class="form form-signin">
    <h1>Login</h1>

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id'=>'verticalForm',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                    'validateOnSubmit'=>true,
            ),
    )); ?>

    <?php echo $form->textFieldRow($model, 'username', array('class'=>'span3')); ?>
    <?php echo $form->error($model,'username'); ?>

    <?php echo $form->passwordFieldRow($model, 'password', array('class'=>'span3')); ?>
    <?php echo $form->error($model,'password'); ?>

    <?php echo $form->checkboxRow($model, 'rememberMe'); ?>

    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Login')); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->
