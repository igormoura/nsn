<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'type'=>'', //inversr
    'collapse'=>true,
      'fixed' => 'top',
      'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            /*'items'=>array(
                array('label'=>Yii::t('main','site.home'), 'url'=>array('/site/index')),
                array('label'=>Yii::t('main','site.about'), 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>Yii::t('main','site.contact'), 'url'=>array('/site/contact')),
               // array('label'=>'Usuarios', 'url'=>array('/usuario/admin'),'visible'=>!Yii::app()->user->isGuest),
               // array('label'=>'Controle de Acesso', 'url'=>array('/rights/'),'visible'=>!Yii::app()->user->isGuest)
            ),*/
        ),
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),            
            'items'=>array( 
                '---',
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                
                array('label'=>'Logout ('.Yii::app()->user->name.')',           
                      'visible'=>!Yii::app()->user->isGuest,
                      'items' => array(
                          array('label'=>Yii::t('main','helper.settings'),           
                            'items' => array(
                                array('label'=>Yii::t('main','helper.userPermission'), 'url'=>array('/rights/assignment/view')),
                                array('label'=>Yii::t('main','Auditoria'), 'url'=>array('/auditTrail/admin')),
                                array('label'=>Yii::t('main','helper.languages'), 'url' =>array('/usuario/localization')),  
                          )),
                          array('label'=>Yii::t('main','helper.exit'), 'url'=>array('/site/logout')),                       
                          ),
                    )
            ),
        ),
        '<form class="navbar-search pull-right" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
 ))); ?>