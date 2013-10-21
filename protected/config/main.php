<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name'=>'SN Web',

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

    // CARREGAMENTO AUTOMÁTICO DAS CLASSES DE MODELO E COMPONENTES
    'import'=>array(
        'application.models.*',
        'application.components.*',
        'application.modules.rights.*', 
        'application.modules.rights.components.*', // Correct paths if necessary.
        'application.modules.translate.TranslateModule',
        'application.modules.auditTrail.models.AuditTrail',
    ),

    'theme'=>'bootstrap',
	
    'modules'=>array(
      'translate',
        
        'auditTrail'=>array(
            'userClass' => 'Usuarios', // O nome da classe para o objeto do usuário
            'userIdColumn' => 'id_usuario', // O nome da coluna da chave primária para o usuário
            'userNameColumn' => 'nm_usuario', // o nome da coluna do nome para o usuário
        ),
        
        'rbam'=>array( 
            'applicationLayout'=>'application.views.layouts.main', 
            'authAssignmentsManagerRole'=>' Auth Assignments Manager', 
            'authenticatedRole'=>'Authenticated', 
            'authItemsManagerRole'=>'Auth Items Manager', 
            'baseScriptUrl'=>null, 
            'baseUrl'=>null, 
            'cssFile'=>null, 
            'development'=>true, 
            'exclude'=>'rbam', 
            'guestRole'=>'Guest', 
            'initialise'=>null, 
            'layout'=>'rbam.views.layouts.main', 
            'juiCssFile'=>'jquery-ui.css', 
            'juiHide'=>'puff', 
            'juiScriptFile'=>'jquery-ui.min.js', 
            'juiScriptUrl'=>null, 
            'juiShow'=>'fade',
            'juiTheme'=>'base', 
            'juiThemeUrl'=>null, 
            'pageSize'=>10, 
            'rbacManagerRole'=>'RBAC Manager', 
            'relationshipsPageSize'=>5, 
            'showConfirmation'=>3000, 
            'showMenu'=>true, 
            'userClass'=>'Usuarios', 
            'userCriteria'=>array(), 
            'userIdAttribute'=>'id_usuario', 
            'userNameAttribute'=>'nm_usuario', 
        ),

      'rights'=>array( 
        'superuserName'=>'Admin', // Name of the role with super user privileges. 
        'userClass' => 'Usuarios', // the name of the user model class.
        'authenticatedName'=>'Authenticated', // Name of the authenticated user role. 
        'userIdColumn'=>'id_usuario', // Name of the user id column in the database. 
        'userNameColumn'=>'nm_usuario', // Name of the user name column in the database. 
        'enableBizRule'=>true, // Whether to enable authorization item business rules. 
        'enableBizRuleData'=>false, // Whether to enable data for business rules. 
        'displayDescription'=>true, // Whether to use item description instead of name. 
        'flashSuccessKey'=>'RightsSuccess', // Key to use for setting success flash messages. 
        'flashErrorKey'=>'RightsError', // Key to use for setting error flash messages. 
        'baseUrl'=>'/rights', // Base URL for Rights. Change if module is nested. 
        'layout'=>'rights.views.layouts.main', // Layout to use for displaying Rights. 
        'appLayout'=>'application.views.layouts.main', // Application layout. 
        'cssFile'=>'rights.css', // Style sheet file to use for Rights. 
        'install'=>false, // Whether to enable installer. 
        'debug'=>true, // Whether to enable debug mode.   
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
      
      // LOGOUT APÓS 15 MIN
      'session' => array(
        'class' => 'CDbHttpSession',
        'timeout' => 900,
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
            'loginUrl' => array('/user/login'),
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

        // Configuração para coneção com um primeiro banco
        'db'=>array(
            'class'=>'system.db.CDbConnection',
            'connectionString' => 'sqlsrv:Server=192.168.2.239; Database=Manager2003-TESTE',
            //'connectionString' => 'dblib:host=192.168.2.239; dbname=NSN',       //          - LINUX
            'username' => 'nsnPhpYii',
            'password' => 'n0v0-snetd',
            'charset' => 'GB2312',
            'tablePrefix' => 'tbl_',  
         ),

        // Configuração para coneção a um segundo banco - Necessáio criar SecondbActiveRecord 
        'secondb'=>array(
           'class'=>'system.db.CDbConnection',
           'connectionString' => 'sqlsrv:Server=192.168.2.239; Database=SNETD-TESTE;',
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
        
        'thirdb'=>array(
              'connectionString' => 'mysql:host=localhost;dbname=nsn',
              'emulatePrepare' => true,
              'username' => 'root',
              'password' => 'mysql',
              'charset' => 'utf8',
        ),
                      
        'errorHandler'=>array(
            // use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
    
        'log'=>array(
            'class'=>'CLogRouter',
            'routes'=>array(
                array(
                    'class'=>'ext.LogDb',
                    'autoCreateLogTable'=>true,
                    'connectionID'=>'db',
                    'enabled'=>true,
                    'levels'=>'trace',//You can replace trace,info,warning,error
                     'categories'=>'system.web.filters.CFilterChain, exception.CException',
                ),
                 array(
                    'class'=>'ext.LogDb',
                    'autoCreateLogTable'=>true,
                    'connectionID'=>'secondb',
                    'enabled'=>true,
                    'levels'=>'trace, error',//You can replace trace,info,warning,error
                    'categories'=>'system.web.filters.CFilterChain, exception.CException',
                ),
 
                // uncomment the following to show log messages on web pages
 
                
                array(
                    'class'=>'CWebLogRoute',
                    'categories'=>'system.web.filters.CFilterChain, exception.CException',
                    'levels' => 'trace, error',
                    
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