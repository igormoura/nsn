<?php

class AdminController extends RController
{
	public $defaultAction = "admin";
	public $layout='//layouts/column1';
        
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
        
	public function actionAdmin()
	{
		$model=new AuditTrail('search');
		$model->unsetAttributes();	// clear any default values
		if(isset($_GET['AuditTrail'])) {
			$model->attributes=$_GET['AuditTrail'];
		}
		$this->render('admin',array(
			'model'=>$model,
		));
	}
}