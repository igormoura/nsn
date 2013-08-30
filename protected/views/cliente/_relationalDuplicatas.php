<?php $model = Duplicatas::model()->findByPk($id) ?>
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
        'data' => $model,
        'attributes'=>array(
           'NumeroDup',
           'NumeroLote',
            array(
                'label'=>Yii::t('main','duplicatas.DataEmisDup'),
                'value'=>date("d/m/Y",strtotime($model->DataEmisDup)),
                'visible'=>$model->DataEmisDup == null || '' ? false : true,
            ),
           array(
                'label'=>Yii::t('main','duplicatas.DataVencDup'),
                'value'=>date("d/m/Y",strtotime($model->DataVencDup)),
                'visible'=>$model->DataEmisDup == null || '' ? false : true,
            ),
           array(
                'label'=>Yii::t('main','duplicatas.DataEfetivacaoPagam'),
                'value'=>date("d/m/Y",strtotime($model->DataEfetivacaoPagam)),
                'visible'=>$model->DataEfetivacaoPagam == null || '' ? false : true,
            ),
            array(
                'label'=>Yii::t('main','duplicatas.BaixaDup'),
                'value'=>$model->BaixaDup,
                'visible'=>$model->BaixaDup == null || '' ? false : true,
            ),
            array(
                'label'=>Yii::t('main','duplicatas.ValorDup'),
                'value'=>$model->ValorDup,
                'visible'=>$model->ValorDup == null || '' ? false : true,
            ),
            array(
                'label'=>Yii::t('main','duplicatas.ValorJurosDup'),
                'value'=>$model->ValorJurosDup,
                'visible'=>$model->ValorJurosDup == null || '' ? false : true,
            ),
            array(
                'label'=>Yii::t('main','duplicatas.ValorMultaDup'),
                'value'=>$model->ValorMultaDup,
                'visible'=>$model->ValorMultaDup == null || '' ? false : true,
            ),
           'ValorDespDup',
           'ValorDescDup',
           'ValorAdicDup',
            array(
                'label'=>Yii::t('main','duplicatas.Observacao'),
                'value'=>$model->Observacao,
                'visible'=>$model->Observacao == null || '' ? false : true,
            ),
            array(
                'label'=>Yii::t('main','duplicatas.NFEmitida'),
                'value'=>$model->NFEmitida,
                'visible'=>$model->NFEmitida == null || '' ? false : true,
            ),
            array(
                'label'=>Yii::t('main','duplicatas.NoNF'),
                'value'=>$model->NoNF,
                'visible'=>$model->NoNF == null || '' ? false : true,
            ),
            array(
                'label'=>Yii::t('main','duplicatas.NFEmitida'),
                'value'=>$model->NFEmitida,
                'visible'=>$model->NFEmitida == null || '' ? false : true,
            ),
       ),
    
    )) ?>
