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
    
    $dados = $model->dashboardPredial('relatorio',null); 
    
    foreach ($dados as  $indice=>$grid){
        
        $dataProvider=new CArrayDataProvider($grid, array(
            'id'=>'relational-predial',
            'pagination'=>array(
                'pageSize'=>count($grid),
            ),
        ));
       
        
     /* $dataProvider = new CArrayDataProvider(array(
            array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS'),
            array('id'=>2, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript'),
            array('id'=>3, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML'),
        ));
        
        $gridColumns=array(
            array('name'=>'id', 'header'=>'#'),
            array('name'=>'firstName', 'header'=>'First name'),
            array('name'=>'lastName', 'header'=>'Last name'),
            array('name'=>'language', 'header'=>'Language'),
           );
       */    
        $gridColumns = array(
            array(
                'class'=>'bootstrap.widgets.TbRelationalColumn',
                'name'=>'Condominio',
                'header'=>'Condomínio',
                'url' => $this->createUrl('relationalPredial'),
                'afterAjaxUpdate' => 'js:function(tr,rowid,data){console.log(rowid); }',
            ),
            array('name'=>'CodigoEstadoContr', 'header'=>'Estado'),
            array('name'=>'Quantidade', 'header'=>'Quantidade'),
            array('name'=>'Valor', 'header'=>'Valor'),
            array('name'=>'Mes', 'header'=>'Mês'),
            array('name'=>'Ano', 'header'=>'Ano'),
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
    } 
    
    ?>
    
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