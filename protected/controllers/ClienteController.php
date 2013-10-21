<?php

class ClienteController extends RController
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
        
        public function allowedActions()
        { 
            return 'index, suggestedTags'; 
        }

	/*
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 *
	 */
	public function actionView($id)
	{	
		/* FUNCTION UPDATE*/
		$this->actionUpdate($id);

		$this->actionUpdateContrato($id);
		
                $this->render('view',array(
                        'model'=>$this->loadModel($id),
                ));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Cliente;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Cliente']))
		{
			$model->attributes=$_POST['Cliente'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->NoCliente));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Cliente']))
		{
			$model->attributes=$_POST['Cliente'];
			if($model->save())
				// Mensagem de sucesso 
				Yii::app()->user->setFlash('success', Yii::t('main', 'Atualização realizada com sucesso !'));
				// Redirecionamento apos execução do método
				$this->redirect(array('view','id'=>$model->NoCliente));
		}
	}

	public function actionUpdateContrato($id)
	{
		$model=$this->loadModelContrato($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Contrato']))
		{
			$model->attributes=$_POST['Contrato'];
			if($model->save()){
				// Mensagem de sucesso 
				Yii::app()->user->setFlash('success', Yii::t('main', 'Atualização realizada com sucesso !'));

			}
		}
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Cliente');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Cliente('search');
		$contrato = new Contrato('search');

		$model->unsetAttributes();  // clear any default values
		$contrato->unsetAttributes();

		if(isset($_GET['Cliente']))
			$model->attributes=$_GET['Cliente'];

		if (isset($_GET['Contrato']))
                $contrato->attributes = $_GET['Contrato'];

                $model->searchContrato = $contrato;

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Cliente the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
            $model=Cliente::model()->findByPk($id);
            if($model===null)
                    throw new CHttpException(404,'The requested page does not exist.');
            return $model;
                }

        public function loadModelContrato($id)
        {
            $model=Contrato::model()->findByPk($id);
            if($model===null)
                    throw new CHttpException(404,'The requested page does not exist.');
            return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Cliente $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cliente-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        /**
         *  FUNÇÃO PARA GERAR O RELACIONAL DA GRID VIEW PARA O DETALHAMENTO DAS DUPLICADAS
         *  NA VIEW NSN/INDEX.PHP/CLIENTE/ID/ " ABA DAS DUPLICASTAS "
         */
        public function actionRelational()
        {
            $this->renderPartial('_detailsDuplicatas', array(
                    'id' => Yii::app()->getRequest()->getParam('id'),
                    //'gridDataProvider' => $this->getGridDataProvider(),
                    //'data' => $this->getGridDataProvider(),
            ));
        }





}
