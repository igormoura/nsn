<?php

class DefaultController extends RController
{       
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
		$this->render('index');
	}
}