<?php

/**
 * This is the model class for table "Ocorrencia".
 *
 * The followings are the available columns in table 'Ocorrencia':
 * @property integer $NoContrato
 * @property string $DataOcorrencia
 * @property string $DataOcorrenciaF
 * @property string $NomeUsuario
 * @property string $NomeContactado
 * @property string $Ocorrencia
 * @property integer $NoOcorrencia
 * @property string $StatusOcorrencia
 * @property integer $NoOcorrenciaPai
 * @property integer $NoChamado
 * @property integer $cdproblema
 * @property integer $cdServico
 * @property string $ObsFec
 * @property string $NomeUsuarioFec
 * @property integer $cdproblemafec
 * @property string $dt_hr_ini_atendimento
 * @property string $dt_hr_fim_atendimento
 * @property integer $id_usuario
 * @property integer $id_setor
 * @property integer $OrigemdaOcorrencia
 * @property integer $id_grupo
 * @property string $OrigemEmail
 * @property integer $idUsuarioF
 * @property string $flagVisivelCliente
 * @property string $flagSolicitacao
 */
class Ocorrencia extends CActiveRecord
{
        public $sizeChart;
        public $totalChart;
        
        //GETTER AND SETTER
        public function getSizeChart(){
            return $this->sizeChart;
        }
        
        public function setSizeChart($sizeChart) {
            $this->sizeChart = $sizeChart;
        }

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ocorrencia the static model class
	 */
	public static function model($className=__CLASS__)
	{
            return parent::model($className);
	}

        /**
	 * @return CDbConnection database connection
	 */
	public function getDbConnection()
	{
		return Yii::app()->thirdb;
	}
        
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Ocorrencia';
	}
        
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NoContrato', 'required'),
			//array('NoContrato, NoOcorrenciaPai, NoChamado, cdproblema, cdServico, cdproblemafec, id_usuario, id_setor, OrigemdaOcorrencia, id_grupo, idUsuarioF', 'numerical', 'integerOnly'=>true),
			array('NomeUsuario, NomeContactado, OrigemEmail', 'length', 'max'=>100),
			array('StatusOcorrencia', 'length', 'max'=>2),
			array('ObsFec', 'length', 'max'=>1000),
			array('NomeUsuarioFec', 'length', 'max'=>20),
			array('flagVisivelCliente, flagSolicitacao', 'length', 'max'=>1),
			array('DataOcorrenciaF, Ocorrencia, dt_hr_ini_atendimento, dt_hr_fim_atendimento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('totalChart, sizeChart, NoContrato, DataOcorrencia, DataOcorrenciaF, NomeUsuario, NomeContactado, Ocorrencia, NoOcorrencia, StatusOcorrencia, NoOcorrenciaPai, NoChamado, cdproblema, cdServico, ObsFec, NomeUsuarioFec, cdproblemafec, dt_hr_ini_atendimento, dt_hr_fim_atendimento, id_usuario, id_setor, OrigemdaOcorrencia, id_grupo, OrigemEmail, idUsuarioF, flagVisivelCliente, flagSolicitacao', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'Contrato' => array(self::BELONGS_TO, 'Contrato', 'NoContrato'),
                        'TipoServico' => array(self::BELONGS_TO, 'TipoServico', 'cdServico'),
                        'TipoProblema' => array(self::BELONGS_TO, 'TipoProblema', 'cdproblema'),
                        //'OcorrenciaStatus' => array(self::BELONGS_TO, 'OcorrenciaStatus', 'cdStatus'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NoContrato' =>             Yii::t('main','ocorrencia.NoContrato'),
			'DataOcorrencia' =>         Yii::t('main','ocorrencia.DataOcorrencia'),
			'DataOcorrenciaF' =>        Yii::t('main','ocorrencia.DataOcorrenciaF'),
			'NomeUsuario' =>            Yii::t('main','ocorrencia.NomeUsuario'),
			'NomeContactado' =>         Yii::t('main','ocorrencia.NomeContactado'),
			'Ocorrencia' =>             Yii::t('main','ocorrencia.Ocorrencia'),
			'NoOcorrencia' =>           Yii::t('main','ocorrencia.NoOcorrencia'),
			'StatusOcorrencia' =>       Yii::t('main','ocorrencia.StatusOcorrencia'),
			'NoOcorrenciaPai' =>        Yii::t('main','ocorrencia.NoOcorrenciaPai'),
			'NoChamado' =>              Yii::t('main','ocorrencia.NoChamado'),
			'cdproblema' =>             Yii::t('main','ocorrencia.cdproblema'),
			'cdServico' =>              Yii::t('main','ocorrencia.cdServico'),
			'ObsFec' =>                 Yii::t('main','ocorrencia.ObsFec'),
			'NomeUsuarioFec' =>         Yii::t('main','ocorrencia.NomeUsuarioFec'),
			'cdproblemafec' =>          Yii::t('main','ocorrencia.cdproblemafec'),
			'dt_hr_ini_atendimento' =>  Yii::t('main','ocorrencia.dt_hr_ini_atendimento'),
			'dt_hr_fim_atendimento' =>  Yii::t('main','ocorrencia.dt_hr_fim_atendimento'),
			'id_usuario' =>             Yii::t('main','ocorrencia.id_usuario'),
			'id_setor' =>               Yii::t('main','ocorrencia.id_setor'),
			'OrigemdaOcorrencia' =>     Yii::t('main','ocorrencia.OrigemdaOcorrencia'),
			'id_grupo' =>               Yii::t('main','ocorrencia.id_grupo'),
			'OrigemEmail' =>            Yii::t('main','ocorrencia.OrigemEmail'),
			'idUsuarioF' =>             Yii::t('main','ocorrencia.idUsuarioF'),
			'flagVisivelCliente' =>     Yii::t('main','ocorrencia.flagVisivelCliente'),
			'flagSolicitacao' =>        Yii::t('main','ocorrencia.flagSolicitacao'),
                        'sizeChart' =>              Yii::t('main','ocorrencia.sizeChart'),
		);
	}

	/**
	 * Recupera uma lista de modelos baseados na pesquisa atual / condições do filtro.
	 * @return CActiveDataProvider o provedor de dados que pode retornar os modelos baseados na pesquisa / condições do filtro.
	 */
	public function search()
	{
		// Aviso: Por favor, modificar o código a seguir para remover os atributos que
		// não devem ser pesquisados.
		$criteria=new CDbCriteria;
                
		$criteria->compare('NomeUsuario',$this->NomeUsuario, true);
		$criteria->compare('cdServico',$this->cdServico, true);
		$criteria->compare('StatusOcorrencia',$this->StatusOcorrencia);
                //$criteria->compare('sizeChart', $this->sizeChart);
                //$criteria->compare('totalChart', $this->totalChart);
                
                // BUSCAR POR PERÍODO [DATAOCORRENCIA]                                                                
                $helper = new Helpers();
                $aux = $helper->buscarPorPeriodo($this->DataOcorrencia);
                $criteria->addBetweenCondition('DataOcorrencia', $aux['0'] , $aux['1'], true);     
                
		$dataProvider =  new CActiveDataProvider($this, array(
                   'criteria'=>$criteria,    
                   'pagination'=>array('pageSize'=>5),
                   'sort'=>array(
                           'defaultOrder'=>'DataOcorrencia DESC',
                           'attributes'=>array('')
                        ),
                    
		));
                return $dataProvider;            
	}
        
        // ADICIONA A AUDITORIA
        public function behaviors()
        { 
            return array( 'LoggableBehavior'=> 'application.modules.auditTrail.behaviors.LoggableBehavior', );
        }
        
}