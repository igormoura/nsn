<?php

class m130823_175014_contrato extends CDbMigration
{
	public function up()
	{
            $this->createTable('Contrato', array(
                'NoContrato' => 'pk',
                'DataInicioContr' => 'datetime',
                'Empresa' => 'char(1)',
                'CodigoEstadoContr' => 'char(1) not null',
              /*'CodigoGrupo' => 'char(2)',
                'CodigoColegio' => 'char(2)',
                'CodigoMotivoCanc' => 'char(2)',
                'CondicoesAcesso' => 'char(15) not null',
                'CodigoDistr' => 'char(5)',
                'DiaVencimento' => 'integer',
                'DataEntregDistrib' => 'datetime',
                'DataDigitacao' => 'datetime',
                'CodigoTipoCobr' => 'char(2)',
                'DataPrimeiroAcesso' => 'datetime',
                'DataUltimoAcesso' => 'datetime',
                'Agencia' => 'string',
                'Conta' => 'datetime',
                'DataCancContr' => 'datetime',
                'Comentario' => 'text',
                'Matricula' => 'string',
                'Verba' => 'string',
                'LoginOriginal' => 'string',
                'CartaoCredito' => 'string',
                'ValidCartCredito' => 'string',
                'cvv' => 'char(3)',
                'PrimContat' => '(1)',
                'DataLimPovo' => 'string',
                'CodigoPovo' => 'string',
                'TipoCartCred' => 'char(1)',
                'Localizacao' => 'char(3)',
                'DataLimiteApuramento' => 'integer',
                'PrimCobr' => 'datetime',
                'dv' => 'char(1)',
                'ContrAtualizado' => 'string',
                'CandidatoWebcabo' => 'char(1)',
                'DataImprWE' => 'datetime',
                'TransWE' => 'char(1)',
                'TmpWEDataInit' => 'datetime',
                'TmpWECondicoesAcesso' => 'char(15)',
                'TmpWECondicoesAcAnterior' => 'char(15)',
                'Condo' => 'integer',
                'qtsimult' => 'integer',
                'QtSimultPLogin' => 'integer',
                'StatusWP' => 'char(1)',
                'DataImpWP' => 'datetime',
                'TMPWPDataInit' => 'datetime',
                'TMPWPCondicoesAcesso' => 'char(15)',
                'TMPWPCondicoesAcAnterior' => 'char(15)',
                'DescPont' => 'char(1)',
                'TipoEntrega' => 'char(1)',
                'Fil' => 'char(3)',
                'limiteemail' => 'integer',
                'ClienteCorporativo' => 'char(1)',*/
                
                'NoCliente'=>'integer NOT NULL REFERENCES Cliente(NoCliente)'
            ));
	}

	public function down()
	{
		$this->dropTable('Contrato');
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