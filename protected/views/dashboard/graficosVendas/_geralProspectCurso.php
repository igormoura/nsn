<style>
    .dashboard-vendas > ul {
        float: right;
    }    
     #dashboard-vendas .tab-content {
        overflow: visible;
    }
    
</style>
<?php $this->widget(
    'bootstrap.widgets.TbTabs',
    array(
        'htmlOptions' => array( 'class' => 'dashboard-vendas'),
        'type' => 'pills',
        'tabs' => array(
            array(
                'label'=>'Pizza',
                'content' => $this->renderPartial('graficosVendas/_geralProspectCursoPie',array('model'=>$model),true),  
                'active' => true,
            ),
            array(
                'label'=>'Barra',
                'content' => $this->renderPartial('graficosVendas/_geralProspectCursoBar',array('model'=>$model),true),  
                
            ),
        ),
    )
);?>
