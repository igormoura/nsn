<div class="row center">
<?php $this->widget('bootstrap.widgets.TbNavbar', array(
'fixed' => false,
'collapse' => true, // requires bootstrap-responsive.css
'type' => 'inverse',
'items' => array(
    array(
        'class' => 'application.components.YiiSmartMenu',
        'partItemSeparator'=>'.',
        'upperCaseFirstLetter'=>true,
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
                      array('label'=>'Gráficos',           
                        'visible'=>!Yii::app()->user->isGuest,
                        'items' => array(
                            array('label'=>'Gráficos Ocorrências',  'url'=>array('/dashboard/ocorrencias')),   
                            array('label'=>'Gráficos Vendas',       'url'=>array('/dashboard/vendas')),   
                            array('label'=>'Gráficos Cancelamentos','url'=>array('/dashboard/cancelamentos')),   
                            array('label'=>'Gráficos Predial','url'=>array('/dashboard/predial')),   
                            ),
                      ),
                   ),
             ),
    array('label'=>'Configurações',           
               'visible'=>!Yii::app()->user->isGuest,
               'items' => array(
                   array('label'=>Yii::t('main','helper.userPermission'), 'url'=>array('/rbam/authAssignments/index')),
                   array('label'=>Yii::t('main','Auditoria'), 'url'=>array('/auditTrail/admin')),
                   array('label'=>Yii::t('main','Log'), 'url'=>array('/yiiLog/admin')),
                   array('label'=>Yii::t('main','helper.languages'), 'url' =>array('/usuario/localization')),
                   array('label'=>'Manter Transação','url'=>'#'), 
                   array('label'=>'Manter Usuário', 'url'=>array('/usuarios/admin')),  
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
    array('label'=>'Ponto',           
        'visible'=>!Yii::app()->user->isGuest,
        'items' => array(
            array('label'=>'Cadastrar Setor', 'url'=>array('/setor/admin')),
            ),
      ),
   )
))));?>

</div>
