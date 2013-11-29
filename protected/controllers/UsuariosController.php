<?php

class UsuariosController extends RController
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
            return array('rights');
	}
        
        public function allowedActions() { 
            return 'index, suggestedTags'; 
        }
        
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{   
                $this->actionUpdate($id);
                
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
		$model=new Usuarios;
                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Usuarios']))
		{
			$model->attributes=$_POST['Usuarios'];
                      //  $model->foto_usuario=CUploadedFile::getInstance($model,'foto_usuario');
			if($model->save()){
                            // $model->image->saveAs('path/to/localFile');
                             $this->redirect(array('view','id'=>$model->id_usuario));
                        }
				
		}

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

            if(isset($_POST['Usuarios']))
            {
                    $model->attributes=$_POST['Usuarios'];
                    if($model->save())
                            // Mensagem de sucesso 
                            Yii::app()->user->setFlash('success', Yii::t('main', 'Atualização realizada com sucesso !'));
                            // Redirecionamento apos execução do método
                            $this->redirect(array('view','id'=>$model->id_usuario));
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
            $dataProvider=new CActiveDataProvider('Usuarios');
            $this->render('index',array(
                    'dataProvider'=>$dataProvider,
            ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{                   
            $this->actionCreate(); 
                
            $model=new Usuarios('search');
            $model->unsetAttributes();  // clear any default values
            if(isset($_GET['Usuarios']))
                    $model->attributes=$_GET['Usuarios'];
            $this->render('admin',array(
                    'model'=>$model,
            ));
            
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Usuarios the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Usuarios::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Usuarios $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='usuarios-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
         public function actionDashboard(){
            		
		$usage_data1 = array (
			array (
				'id' => 0,
				'event' => 'Total',
				'channels' => rand(10,100),
			),
			array (
				'id' => 0,
				'event' => 'Dial In',
				'channels' => rand(10,100),
			),
			array (
				'id' => 0,
				'event' => 'Dial Out',
				'channels' =>rand(10,100),	
			),
			array (
				'id' => 0,
				'event' => 'Idle',
				'channels' => rand(10,100),
			),
		);
		
		$usageDataProvider1 = new CArrayDataProvider($usage_data1, array (
			'pagination' => false
		));
		
		$this->render('/dashboard/index', array('usageDataProvider1' => $usageDataProvider1));
        }
      


        
}
