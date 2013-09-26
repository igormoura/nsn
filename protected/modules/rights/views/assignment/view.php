<?php 

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $('#cliente-grid').yiiGridView('update', {
        data: $(this).serialize()
    });
    return false;
});
");?>





<?php $this->breadcrumbs = array(
	'Rights'=>Rights::getBaseUrl(),
	Rights::t('core', 'Assignments'),
); ?>



<div class="advanced-search">
    <?php echo CHtml::link(Yii::t('main','helper.advancedSearch'),'#',array('class'=>'search-button')); ?>
    <div class="search-form well" style="display:block">
    <?php $this->renderPartial('_search',array(
            'model'=>$dataProvider,
    )); ?>
    </div><!-- search-form -->
</div>



<div id="assignments" class="span9 margin-left-none">

	<h2><?php echo Rights::t('core', 'Atribuições'); ?></h2>

	<p>
		<?php echo Rights::t('core', 'Aqui você pode ver as permissões atribuídas a cada usuário.'); ?>
	</p>

	<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	    'dataProvider'=>$dataProvider,
	    'template'=>"{items}\n{pager}",
	    'emptyText'=>Rights::t('core', 'No users found.'),
	    'htmlOptions'=>array('class'=>'grid-view assignment-table'),
            'headerOffset' => 40, // 40px is the height of the main navigation at bootstrap
            'type' => 'striped bordered',
            'responsiveTable' => true,
                'columns'=>array(
                    array(
                            'name'=>'name',
                            'header'=>Rights::t('core', 'Name'),
                            'type'=>'raw',
                            'htmlOptions'=>array('class'=>'name-column'),
                            'value'=>'$data->getAssignmentNameLink()',
                    ),
                    array(
                            'name'=>'assignments',
                            'header'=>Rights::t('core', 'Roles'),
                            'type'=>'raw',
                            'htmlOptions'=>array('class'=>'role-column'),
                            'value'=>'$data->getAssignmentsText(CAuthItem::TYPE_ROLE)',
                    ),
                            array(
                            'name'=>'assignments',
                            'header'=>Rights::t('core', 'Tasks'),
                            'type'=>'raw',
                            'htmlOptions'=>array('class'=>'task-column'),
                            'value'=>'$data->getAssignmentsText(CAuthItem::TYPE_TASK)',
                    ),
                            array(
                            'name'=>'assignments',
                            'header'=>Rights::t('core', 'Operations'),
                            'type'=>'raw',
                            'htmlOptions'=>array('class'=>'operation-column'),
                            'value'=>'$data->getAssignmentsText(CAuthItem::TYPE_OPERATION)',
                    ),
                )
	)); ?>




</div>