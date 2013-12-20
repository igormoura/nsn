<style>
    #tabs-servico .tab-content {
        overflow: visible;
    }
    
    #tabs-servico > ul{
        float: right;
    }
</style>

<?php $this->widget(
    'bootstrap.widgets.TbTabs',
    array(
        'id' => 'tabs-servico',  
        'type' => 'pills', // 'tabs', 'pills', or 'list'
        'tabs' => array(
            array(
                'label'=>Yii::t('main','dashboard.pie'),
                'content' => $this->renderPartial('//dashboard/graficosOcorrencias/servicos/_porTipoServicoPie',array('model'=>$model),true),
                'active' => true,
            ),
            array(
                'label'=>Yii::t('main','dashboard.bar'),
                'content' => $this->renderPartial('//dashboard/graficosOcorrencias/servicos/_porTipoServicoBar',array('model'=>$model),true),
            ), 
        ),
    )
);?>

