<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */

         
        
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
    
        private $_id;
        
        /*public function authenticate()
        {
            $record=Usuarios::model()->findByAttributes(array('usuarioad'=>$this->username));
            if($record===null)
                $this->errorCode=self::ERROR_USERNAME_INVALID;
            else if($record->usuarioad!==($this->password))
                $this->errorCode=self::ERROR_PASSWORD_INVALID;
            else
            {
                $this->_id=$record->id_usuario;
                $this->setState('title', $record->nm_usuario);
                $this->errorCode=self::ERROR_NONE;
            }
            return !$this->errorCode;
        }*/
    
        /**
         * Authenticates a user.
         * @return boolean whether authentication succeeds.
        */
         public function authenticate()
            {
                try
                {
                  //$client = new SoapClient('http://192.168.2.84:81/PainelSecrelService.asmx?WSDL');
                    $client = new SoapClient('http://ssl.secrel.com.br/npainel/painelsecrelservice.asmx?WSDL');

                    $username = str_replace("@secrel.net.br", "", $this->username);

                    $result = $client->NSN_AutenticarUsuario(array('usuario' =>$username, 'senha' =>$this->password));
                    $json = $result->NSN_AutenticarUsuarioResult;

                    $obj = json_decode($json, true);

                    if($obj['logado']=='1' and $obj['erro']=='0'){

                        //$record=Usuarios::model()->findByAttributes(array('usuarioad'=>$username, 'email_usuario'=>$username.'@secrel.net.br'));
                        $record=Usuarios::model()->find('usuarioad=:usuarioad OR email_usuario=:email_usuario',array(':usuarioad'=>$username,':email_usuario'=>$username.'@secrel.net.br'));

                        if($record===null)
                            $this->errorCode=self::ERROR_USERNAME_INVALID;
                        else
                        {
                            $this->_id=$record->id_usuario;
                            $this->setState('title', $record->nm_usuario);
                            $this->errorCode=self::ERROR_NONE;
                        }
                        return !$this->errorCode;
                    }
                    else{
                       $this->errorCode=self::ERROR_USERNAME_INVALID;
                       $this->errorCode=self::ERROR_PASSWORD_INVALID;
                    }


                }catch(Exception $e){
                    echo 'BUFU!!!! ' .$e->getMessage();
                    die();
                }

                return false;
            }

        /**
         * @return integer the ID of the user record
         */
        public function getId()
        {
            return $this->_id;
        }

        public function behaviors()
        { 
            return array( 'LoggableBehavior'=> 'application.modules.auditTrail.behaviors.LoggableBehavior', );
        }
}