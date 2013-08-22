<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'SN Web',
    
	// preloading 'log' component
	'preload'=>array(
            'log',
            'bootstrap',
        ),
    
         // Translated
         /* Referente a Framework ex: YII ZII*/
         'sourceLanguage'=>'pt_br',
    
         /* Referente ao projeto ex: NSN WEB*/
         'language'=>'pt', // pt - Portugues, en - English

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.modules.rights.*', 
                'application.modules.rights.components.*', // Correct paths if necessary.
	),
        'theme'=>'bootstrap',
	'modules'=>array(
                'rights'=>array( 
                    'superuserName'=>'Admin', // Name of the role with super user privileges. 
                    'userClass' => 'Usuario', // the name of the user model class.
                    'authenticatedName'=>'Authenticated', // Name of the authenticated user role. 
                    'userIdColumn'=>'idUsuario', // Name of the user id column in the database. 
                    'userNameColumn'=>'NomeUsuario', // Name of the user name column in the database. 
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
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
                        'generatorPaths' => array(
                            'bootstrap.gii'
                         ),
		),
                    
	),
        
        

	// application components
	'components'=>array(
            
		'user'=>array(
                        'class'=>'RWebUser',
                        'allowAutoLogin'=>true,
                        'loginUrl' => array('/user/login'),
		),
                'authManager' => array(
                    'class'=>'RDbAuthManager',
                  ),
            
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
            
                 'secondb'=>array(
                    'class'=>'system.db.CDbConnection',
                    'connectionString' => 'sqlsrv:Server=192.168.2.239; Database=SNETD-TESTE;',
                    'username' => 'nsnPhpYii',
                    'password' => 'n0v0-snetd',
                    'charset' => 'GB2312'
                 ),
            
                  /*'db'=>array(
                    'class'=>'CDbConnection',
                    'connectionString'=>'pgsql:host=localhost;port=5432;dbname=nsn',
                    'username'=>'postgres',
                    'password'=>'postgres',
                    'emulatePrepare'=>true,  // necessário em algumas instalações do MySQL
                  ),*/
                            
                 'db'=>array(
                    'class'=>'system.db.CDbConnection',
                    'connectionString' => 'sqlsrv:Server=192.168.2.239; Database=NSN',
                    'username' => 'nsnPhpYii',
                    'password' => 'n0v0-snetd',
                    'charset' => 'GB2312',
                    'tablePrefix' => 'tbl_'
                 ),
                
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
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
            
                // Twitter Bootstrap
                'bootstrap' => array(
                    'class' => 'ext.bootstrap.components.Bootstrap',
                    'responsiveCss' => true,
                ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);