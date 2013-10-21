<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel 
{
	public $username;
	public $password;
	public $rememberMe;

	private $_identity;
        
	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('username, password', 'required'),
			// rememberMe needs to be a boolean
			array('rememberMe', 'boolean'),
			// password needs to be authenticated
			array('password', 'authenticate'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'rememberMe'=>Yii::t('main','helper.remenber'),
                        'username' => Yii::t('main','helper.username'),
                        'password' => Yii::t('main','helper.password'),
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			if(!$this->_identity->authenticate())
				$this->addError('password',Yii::t('main','helper.errorUserPassword'));
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
        
        
        
        public function behaviors()
        { 
            return array( 'LoggableBehavior'=> 'application.modules.auditTrail.behaviors.LoggableBehavior', );
        }

        public function onAfterSave($event)
        {
                $this->raiseEvent('onAfterSave',$event);
        }

        /**
         * This event is raised before the record is deleted.
         * By setting {@link CModelEvent::isValid} to be false, the normal {@link delete()} process will be stopped.
         * @param CModelEvent $event the event parameter
         */
        public function onBeforeDelete($event)
        {
                $this->raiseEvent('onBeforeDelete',$event);
        }

        /**
         * This event is raised after the record is deleted.
         * @param CEvent $event the event parameter
         */
        public function onAfterDelete($event)
        {
                $this->raiseEvent('onAfterDelete',$event);
        }

        public function onBeforeFind($event)
        {
                $this->raiseEvent('onBeforeFind',$event);
        }

        /**
         * This event is raised after the record is instantiated by a find method.
         * @param CEvent $event the event parameter
         */
        public function onAfterFind($event)
        {
                $this->raiseEvent('onAfterFind',$event);
        }
        
}
