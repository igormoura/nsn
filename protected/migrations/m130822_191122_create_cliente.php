<?php

class m130822_191122_create_cliente extends CDbMigration
{
	public function up()
	{          
            $this->createTable('Cliente', array(
                'NoCliente' => 'pk',
                'NomeCliente' => 'string NOT NULL',
                'CGF' => 'string NOT NULL',
                'CGC' => 'string NOT NULL',
                'CPF' => 'string NOT NULL',
                /*'Endereco' => 'string NOT NULL',
                'Bairro' => 'string NOT NULL',
                'Cidade' => 'string NOT NULL',
                'Estado' => 'string NOT NULL',
                'CEP' => 'string NOT NULL',
                'CGF' => 'string NOT NULL',
                'CGC' => 'string NOT NULL',
                'CPF' => 'string NOT NULL',
                'Identidade' => 'string NOT NULL',
                'FoneResidencia' => 'string NOT NULL',
                'FoneComerical' => 'string NOT NULL',
                'FAX' => 'string NOT NULL',
                'Telex' => 'string NOT NULL',
                'Contato' => 'string NOT NULL',
                'Pager' => 'string NOT NULL',
                'Celular' => 'string NOT NULL',
                'EMail' => 'string NOT NULL',
                'PF_PJ' => 'string NOT NULL',
                'ECNomeCliente' => 'string NOT NULL',
                'ECEndereco' => 'string NOT NULL',
                'ECBairro' => 'string NOT NULL',
                'ECCidade' => 'string NOT NULL',
                'ECEstado' => 'string NOT NULL',
                'ECCEP' => 'string NOT NULL',
                'EmailCobr' => 'string NOT NULL',
                'ViaECT' => 'string NOT NULL',
                'InscricaoMunicipal' => 'string NOT NULL',
                'EmailFinanceiro' => 'string NOT NULL',*/
            ));
            
	}
     

	public function down()
	{
		$this->dropTable('Cliente');
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