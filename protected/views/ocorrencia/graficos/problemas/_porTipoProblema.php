<style>
    #tabs-tipoProblema .tab-content {
        overflow: visible;
    }
    #tabs-tipoProblema > ul {
        float: right;
    }
</style>
<?php 

$this->widget(
    'bootstrap.widgets.TbTabs',
    array(
        'id' => 'tabs-tipoProblema',  
        'type' => 'pills', // 'tabs', 'pills', or 'list'
        'tabs' => array(
            'htmlOptions'=>array('class' => 'pull-right'),
            array(
                'label'=>Yii::t('main','dashboard.pie'),
                'content' => $this->renderPartial('graficos/problemas/_porTipoProblemaPie',array('model'=>$model),true),
                'active' => true,
            ),
            array(
                'label'=>Yii::t('main','dashboard.bar'),
                'content' => $this->renderPartial('graficos/problemas/_porTipoProblemaBar',array('model'=>$model),true),
                
            ), 
        ),
    )
);

