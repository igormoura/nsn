<?php $this->widget(
    'bootstrap.widgets.TbTabs',
    array(
        'type' => 'pills',
        'placement' => 'top',
        'tabs' => array(
        array(
            'label' => Yii::t('main','dashboard.ocorrencias.maiorMenor'),
            'content' => $this->renderPartial('//dashboard/graficosOcorrencias/_menorMaiorBar',array('model'=>$model),true), 
            'active' => true
        ),
        array(
            'label' => Yii::t('main','dashboard.ocorrencias.total'),
            'content' => $this->renderPartial('//dashboard/graficosOcorrencias/setor/barra/_total',array('model'=>$model),true), 
        ),
        array(
            'label' => Yii::t('main','dashboard.ocorrencias.menor72Horas'),
            'content' => $this->renderPartial('//dashboard/graficosOcorrencias/setor/barra/_maior72Horas',array('model'=>$model),true), 
        ),
        array(
            'label' => Yii::t('main','dashboard.ocorrencias.maior72Horas'),
            'content' => $this->renderPartial('//dashboard/graficosOcorrencias/setor/barra/_menor72horas',array('model'=>$model),true), 
        ),
    )
    )
);?>
