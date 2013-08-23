<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// application components
	'components'=>array(
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
                /*'db'=>array(
                    'class'=>'system.db.CDbConnection',
                    'connectionString' => 'sqlsrv:Server=192.168.2.239; Database=NSN',
                    'username' => 'nsnPhpYii',
                    'password' => 'n0v0-snetd',
                    'charset' => 'GB2312',
                    'tablePrefix' => 'tbl_'
                 ),*/
                /*'secondb'=>array(
                   'class'=>'system.db.CDbConnection',
                   'connectionString' => 'sqlsrv:Server=192.168.2.239; Database=SNETD-TESTE;',
                   'username' => 'nsnPhpYii',
                   'password' => 'n0v0-snetd',
                   'charset' => 'GB2312'
                ),*/
                /*'db'=>array(
                    'class'=>'CDbConnection',
                    'connectionString'=>'pgsql:host=127.0.0.1;port=5432;dbname=nsn',
                    'username'=>'postgres',
                    'password'=>'postgres',
                    'emulatePrepare'=>true,  // necessário em algumas instalações do MySQL
                ),*/
		'db'=>array(
			'connectionString' => 'mysql:host=127.0.0.1;port=3306;dbname=nsn;unix_socket:/Applications/MAMP/tmp/mysql/mysql.sock',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'mysql',
			'charset' => 'utf8',
                        'enableProfiling'=>true,
                        'enableParamLogging' => true,
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
	),
);