<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name'=>'NSN Web',

    // PRÉ-CARREGAMENTO 'log' COMPONENTES 
    'preload'=>array(
        'log',
        'bootstrap',
        'translate',
    ),

     // TRADUÇÕES
     /* Referente a Framework ex: YII ZII*/
     //'sourceLanguage'=>'pt_br',

     /* Referente ao projeto ex: NSN WEB*/
     //'language'=>'en', // pt - Portugues, en - English

    // CARREGAMENTO AUTOMÁTICO DAS CLASSES E COMPONENTES
    'import'=>array(
        'application.models.*',
        'application.components.*',
        'application.modules.rights.*', 
        'application.modules.rights.components.*', // Correct paths if necessary.
        'application.modules.translate.TranslateModule',
        'application.modules.auditTrail.models.AuditTrail',
        'ext.YiiMailer.YiiMailer',
        'application.extensions.EAjaxUpload.*',
        'ext.yii-highcharts.highcharts.*'
    ),

    'theme'=>'bootstrap',
	
    'modules'=>array(
      'translate',
        
        'auditTrail'=>array(
            'userClass' => 'Usuarios', // O nome da classe para o objeto do usuário
            'userIdColumn' => 'id_usuario', // O nome da coluna da chave primária para o usuário
            'userNameColumn' => 'nm_usuario', // o nome da coluna do nome para o usuário
        ),
        
        'rights'=>array( 
            'superuserName'=>'Administrador', // Name of the role with super user privileges. 
            'userClass' => 'Usuarios', // the name of the user model class.
            'userIdColumn'=>'id_usuario', // Name of the user id column in the database. 
            'userNameColumn'=>'nm_usuario', // Name of the user name column in the database.  
            'cssFile'=>'rights.css', // Style sheet file to use for Rights.*/
            'install' => true,
       ),
        'rbam'=>array(
            'userClass'=>'Usuarios', 
            'userIdAttribute'=>'id_usuario', 
            'userNameAttribute'=>'nm_usuario',
           // 'development'=>true,
        ),
                
       // uncomment the following to enable the Gii tool
       'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'yiidemo',
            'ipFilters'=>array('127.0.0.1','::1'),
            'generatorPaths' => array('bootstrap.gii'), 
        ),
                    
    ),
   
        
    // Componentes da Aplicação
    'components'=>array( 
      // LOCAL DATA TIME ZONE
     'localtime'=>array(
        'class'=>'LocalTime',
        ),
      
      // LOGOUT APÓS 15 MIN
      'session' => array(
        'class' => 'system.web.CDbHttpSession',
        'timeout' => 3600,
      ),
        
        // Twitter Bootstrap
        'bootstrap' => array(
            'class' => 'ext.bootstrap.components.Bootstrap',
            'responsiveCss' => true,
        ),  
        
        'translate'=>array(//if you name your component something else change TranslateModule
            'class'=>'translate.components.MPTranslate',
            //any avaliable options here
            'acceptedLanguages'=>array(
                'en'=>'English',
                'pt'=>'Português',
               // 'es'=>'Español'
            ),
        ),
        
        'user'=>array(
            'class'=>'RWebUser',
            'allowAutoLogin'=>true,
            'loginUrl' => array('site/login'),
        ),
        
        'authManager' => array(
            'class'=>'RDbAuthManager',
        ),
        
        // DATATIME ZONE
        'localtime'=>array(
            'class'=>'LocalTime',
        ),
        
        
       // Definir a classe e seu evento das Truduções em Falta
       /*'messages'=>array(
           'class'=>'CDbMessageSource',
           'onMissingTranslation' => array('TranslateModule', 'missingTranslation'),
       ),*/
            
        // uncomment the following to enable URLs in path-format
        'urlManager'=>array(
                'urlFormat'=>'path',
                'rules'=>array(
                        '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                        '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                        '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                ),
        ),
		
        /*'db'=>array(
                'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
        ),*/

        /// CONFIGURAÇÃO DE CONEXÃO PRIMEIRO BANCO
        'db'=>array(
            'class'=>'system.db.CDbConnection',
            'connectionString' => 'sqlsrv:Server=192.168.2.239; Database=Manager2003-TESTE',
            'username' => 'nsnPhpYii',
            'password' => 'n0v0-snetd',
            'charset' => 'GB2312',
            'tablePrefix' => 'tbl_',
            //'initSQLs'=>array("default_time_zone='+00:00';")   
         ),

        // CONFIGURAÇÃO DE CONEXÃO SEGUNDO BANCO - NECESSÁRIO CRIAR MODEL SECONDB 
        'secondb'=>array(
           'class'=>'system.db.CDbConnection',
           'connectionString' => 'sqlsrv:Server=192.168.2.239; Database=SNETD-TESTE;',
           'username' => 'nsnPhpYii',
           'password' => 'n0v0-snetd',
           'charset' => 'GB2312',           
        ),
        
        // CONFIGURAÇÃO DE CONEXÃO TERCEIRO BANCO - NECESSÁRIO CRIAR MODEL THIRDB 
        'thirdb'=>array(
           'class'=>'system.db.CDbConnection',
           'connectionString' => 'sqlsrv:Server=192.168.2.239; Database=SNETD;',
           'username' => 'nsnPhpYii',
           'password' => 'n0v0-snetd',
           'charset' => 'GB2312',           
        ),

        /*'db'=>array(
          'class'=>'CDbConnection',
          'connectionString'=>'pgsql:host=localhost;port=5432;dbname=nsn',
          'username'=>'postgres',
          'password'=>'postgres',
          'emulatePrepare'=>true,  // necessário em algumas instalações do MySQL
        ),*/
        
       /*'thirdb'=>array(
                'connectionString' => 'mysql:host=localhost;dbname=nsn',
                'emulatePrepare' => true,
                'username' => 'root',
                'password' => 'mysql',
                'charset' => 'utf8',
        ),*/
                      
        'errorHandler'=>array(
            // use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
    
        /*'log'=>array(
            'class'=>'CLogRouter',
            'routes'=>array(
                array(
                    'class'=>'ext.LogDb',
                    'autoCreateLogTable'=>true,
                    'connectionID'=>'db',
                    'enabled'=>true,
                    'levels'=>'trace',//You can replace trace,info,warning,error
                     //'categories'=>'system.web.filters.CFilterChain, exception.CException',
                    'categories'=>'system.web.*',
                ),
                 array(
                    'class'=>'ext.LogDb',
                    'autoCreateLogTable'=>true,
                    'connectionID'=>'secondb',
                    'enabled'=>true,
                    'levels'=>'trace, error',//You can replace trace,info,warning,error
                    //'categories'=>'system.web.filters.CFilterChain, exception.CException',
                     'categories'=>'system.web.*',
                ),
 
                // uncomment the following to show log messages on web pages
 
                array(
                    'class'=>'CWebLogRoute',
                    //'categories'=>'system.web.filters.CFilterChain, exception.CException',
                    'categories'=>'system.web.*',
                    'levels' => 'trace, error',
                ),
                
            ),
        ),*/
        
        'log'=>array(
            'class'=>'CLogRouter',
            'routes'=>array(
                array(
                        'class'=>'CFileLogRoute',
                        'levels'=>'error, warning',
                ),
                // uncomment the following to show log messages on web pages
                array(
                        'class'=>'CWebLogRoute',
                ),
            ),
        ),
                
    ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params'=>array(
            // this is used in contact page
            'adminEmail'=>'webmaster@example.com',
    ),
);