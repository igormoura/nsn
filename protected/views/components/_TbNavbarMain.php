<?php
    $dia = date("j");
    $hora = date("H")-4;
    $minuto = date("i");
    $segundo = date("s");

    $semana = array(0 => "Domingo",1 => "Segunda-Feira", 2 => "Terça-Feira", 3 => "Quarta-Feira",  4 => "Quinta-Feira", 5 => "Sexta-Feira",  6 => "Sábado");
    $mes = array(1 => "Janeiro",  2 => "Fevereiro",  3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro",  11 => "Novembro", 12 => "Dezembro");

    $ano = date("Y");
    $data_completa = date("d/m/y");
    $hora_completa = $hora.":".$minuto;
    $misc = $semana[date("w")].", ".date("j")." de ".$mes[date("n")]." de ".date("Y");
?>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'type'=>'', //inversr
    'brand'=> CHtml::image(Yii::app()->request->baseUrl."/images/logo-nsn.png","NSN WEB"),
    'collapse'=>true,
      'fixed' => 'top',
      'items'=>array(
        array(
            'class'=>'application.components.YiiSmartMenu',
            'items'=>array(
               // array('label'=>Yii::t('main','site.home'), 'url'=>array('/site/index')),
               // array('label'=>Yii::t('main','site.about'), 'url'=>array('/site/page', 'view'=>'about')),
               // array('label'=>Yii::t('main','site.contact'), 'url'=>array('/site/contact')),
               // array('label'=>'Usuarios', 'url'=>array('/usuario/admin'),'visible'=>!Yii::app()->user->isGuest),
               // array('label'=>'Controle de Acesso', 'url'=>array('/rights/'),'visible'=>!Yii::app()->user->isGuest)*/
            ),
        ),
        array(
            'class'=>'application.components.YiiSmartMenu',
            'htmlOptions'=>array('class'=>'pull-right'),  
            'items'=>array( 
                //'---',
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')',           
                      'visible'=>!Yii::app()->user->isGuest,
                      'items' => array(
                          array('label'=>Yii::t('main','helper.settings'),
                            'visible'=>!Yii::app()->user->isGuest,
                            'items' => array(

                          )),
                          array('label'=>Yii::t('main','helper.exit'), 'url'=>array('/site/logout')),                       
                          ),
                 
                    )
                

            ),
        ),

           array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right datatime-system'),            
            'items'=>array( 
                        array(
                            'class'=>'application.components.Date',
                            'label'=>$misc.'  '.$hora_completa,
                            'offset' => 4,
                            'visible'=>!Yii::app()->user->isGuest,
                         ),
            ),
           ),

          
 ))); ?>


