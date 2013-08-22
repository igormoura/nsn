<?php

/**
 * This is the model class for table "RALSecrel.Contrato".
 *
 * The followings are the available columns in table 'RALSecrel.Contrato':
 * @property integer $NoContrato
 * @property string $CodigoEstadoContr
 * @property string $CodigoGrupo
 * @property string $CodigoColegio
 * @property string $CodigoMotivoCanc
 * @property string $CondicoesAcesso
 * @property string $DataInicioContr
 * @property string $CodigoDistr
 * @property integer $DiaVencimento
 * @property string $DataEntregDistrib
 * @property string $DataDigitacao
 * @property string $CodigoTipoCobr
 * @property string $DataPrimeiroAcesso
 * @property string $DataUltimoAcesso
 * @property integer $NoCliente
 * @property string $Agencia
 * @property string $Conta
 * @property string $DataCancContr
 * @property string $Comentario
 * @property string $Matricula
 * @property string $Verba
 * @property string $LoginOriginal
 * @property string $CartaoCredito
 * @property string $ValidCartCredito
 * @property string $cvv
 * @property string $PrimContat
 * @property string $DataLimPovo
 * @property string $CodigoPovo
 * @property string $TipoCartCred
 * @property string $Localizacao
 * @property integer $DataLimiteApuramento
 * @property string $PrimCobr
 * @property string $dv
 * @property string $ContrAtualizado
 * @property string $CandidatoWebcabo
 * @property string $DataImprWE
 * @property string $TransWE
 * @property string $TmpWEDataInit
 * @property string $TmpWECondicoesAcesso
 * @property string $TmpWECondicoesAcAnterior
 * @property integer $Condo
 * @property integer $grupo_autent
 * @property integer $qtsimult
 * @property integer $QtSimultPLogin
 * @property string $StatusWP
 * @property string $DataImpWP
 * @property string $TMPWPDataInit
 * @property string $TMPWPCondicoesAcesso
 * @property string $TMPWPCondicoesAcAnterior
 * @property string $DescPont
 * @property string $TipoEntrega
 * @property integer $QtContas
 * @property string $Empresa
 * @property string $Fil
 * @property integer $limiteemail
 * @property string $ClienteCorporativo
 * @property integer $FlagCarta
 */
