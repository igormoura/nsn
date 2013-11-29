<style>
    #tabs-tipoServico .tab-content {
        overflow: visible;
    }
    
    #tabs-tipoServico > ul{
        float: right;
    }
</style>

<?php $this->widget(
        'bootstrap.widgets.TbTabs',
        array(
            'id' => 'tabs-tipoServico',  
            'type' => 'pills', // 'tabs', 'pills', or 'list'
            'tabs' => array(
                array(
                    'label'=>Yii::t('main','dashboard.pie'),
                    'content' => $this->renderPartial('graficos/servicos/_porTipoServicoPie',array('model'=>$model),true),
                    'active' => true,
                ),
                array(
                    'label'=>Yii::t('main','dashboard.bar'),
                    'content' => $this->renderPartial('graficos/servicos/_porTipoServicoBar',array('model'=>$model),true),

                ), 
            ),
        )
    );

