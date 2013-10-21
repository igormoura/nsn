<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="wide form">
<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
    'type'=>'search',
     'id'=>'form-search-usuario',
)); ?>

    <div class="row">
        <div class="span2">
        <?php echo $form->label($model,'NomeUsuario'); ?>
        <?php echo $form->textField($model, 'NomeUsuario'); ?>
    
        <?php echo $form->label($model,'UsuarioDB'); ?>
        <?php echo $form->textField($model,'UsuarioDB',array('size'=>50,'maxlength'=>50)); ?>

        <?php echo $form->label($model,'UsuarioAD'); ?>
        <?php echo $form->textField($model,'UsuarioAD',array('size'=>50,'maxlength'=>50)); ?>

        <?php echo $form->label($model,'Email'); ?>
        <?php echo $form->textField($model,'Email',array('size'=>60,'maxlength'=>80)); ?>

        <?php echo $form->label($model,'Status'); ?>
        <?php echo $form->textField($model,'Status'); ?>

        <div style="margin-top: 10px;">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Search')); ?>
        </div>

        </div>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->