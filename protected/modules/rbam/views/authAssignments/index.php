<?php
/* SVN FILE: $Id: index.php 19 2011-02-17 15:12:45Z Chris $*/
/**
* Users view.
*
* @copyright	Copyright &copy; 2010 PBM Web Development - All Rights Reserved
* @package		RBAM
* @since			V1.0.0
* @version		$Revision: 19 $
* @license		BSD License (see documentation)
*/

$baseUrl = $this->getModule()->baseScriptUrl;

$this->widget('rbam.extensions.alphapager.ApGridView', array(
        'id'=>'authAssignments',
        'fixedHeader' => true,
        'type'=>'striped bordered',
        'responsiveTable' => true,
	'dataProvider'=>$dataProvider,
	'template'=>"{alphapager}\n{summary}\n{items}\n{pager}",
	'summaryText'=>Yii::t('RbamModule.rbam','{start}-{end} of {count} {items}', array('{items}'=>Yii::t('RbamModule.rbam','users'))),
	'columns'=>array(
		array(
			'name'=>'rbamName',
			'type'=>'raw',
			'value'=>'$data->rbamName',
			'header'=>Yii::t('RbamModule.rbam','User'),
			'headerHtmlOptions'=>array('scope'=>'col'),
			'htmlOptions'=>array('class'=>'viewable'),
		),
		array(
			'type'=>'number',
			'header'=>Yii::t('RbamModule.rbam','Roles'),
			'headerHtmlOptions'=>array('scope'=>'col'),
			'value'=>'$this->grid->getOwner()->authManager->getRoleCount($data->'.$this->getModule()->userIdAttribute.')',
			'htmlOptions'=>array('class'=>'number')
		),
		array(

                        'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{view}{assign}',
			'header'=>Yii::t('RbamModule.rbam','Actions'),
			'headerHtmlOptions'=>array('scope'=>'col'),
			'viewButtonUrl'=>'array("userRoles", "uid"=>$data->'.$this->getModule()->userIdAttribute.')',
			'viewButtonOptions'=>array('title'=>Yii::t('RbamModule.rbam','View roles assigned to this user')),
                        'viewButtonImageUrl'=>array('icon'=>'pencil'),
			'buttons'=>array(
				'assign'=>array(
                                        'icon' => 'plus-sign',
					'url'=>'array("assign", "uid"=>$data->'.$this->getModule()->userIdAttribute.')',
					'options'=>array('class'=>'assign', 'title'=>Yii::t('RbamModule.rbam','Assign role(s) to this user')),
                                
				),
			)
		)
	),
));
