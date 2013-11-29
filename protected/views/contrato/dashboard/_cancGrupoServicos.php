<style>
    .dashboard-vendas > ul {
        float: right;
    }    
    
    #dashboard-cancelamento .tab-content {
        overflow: visible;
    }
</style>

<?php $this->widget(
    'bootstrap.widgets.TbTabs',
    array(
        'type' => 'pills',
        'tabs' => array(
            array(
                'label'=>'Pizza',
                'content' => $this->renderPartial('//contrato/dashboard/_cancGrupoServicosPie',array('model'=>$model),true),  
                'active' => true,
            ),
            array(
                'label'=>'Barra',
                'content' => $this->renderPartial('//contrato/dashboard/_cancGrupoServicosBar',array('model'=>$model),true),  
                
            ),
        ),
    )
);?>
