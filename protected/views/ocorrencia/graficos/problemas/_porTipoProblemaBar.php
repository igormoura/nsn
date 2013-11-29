<?php $this->widget(
    'bootstrap.widgets.TbTabs',
    array(
        'type' => 'pills',
        'placement' => 'top',
        'tabs' => array(
        array(
            'label' => Yii::t('main','dashboard.ocorrencias.maiorMenor'),
            'content' => $this->renderPartial('//ocorrencia/graficos/_menorMaiorBar',array('model'=>$model),true), 
            'active' => true
        ),
        array(
            'label' => Yii::t('main','dashboard.ocorrencias.total'),
            'content' => $this->renderPartial('//ocorrencia/graficos/problemas/barra/_total',array('model'=>$model),true), 
        ),
        array(
            'label' => Yii::t('main','dashboard.ocorrencias.menor72Horas'),
            'content' => $this->renderPartial('//ocorrencia/graficos/problemas/barra/_maior72Horas',array('model'=>$model),true), 
        ),
        array(
            'label' => Yii::t('main','dashboard.ocorrencias.maior72Horas'),
            'content' => $this->renderPartial('//ocorrencia/graficos/problemas/barra/_menor72horas',array('model'=>$model),true), 
        ),
    )
    )
);?>