class Contrato extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contrato the static model class
	 */
    
         public $nomeCliente;
         
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return CDbConnection database connection
	 */
	public function getDbConnection()
	{
		return Yii::app()->secondb;
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'RALSecrel.Contrato';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NoContrato, CodigoEstadoContr, CondicoesAcesso, NoCliente', 'required'),
			array('NoContrato, DiaVencimento, NoCliente, DataLimiteApuramento, Condo, grupo_autent, qtsimult, QtSimultPLogin, QtContas, limiteemail, FlagCarta', 'numerical', 'integerOnly'=>true),
			array('CodigoEstadoContr, PrimContat, TipoCartCred, dv, CandidatoWebcabo, TransWE, StatusWP, DescPont, TipoEntrega, Empresa, ClienteCorporativo', 'length', 'max'=>1),
			array('CodigoGrupo, CodigoColegio, CodigoMotivoCanc, CodigoTipoCobr', 'length', 'max'=>2),
			array('CondicoesAcesso, TmpWECondicoesAcesso, TmpWECondicoesAcAnterior, TMPWPCondicoesAcesso, TMPWPCondicoesAcAnterior', 'length', 'max'=>15),
			array('CodigoDistr, ValidCartCredito, DataLimPovo', 'length', 'max'=>5),
			array('Agencia, Matricula, Verba', 'length', 'max'=>10),
			array('Conta, CartaoCredito, CodigoPovo', 'length', 'max'=>20),
			array('Comentario', 'length', 'max'=>500),
			array('LoginOriginal', 'length', 'max'=>100),
			array('cvv, Localizacao, Fil', 'length', 'max'=>3),
			array('ContrAtualizado', 'length', 'max'=>25),
			array('DataInicioContr, DataEntregDistrib, DataDigitacao, DataPrimeiroAcesso, DataUltimoAcesso, DataCancContr, PrimCobr, DataImprWE, TmpWEDataInit, DataImpWP, TMPWPDataInit', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NoContrato, CodigoEstadoContr, CodigoGrupo, CodigoColegio, CodigoMotivoCanc, CondicoesAcesso, DataInicioContr, CodigoDistr, DiaVencimento, DataEntregDistrib, DataDigitacao, CodigoTipoCobr, DataPrimeiroAcesso, DataUltimoAcesso, NoCliente, Agencia, Conta, DataCancContr, Comentario, Matricula, Verba, LoginOriginal, CartaoCredito, ValidCartCredito, cvv, PrimContat, DataLimPovo, CodigoPovo, TipoCartCred, Localizacao, DataLimiteApuramento, PrimCobr, dv, ContrAtualizado, CandidatoWebcabo, DataImprWE, TransWE, TmpWEDataInit, TmpWECondicoesAcesso, TmpWECondicoesAcAnterior, Condo, grupo_autent, qtsimult, QtSimultPLogin, StatusWP, DataImpWP, TMPWPDataInit, TMPWPCondicoesAcesso, TMPWPCondicoesAcAnterior, DescPont, TipoEntrega, QtContas, Empresa, Fil, limiteemail, ClienteCorporativo, FlagCarta', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
            return array(
                'Distribuidor' => array(self::BELONGS_TO, 'Distribuidor', 'CodigoDistr'),
                'EstadoContr' => array(self::BELONGS_TO, 'EstadoContr', 'CodigoEstadoContr'),
                'MotivoCancelamento' => array(self::BELONGS_TO, 'MotivoCancelamento', 'CodigoMotivoCanc'),
                'TipoCobranca' => array(self::BELONGS_TO, 'TipoCobranca', 'CodigoTipoCobr'),
                'NomesEmpresas' => array(self::BELONGS_TO, 'NomesEmpresas', 'Empresa'),
                'Cliente' => array(self::BELONGS_TO, 'Cliente', 'NoCliente'),
            );
	}
        
        

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NoContrato' =>                 Yii::t('main', 'contrato.NoContrato'),
			'CodigoEstadoContr' =>          Yii::t('main', 'contrato.CodigoEstadoContr'),
			'CodigoGrupo' =>                Yii::t('main', 'contrato.CodigoGrupo'),
			'CodigoColegio' =>              Yii::t('main', 'contrato.CodigoColegio'),
			'CodigoMotivoCanc' =>           Yii::t('main', 'contrato.CodigoMotivoCanc'),
			'CondicoesAcesso' =>            Yii::t('main', 'contrato.CondicoesAcesso'),
			'DataInicioContr' =>            Yii::t('main', 'contrato.DataInicioContr'),
			'CodigoDistr' =>                Yii::t('main', 'contrato.CodigoDistr'),
			'DiaVencimento' =>              Yii::t('main', 'contrato.DiaVencimento'),
			'DataEntregDistrib' =>          Yii::t('main', 'contrato.DataEntregDistrib'),
			'DataDigitacao' =>              Yii::t('main', 'contrato.DataDigitacao'),
			'CodigoTipoCobr' =>             Yii::t('main', 'contrato.CodigoTipoCobr'),
			'DataPrimeiroAcesso' =>         Yii::t('main', 'contrato.DataPrimeiroAcesso'),
			'DataUltimoAcesso' =>           Yii::t('main', 'contrato.DataUltimoAcesso'),
			'NoCliente' =>                  Yii::t('main', 'contrato.NoCliente'),
			'Agencia' =>                    Yii::t('main', 'contrato.Agencia'),
			'Conta' =>                      Yii::t('main', 'contrato.Conta'),
			'DataCancContr' =>              Yii::t('main', 'contrato.DataCancContr'),
			'Comentario' =>                 Yii::t('main', 'contrato.Comentario'),
			'Matricula' =>                  Yii::t('main', 'contrato.Matricula'),
			'Verba' =>                      Yii::t('main', 'contrato.Verba'),
			'LoginOriginal' =>              Yii::t('main', 'contrato.LoginOriginal'),
			'CartaoCredito' =>              Yii::t('main', 'contrato.CartaoCredito'),
			'ValidCartCredito' =>           Yii::t('main', 'contrato.ValidCartCredito'),
			'cvv' =>                        Yii::t('main', 'contrato.cvv'),
			'PrimContat' =>                 Yii::t('main', 'contrato.PrimContat'),
			'DataLimPovo' =>                Yii::t('main', 'contrato.DataLimPovo'),
			'CodigoPovo' =>                 Yii::t('main', 'contrato.CodigoPovo'),
			'TipoCartCred' =>               Yii::t('main', 'contrato.TipoCartCred'),
			'Localizacao' =>                Yii::t('main', 'contrato.Localizacao'),
			'DataLimiteApuramento' =>       Yii::t('main', 'contrato.DataLimiteApuramento'),
			'PrimCobr' =>                   Yii::t('main', 'contrato.PrimCobr'),
			'dv' =>                         Yii::t('main', 'contrato.dv'),
			'ContrAtualizado' =>            Yii::t('main', 'contrato.ContrAtualizado'),
			'CandidatoWebcabo' =>           Yii::t('main', 'contrato.CandidatoWebcabo'),
			'DataImprWE' =>                 Yii::t('main', 'contrato.DataImprWE'),
			'TransWE' =>                    Yii::t('main', 'contrato.TransWE'),
			'TmpWEDataInit' =>              Yii::t('main', 'contrato.TmpWEDataInit'),
			'TmpWECondicoesAcesso' =>       Yii::t('main', 'contrato.TmpWECondicoesAcesso'),
			'TmpWECondicoesAcAnterior' =>   Yii::t('main', 'contrato.TmpWECondicoesAcAnterior'),
			'Condo' =>                      Yii::t('main', 'contrato.Condo'),
			'grupo_autent' =>               Yii::t('main', 'contrato.grupo_autent'),
			'qtsimult' =>                   Yii::t('main', 'contrato.qtsimult'),
			'QtSimultPLogin' =>             Yii::t('main', 'contrato.status'),
			'StatusWP' =>                   Yii::t('main', 'contrato.StatusWP'),
			'DataImpWP' =>                  Yii::t('main', 'contrato.DataImpWP'),
			'TMPWPDataInit' =>              Yii::t('main', 'contrato.TMPWPDataInit'),
			'TMPWPCondicoesAcesso' =>       Yii::t('main', 'contrato.TMPWPCondicoesAcesso'),
			'TMPWPCondicoesAcAnterior' =>   Yii::t('main', 'contrato.TMPWPCondicoesAcAnterior'),
			'DescPont' =>                   Yii::t('main', 'contrato.DescPont'),
			'TipoEntrega' =>                Yii::t('main', 'contrato.TipoEntrega'),
			'QtContas' =>                   Yii::t('main', 'contrato.QtContas'),
			'Empresa' =>                    Yii::t('main', 'contrato.Empresa'),
			'Fil' =>                        Yii::t('main', 'contrato.Fil'),
			'limiteemail' =>                Yii::t('main', 'contrato.limiteemail'),
			'ClienteCorporativo' =>         Yii::t('main', 'contrato.ClienteCorporativo'),
			'FlagCarta' =>                  Yii::t('main', 'contrato.FlagCarta'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
                $criteria->together = true;
    
                //$criteria->addSearchCondition('NomeCliente',$this->Cliente->NomeCliente);
                $criteria->compare('Cliente.NoCliente',$this->NoCliente, true);
                
		$criteria->compare('NoContrato',$this->NoContrato);
		$criteria->compare('CodigoEstadoContr',$this->CodigoEstadoContr,true);
		$criteria->compare('CodigoGrupo',$this->CodigoGrupo,true);
		$criteria->compare('CodigoColegio',$this->CodigoColegio,true);
		$criteria->compare('CodigoMotivoCanc',$this->CodigoMotivoCanc,true);
		$criteria->compare('CondicoesAcesso',$this->CondicoesAcesso,true);
		$criteria->compare('DataInicioContr',$this->DataInicioContr,true);
		$criteria->compare('CodigoDistr',$this->CodigoDistr,true);
		$criteria->compare('DiaVencimento',$this->DiaVencimento);
		$criteria->compare('DataEntregDistrib',$this->DataEntregDistrib,true);
		$criteria->compare('DataDigitacao',$this->DataDigitacao,true);
		$criteria->compare('CodigoTipoCobr',$this->CodigoTipoCobr,true);
		$criteria->compare('DataPrimeiroAcesso',$this->DataPrimeiroAcesso,true);
		$criteria->compare('DataUltimoAcesso',$this->DataUltimoAcesso,true);
		$criteria->compare('NoCliente',$this->NoCliente);
		$criteria->compare('Agencia',$this->Agencia,true);
		$criteria->compare('Conta',$this->Conta,true);
		$criteria->compare('DataCancContr',$this->DataCancContr,true);
		$criteria->compare('Comentario',$this->Comentario,true);
		$criteria->compare('Matricula',$this->Matricula,true);
		$criteria->compare('Verba',$this->Verba,true);
		$criteria->compare('LoginOriginal',$this->LoginOriginal,true);
		$criteria->compare('CartaoCredito',$this->CartaoCredito,true);
		$criteria->compare('ValidCartCredito',$this->ValidCartCredito,true);
		$criteria->compare('cvv',$this->cvv,true);
		$criteria->compare('PrimContat',$this->PrimContat,true);
		$criteria->compare('DataLimPovo',$this->DataLimPovo,true);
		$criteria->compare('CodigoPovo',$this->CodigoPovo,true);
		$criteria->compare('TipoCartCred',$this->TipoCartCred,true);
		$criteria->compare('Localizacao',$this->Localizacao,true);
		$criteria->compare('DataLimiteApuramento',$this->DataLimiteApuramento);
		$criteria->compare('PrimCobr',$this->PrimCobr,true);
		$criteria->compare('dv',$this->dv,true);
		$criteria->compare('ContrAtualizado',$this->ContrAtualizado,true);
		$criteria->compare('CandidatoWebcabo',$this->CandidatoWebcabo,true);
		$criteria->compare('DataImprWE',$this->DataImprWE,true);
		$criteria->compare('TransWE',$this->TransWE,true);
		$criteria->compare('TmpWEDataInit',$this->TmpWEDataInit,true);
		$criteria->compare('TmpWECondicoesAcesso',$this->TmpWECondicoesAcesso,true);
		$criteria->compare('TmpWECondicoesAcAnterior',$this->TmpWECondicoesAcAnterior,true);
		$criteria->compare('Condo',$this->Condo);
		$criteria->compare('grupo_autent',$this->grupo_autent);
		$criteria->compare('qtsimult',$this->qtsimult);
		$criteria->compare('QtSimultPLogin',$this->QtSimultPLogin);
		$criteria->compare('StatusWP',$this->StatusWP,true);
		$criteria->compare('DataImpWP',$this->DataImpWP,true);
		$criteria->compare('TMPWPDataInit',$this->TMPWPDataInit,true);
		$criteria->compare('TMPWPCondicoesAcesso',$this->TMPWPCondicoesAcesso,true);
		$criteria->compare('TMPWPCondicoesAcAnterior',$this->TMPWPCondicoesAcAnterior,true);
		$criteria->compare('DescPont',$this->DescPont,true);
		$criteria->compare('TipoEntrega',$this->TipoEntrega,true);
		$criteria->compare('QtContas',$this->QtContas);
		$criteria->compare('Empresa',$this->Empresa,true);
		$criteria->compare('Fil',$this->Fil,true);
		$criteria->compare('limiteemail',$this->limiteemail);
		$criteria->compare('ClienteCorporativo',$this->ClienteCorporativo,true);
		$criteria->compare('FlagCarta',$this->FlagCarta);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));     
	}
        
        public function OptionsLocalizacao()
        {
            return array(
                '' => '',
                'FOR' => 'FOR',
                'LIM' => 'LIM',
                'ARA' => 'ARA',
            );
        }
        
        public function NomeEmpresa()
        {
            return array(
                '' => '',
                'S' => 'SecrelNet',
                'H' => 'HostWeb',
                'E' => 'Estruturante',
                'D' => 'Documentech'
            );
        }
        
        public function diaVencimento()
        {
             
            for($i=1;$i<=31;$i++){
                echo $i;
            }
            
            return array(
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                '6' => '6',
                '7' => '7',
                '8' => '8',
                '9' => '9',
                '10' => '10',
                '11' => '11',
                '12' => '12',
                '13' => '13',
                '14' => '14',
                '15' => '15',
                '16' => '16',
                '17' => '17',
                '18' => '18',
                '19' => '19',
                '20' => '20',
                '21' => '21',
                '22' => '22',
                '23' => '23',
                '24' => '24',
                '25' => '25',
                '26' => '26',
                '27' => '27',
                '28' => '28',
                '29' => '29',
                '30' => '30',
                '31' => '31',

            ); 
               
        }   
        
        public function primeiroContato()
        {
            return array(
                's'=> Yii::t('main', 'helpers.yes'),
                'n'=> Yii::t('main', 'helpers.no'),
            );
        }
        
        public function filterStatus()
        {
            return array(
                'S' => 'Suspenso',
            );
        }

}
