<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        
        <!-- STYLE -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
        
        <!-- SCRIPTS -->
        <script type="text/javascript" src="/nsn/assets/c5f5426e/js/date.min.js"></script>
        <script type="text/javascript" src="/nsn/assets/c5f5426e/js/jquery.min.js"></script>
        
        
    
        <!-- IMAGES -->
        <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" type="image/x-icon" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <?php Yii::app()->bootstrap->register(); ?>
        <?php $translate = Yii::app()->translate; ?>
    </head>

    <body>  
        <?php $this->renderPartial('//components/_TbNavbarMain') ?> 

        <div class="container" id="page">
            <?php echo $content; ?>
            <div class="clear"></div>
        </div><!-- page -->
    </body>
</html>
