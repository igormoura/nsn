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


include 'Helpers.php';
class Contrato extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contrato the static model class
	 */
    
   public $sizeChart;
   public $totalChart;
    
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
			array('totalChart, sizeChart, NoContrato, CodigoEstadoContr, CodigoGrupo, CodigoColegio, CodigoMotivoCanc, CondicoesAcesso, DataInicioContr, CodigoDistr, DiaVencimento, DataEntregDistrib, DataDigitacao, CodigoTipoCobr, DataPrimeiroAcesso, DataUltimoAcesso, NoCliente, Agencia, Conta, DataCancContr, Comentario, Matricula, Verba, LoginOriginal, CartaoCredito, ValidCartCredito, cvv, PrimContat, DataLimPovo, CodigoPovo, TipoCartCred, Localizacao, DataLimiteApuramento, PrimCobr, dv, ContrAtualizado, CandidatoWebcabo, DataImprWE, TransWE, TmpWEDataInit, TmpWECondicoesAcesso, TmpWECondicoesAcAnterior, Condo, grupo_autent, qtsimult, QtSimultPLogin, StatusWP, DataImpWP, TMPWPDataInit, TMPWPCondicoesAcesso, TMPWPCondicoesAcAnterior, DescPont, TipoEntrega, QtContas, Empresa, Fil, limiteemail, ClienteCorporativo, FlagCarta', 'safe', 'on'=>'search'),
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
                //'MotivoCancelamento' => array(self::BELONGS_TO, 'MotivoCancelamento', 'CodigoMotivoCanc'),
                'TipoCobranca' => array(self::BELONGS_TO, 'TipoCobranca', 'CodigoTipoCobr'),
                'NomesEmpresas' => array(self::BELONGS_TO, 'NomesEmpresas', 'Empresa'),
                'Cliente' => array(self::BELONGS_TO, 'Cliente', 'NoCliente'),
                'CobrAdic' => array(self::HAS_MANY, 'CobrAdic', 'NoContrato'),
                'NetAcessos' => array(self::HAS_MANY, 'NetAcessos', 'NoContrato'),
                'Ocorrencia' => array(self::HAS_MANY, 'Ocorrencia', 'NoContrato'),
                'EstadoAcesso' => array(self::BELONGS_TO, 'EstadoAcesso', 'CodigoEstadoAcesso')
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
                
                $helper = new Helpers();
                $aux = $helper->buscarPorPeriodo($this->DataCancContr);
                $criteria->addBetweenCondition('DataCancContr', $aux['0'] , $aux['1'], true);  

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));     
	}

        public function dashboardCancelamentos($valor){
            $helper = new Helpers();
            $aux = $helper->buscarPorPeriodo($this->DataCancContr);
            $selectTop = $helper->selectTop($this->sizeChart,$this->totalChart);
            
            $grupoServicos = Yii::app()->thirdb->createCommand()
            ->select($selectTop.'CdGrupoServ,NmGrupoServ,sum(Valor) Valor')
            ->from('dashboardServicosCanceladosView')
            ->where("dtCanc >= '".$aux['0']."' and dtcanc < '".$aux['1']."' ")
            ->group('CdGrupoServ,NmGrupoServ')
            ->order('Valor desc')
            ->queryAll();
            
            $grupoServico = array();
            $grupoServicoBar = array();
            
             foreach ($grupoServicos as $aux) { 
                $aux = (object) $aux;
                //Pizza
                $grupoServico[] = array($aux->NmGrupoServ, intval($aux->Valor));
                // Barra
                $grupoServicoBar[] = array('name' => $aux->NmGrupoServ, 'type' => 'column', 'data' => array(intval($aux->Valor)));
            }

            $motivos = Yii::app()->thirdb->createCommand()
            ->select($selectTop." isnull(DescrMotivo,'Não Cadastrado') MotivoCanc,sum(Valor) Valor")
            ->from('dashboardServicosCanceladosView')
            ->where("dtCanc >= '2013-01-01' and dtcanc < '2013-01-03' ")
            ->group("isnull(DescrMotivo,'Não Cadastrado')")
            ->order('Valor desc')
            ->queryAll();
            
            $motivo = array();
            $motivoBar = array();
            
            foreach ($motivos as $aux) { 
                // $motivo = (object) $motivo;
                // Pizza
                $motivo[] = array($aux['MotivoCanc'], intval($aux['Valor']));
                // Barra
                $motivoBar[] = array('name' => $aux['MotivoCanc'], 'type' => 'column', 'data' => array(intval($aux['Valor'])));
            }
                   
            if($valor == 'grupoServico'){
                return $grupoServico;
            }elseif($valor == 'grupoServicoBar'){
                return $grupoServicoBar;
            }elseif($valor == 'motivo'){
                return $motivo;
            }elseif($valor == 'motivoBar'){
                return $motivoBar;
            }

        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        public function locFil()
        {
            return array(
                ''    => '',
                'FOR' => 'FOR',
                'LIM' => 'LIM',
                'ARA' => 'ARA',
                'THE' => 'THE',
                'QMB' => 'QMB',
                'IGU' => 'IGU',
                'PHB' => 'PHB',
            );
        }
        
        public function NomeEmpresa()
        {
            return array(
                ''  => '',
                'S' => 'SecrelNet',
                'H' => 'HostWeb',
                'E' => 'Estruturante',
                'D' => 'Documentech'
            );
        }
        
        function diaVencimento(){
            $rows = array();
            for($i=1;$i<=31;$i++){
                $rows[] = $i;
            }
            return $rows;
        }  
        
        public function primeiroContato()
        {
            return array(
                's'=> Yii::t('main', 'helper.yes'),
                'n'=> Yii::t('main', 'helper.no'),
            );
        }
        
        public function filterStatus()
        {
            return array(
                'S' => 'Suspenso',
            );
        }
        
        public function behaviors()
        { 
            return array( 'LoggableBehavior'=> 'application.modules.auditTrail.behaviors.LoggableBehavior', );
        }

}
