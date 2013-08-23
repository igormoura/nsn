<?php

class m130823_175001_duplicatas extends CDbMigration
{
	public function up()
	{
            $this->createTable('Duplicatas', array(
                'NumeroDup' => 'pk',
                'conta' => 'string',
                'dataInicio' => 'datetime',
                'NumeroLote' => 'integer',
                'BaixaDup' => 'datetime',
                'ValorDup' => 'integer',
                
                'NoCliente'=>'integer NOT NULL REFERENCES Cliente(NoCliente)'
            ));
            
	}


	public function down()
	{
		$this->dropTable('Duplicatas');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}