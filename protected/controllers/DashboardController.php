<?php

class DashboardController extends RController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
        public function filters()
	{
            return array( 'rights' );
	}
		
        public function allowedActions() { 
            return 'index, suggestedTags'; 
        }

	public function actionIndex()
	{
           $model=new Dashboard('search');
           $model->unsetAttributes();  // clear any default values

            if(isset($_GET['Dashboard']))
                    $model->attributes=$_GET['Dashboard'];

            $this->render('index',array(
                    'model'=>$model,
            ));
	}

        public function actionAdmin()
	{
            $model=new Contrato('search');
            $model->unsetAttributes();  // clear any default values
            if(isset($_GET['Dashboard']))
                    $model->attributes=$_GET['Dashboard'];

            $this->render('admin',array(
                    'model'=>$model,
            ));
	}
        
	public function actionOcorrencias()
	{
            $model=new Dashboard('search');
            $model->unsetAttributes();  // clear any default values

            if(isset($_GET['Dashboard']))
                    $model->attributes=$_GET['Dashboard'];

            $this->render('ocorrencias',array(
                    'model'=>$model,
            ));
	}
        
        public function actionVendas()
        {
            $model=new Dashboard('search');
            $model->unsetAttributes();  // clear any default values
            if(isset($_GET['Dashboard']))
                    $model->attributes=$_GET['Dashboard'];
            $this->render('vendas',array(
                    'model'=>$model,
            ));
        }
        
	public function actionCancelamentos()
	{
            $model=new Dashboard('search');
            $model->unsetAttributes();
            if(isset($_GET['Dashboard']))
                    $model->attributes=$_GET['Dashboard'];
            
            Yii::app()->clientScript->scriptMap=array(
                    'jquery.js'=>true,
                    'jquery.ba-bbq.js'=>true,
                    'jquery.yiigridview.js'=>true,
                    'jquery-ui.min.js'=>true
             ); 
            
            $this->render('cancelamentos',array(
                    'model'=>$model,
            ));
	}
        
        public function actionRelationalCancelamento()
        {
            $this->renderPartial('//dashboard/graficosCancelamentos/_relationalServicos', array(
                'id' => Yii::app()->getRequest()->getParam('id'),
            ));
        }
        
	public function actionPredial()
	{
            $model=new Dashboard('search');    
            $model->unsetAttributes();
            if(isset($_GET['Dashboard']))
                    $model->attributes=$_GET['Dashboard'];                                  
            
            Yii::app()->clientScript->scriptMap=array(
                  // 'jquery.js'=>false,
                  //  'jquery.ba-bbq.js'=>false,
                    'jquery.yiigridview.js'=>false,
                  //  'jquery-ui.min.js'=>false
            ); 
            
            $this->render('predial',array(
                    'model'=>$model,
            ));         
                      
	}
        
        public function actionRelationalPredial()
        {
            $model=new Dashboard('search'); 
            $model->unsetAttributes();
            if(isset($_GET['Dashboard']))
                    $model->attributes=$_GET['Dashboard'];    
            
            $this->renderPartial('graficosPredial/_relationalPredial',array(
                'model'=>$model,
                'id' => Yii::app()->getRequest()->getParam('id')
            ));            
        }
}
