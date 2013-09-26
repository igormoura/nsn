<div class="row center">
<?php $this->widget('bootstrap.widgets.TbNavbar', array(
'fixed' => false,
'collapse' => true, // requires bootstrap-responsive.css
'type' => 'inverse',
'items' => array(
    array(
        'class' => 'bootstrap.widgets.TbMenu',
        'items' => array(
            array('label'=>'Cadastro',           
                   'visible'=>!Yii::app()->user->isGuest,
                   'items' => array(
                       array('label'=>'Boleto', 'url'=>'#'),
                       array('label'=>'Cobrança','url'=>'#'), 
                       array('label'=>'Contrato', 'url'=>array('/cliente/admin')),   
                       ),
             ),
             array('label'=>'Relatórios',           
               'visible'=>!Yii::app()->user->isGuest,
               'items' => array(
                   array('label'=>'Fecho de Caixa', 'url'=>'#'),
                   array('label'=>'Relatórios Logs','url'=>'#'), 
                    array('label'=>'Cancelamentos',           
                       'visible'=>!Yii::app()->user->isGuest,
                       'items' => array(
                           array('label'=>'Relatório Cancelamentos', 'url'=>'#'),
                           ),
                     ),
                    array('label'=>'Cobrança',           
                       'visible'=>!Yii::app()->user->isGuest,
                       'items' => array(
                           array('label'=>'Cobrança de Clientes em Aberto', 'url'=>'#'),
                           array('label'=>'Inf Atividade Cobrança', 'url'=>'#'),
                           ),
                     ),
                    array('label'=>'Faturamento',           
                       'visible'=>!Yii::app()->user->isGuest,
                       'items' => array(
                           array('label'=>'Últimos Faturamentos', 'url'=>'#'),
                           ),
                     ),
                    array('label'=>'Impressão',           
                       'visible'=>!Yii::app()->user->isGuest,
                       'items' => array(
                           array('label'=>'Impressão Carta de Cobrança', 'url'=>'#'),
                           array('label'=>'Impressão Carta de Cancelamento', 'url'=>'#'),
                           array('label'=>'Impressão Documento', 'url'=>'#'),
                           array('label'=>'Impressão Recibo', 'url'=>'#'),
                           ),
                     ), 
                   ),
             ),
    array('label'=>'Manager',           
               'visible'=>!Yii::app()->user->isGuest,
               'items' => array(
                   array('label'=>'Check E-mail', 'url'=>'#'),
                   array('label'=>'Gerenciamento de Ocorrências','url'=>'#'), 
                   array('label'=>'Informações Predial', 'url'=>'#'), 
                   array('label'=>'Manutenção Dominios', 'url'=>'#'),
                   array('label'=>'Manutenção Sites','url'=>'#'), 
                   array('label'=>'Registro Ocorrências', 'url'=>'#'),   
                   ),
             ),
    array('label'=>'Configurações',           
               'visible'=>!Yii::app()->user->isGuest,
               'items' => array(
                   array('label'=>'Manter Permissões', 'url'=>array('/rights/assignment/view')),
                   array('label'=>'Manter Transação','url'=>'#'), 
                   array('label'=>'Manter Usuário', 'url'=>array('/usuario/admin')),  
                   ),
             ),
    array('label'=>'Ajuda',           
               'visible'=>!Yii::app()->user->isGuest,
               'items' => array(
                   array('label'=>'Ajuda sobre o SIS', 'url'=>'#'),
                   ),
             ),
    array('label'=>'HPSecrelNet',           
               'visible'=>!Yii::app()->user->isGuest,
               'items' => array(
                   array('label'=>'Painel de controle', 'url'=>'#'),
                   ),
             ),
   )
))));?>

</div>