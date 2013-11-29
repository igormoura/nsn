<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->actionLogin();
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	/*public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}*/
        
        
        /**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
                    $model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
                            $mail = new YiiMailer();
                            //$mail->clearLayout();//if layout is already set in config
                            $mail->IsSMTP();
                            $mail->Host = "smtpdom.secrel.com.br";
                            $mail->Port = 587;
                            $mail->Username = "documentech@documentech.com.br";
                            $mail->setFrom($mail->Username, "Documentech");
                            $mail->setTo($model->email);
                            $mail->setSubject($model->subject);
                            $mail->setBody($model->body);
                            
                            $path = 'C:/Users/igor.moura.SECRELNET/Documents/igormoura/';
                            $mail->addAttachment($path.'boleto.pdf'); 
                                    
                            //Dispara o e-mail
                            $enviado = $mail->Send();
                            
                            // Limpa os destinatários e os anexos
                            $mail->ClearAllRecipients();
                            $mail->ClearAttachments();
                            
                            if ($enviado) {
                                    Yii::app()->user->setFlash('contact','Email Enviado com sucesso !');
                                } else {
                                     Yii::app()->user->setFlash('contact','Não foi possível enviar o e-mail ! Informações do erro: '.'<b>'.$mail->ErrorInfo.' !');
                                    echo "Não foi possível enviar o e-mail.".'<br />';
                                    echo "Informações do erro: " . $mail->ErrorInfo;
                                }
                                $mail->send();
                            }
                }
		
		$this->render('contact',array('model'=>$model));
	}
       

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
            $model=new LoginForm;

            // if it is ajax validation request
            if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
            {
                    echo CActiveForm::validate($model);
                    Yii::app()->end();
            }

            // collect user input data
            if(isset($_POST['LoginForm']))
            {
                    $model->attributes=$_POST['LoginForm'];
                    // validate user input and redirect to the previous page if valid
                    if($model->validate() && $model->login())
                            $this->redirect(array('/cliente/admin'));
            }
            // display the login form
            $this->render('login',array('model'=>$model));
	}
        
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
            Yii::app()->user->logout();
            $this->redirect(Yii::app()->homeUrl);
	}
        
        
        /*  REGISTRO DE LOGIN */
        public function actionRegister()
        {
                $model=new LoginForm;
                $newUser = new Usuario;
                
                // if it is ajax validation request
                if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
                {
                        echo CActiveForm::validate($model);
                        Yii::app()->end();
                }

                // collect user input data
                if(isset($_POST['LoginForm']))
                {
                        $model->attributes=$_POST['LoginForm'];
                        $newUser->NomeUsuario = $model->username;
                        $newUser->SenhaDB = $model->password;
                        $newUser->Email = $model->email;
                        $newUser->joined = date('d/m/y
                            h:m:s');
                                
                        if($newUser->save()) {
                                $identity=new UserIdentity($newUser->NomeUsuario,$model->password);
                                $identity->authenticate();
                                Yii::app()->user->login($identity,0);
                                //redirect the user to page he/she came from
                                $this->redirect(Yii::app()->user->returnUrl);
                        }
                                
                }
                // display the register form
                $this->render('register',array('model'=>$model));
        }

}