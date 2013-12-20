<style>
    #tabs-setor .tab-content {
        overflow: visible;
    }
    #tabs-setor > ul {
        float: right;
    }
</style>
<?php 

$this->widget(
    'bootstrap.widgets.TbTabs',
    array(
        'id' => 'tabs-setor',  
        'type' => 'pills', // 'tabs', 'pills', or 'list'
        'tabs' => array(
            'htmlOptions'=>array('class' => 'pull-right'),
            array(
                'label'=>Yii::t('main','dashboard.pie'),
                'content' => $this->renderPartial('//dashboard/graficosOcorrencias/setor/_porTipoSetorPie',array('model'=>$model),true),
                'active' => true,
            ),
            array(
                'label'=>Yii::t('main','dashboard.bar'),
                'content' => $this->renderPartial('//dashboard/graficosOcorrencias/setor/_porTipoSetorBar',array('model'=>$model),true),
            ), 
        ),
    )
);