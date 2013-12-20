<?php   
    
   // $id ID DEFINIDO NO ARRAY , A SELEÇÃO É FEITA A PARTIR DO CLIQUE NA GRIVIEW !
   /* --------- Lista do Relatório ---------*/
    
   $dados = $model->dashboardPredial('list', $id);
   
   foreach($dados as $list){   
    $dataProvider = new CArrayDataProvider(
    $list,
    array('pagination'=>array('pageSize'=>count($list)))
   );
    
    $gridColumns = array(
        array('name'=>'Seq',         'header'=>'Nº Serviço'),
        array('name'=>'NoContrato',  'header'=>'Contrato'),
        array('name'=>'NomeCliente', 'header'=>'Cliente'),
      //array('name'=>'DataCanc',    'header'=>'Cancelamento'),
        array('name'=>'Venc',        'header'=>'Vencimento'),
        array('name'=>'DescrTipo',   'header'=>'Serviço'),
        array('name'=>'Valor',       'header'=>'Valor'),
      //array('name'=>'NomeCond',    'header'=>'Condomínio'),
      //array('name'=>'Estado',      'header'=>'Estado'),
    );   
    
    /*--- GRIDVIEW ---*/
    $this->widget('bootstrap.widgets.TbExtendedGridView', array(
         'id'=>'listaRel-grid',
         'fixedHeader' => true,
         'type'=>'striped bordered',
         'responsiveTable' => true,
         'dataProvider'=>$dataProvider,
         'columns'=> $gridColumns,
     ));
    }
    
    
    
?>