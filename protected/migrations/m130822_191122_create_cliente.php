<?php

class m130822_191122_create_cliente extends CDbMigration
{
	public function up()
	{
            
            $this->createTable('Cliente10', array(
                'NoCliente' => 'pk',
                'NomeCliente' => 'string NOT NULL',
                'Endereco' => 'string NOT NULL',
                'Bairro' => 'string NOT NULL',
                'Cidade' => 'string NOT NULL',
                'Estado' => 'string NOT NULL',
            ));
            
	}

	public function down()
	{
		$this->dropTable('Cliente10');
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