<!-- MODAL -->
<?php $this->beginWidget(
    'bootstrap.widgets.TbModal',
    array('id' => 'modal', 'htmlOptions' => array('style' => 'width: 900px; margin-left: -395px; overflow:hidden;'))
); ?>
 
<div class="modal-header" id="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
</div>

<div class="modal-body" id="modal-body">
    <?php 
    $dados = $model->dashboardCancelamentos('relatorio2',null);
   
    foreach ($dados as  $indice=>$grid){
        $dataProvider=new CArrayDataProvider($grid);
        
        $indice = str_replace(" ", "", $indice);
        
        $gridColumns = array(
            array(
                'class'=>'bootstrap.widgets.TbRelationalColumn',
                'name'=>'Servico',
                'header'=>'Serviço',
                'url' => $this->createUrl('dashboard/relationalCancelamento'),
                'afterAjaxUpdate'=>'js:function(tr,rowid, data){ console.log(rowid); }',
            ),
            array('name'=>'NomeServico', 'header'=>'Nome Serviço'),
            array('name'=>'Quantidade', 'header'=>'Quantidade'),
            array('name'=>'Valor', 'header'=>'Valor'),
        );  
        
        //GRIDVIEW
        $this->widget('bootstrap.widgets.TbExtendedGridView', array(
            'id'=>$indice,
            'htmlOptions' => array('class' => 'relatorio hide'),
            'fixedHeader' => true,
            'type'=>'striped bordered',
            'responsiveTable' => true,
            'dataProvider' => $dataProvider,
            'columns'=> $gridColumns,
        ));        
    }?>
    
</div>

<div class="modal-footer" style="height: 50px;">
    <?php $this->widget(
        'bootstrap.widgets.TbButton',
        array(
            'type' => 'primary',
            'label' => 'Fechar',
            'url' => '#',
            'htmlOptions' => array('data-dismiss' => 'modal'),
        )
    ); ?>
</div>
 
<?php $this->endWidget(); ?>