<?php
    
   // $id ID DEFINIDO NO ARRAY , A SELEÇÃO É FEITA A PARTIR DO CLIQUE NA GRIVIEW !
   /* --------- Lista do Relatório ---------*/
   $dados = Dashboard::model()->dashboardCancelamentos('relatorio3', $id);
     
   foreach($dados as $list){
    $dataProvider=new CArrayDataProvider($list);
    $gridColumns = array(
        array('name'=>'Cliente',    'header'=>'Cliente'),
        array('name'=>'NoContrato', 'header'=>'Nº Contrato'),
        array('name'=>'NomeCliente','header'=>'Nome Cliente'),
        array('name'=>'Observacao', 'header'=>'Observação'),
        array('name'=>'DataVenda',  'header'=>'Data Venda'),
        array('name'=>'Servico',    'header'=>'Serviço'),
        array('name'=>'Valor',      'header'=>'Valor'),
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