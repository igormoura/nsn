<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
        <script type="text/javascript" src="/nsn/assets/c5f5426e/js/date.min.js"></script>
        <script type="text/javascript" src="/nsn/assets/c5f5426e/js/jquery.min.js"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'type'=>'', //inversr
    'collapse'=>true,
      'fixed' => 'top',
      'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
               // array('label'=>'Usuarios', 'url'=>array('/usuario/admin'),'visible'=>!Yii::app()->user->isGuest),
               // array('label'=>'Controle de Acesso', 'url'=>array('/rights/'),'visible'=>!Yii::app()->user->isGuest)
            ),
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
                          array('label'=>'Permissões', 'url'=>array('/rights')),
                          array('label'=>'Admin Usuários', 'url'=>array('/usuario/admin')),
                          array('label'=>'Admin Clientes', 'url'=>array('/cliente/admin')),
                          array('label'=>'Admin Contrato', 'url'=>array('/contrato/admin')),
                          array('label'=>'Sair', 'url'=>array('/site/logout')),                       
                          ),
                    )

                
            ),
        ),
        '<form class="navbar-search pull-right" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',

    ),

)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>


	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer" class="well">
		Copyright &copy; <?php echo date('Y'); ?> by <a href="http://www.secrel.com.br/">SecrelNet.</a> 
                <div class="pull-right">
		All Rights Reserved.
		<?php echo Yii::powered(); ?>
                </div>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
