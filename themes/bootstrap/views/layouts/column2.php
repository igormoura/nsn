<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<?php $this->renderPartial('/components/_TbNavbarModules') ?>
<?php if(isset($this->breadcrumbs)):?>
    <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
        'links'=>$this->breadcrumbs,
    )); ?><!-- breadcrumbs -->
<?php endif?>
<?php $this->renderPartial('/components/_flashMessages'); ?>     
<div class="row center">
    <div class="span9 margin-left-none">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>
    <div class="span3 operation">
        <div id="sidebar">
        <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>Yii::t('main', 'helper.operations'),
            ));
            
            $this->widget('bootstrap.widgets.TbMenu', array(
                'type'=>'tabs',
                'stacked'=>true,
                'items'=>$this->menu,
                'htmlOptions'=>array('class'=>'operations'),
            ));
        $this->endWidget();?>
            
        </div><!-- sidebar -->
    </div>

</div>
<?php $this->endContent(); ?>