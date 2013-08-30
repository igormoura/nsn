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
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ocorrencia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function primaryKey()
    {
      return array('NoContrato','DataOcorrencia');

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
			array('NoContrato, NoOcorrenciaPai, NoChamado, cdproblema, cdServico, cdproblemafec, id_usuario, id_setor, OrigemdaOcorrencia, id_grupo, idUsuarioF', 'numerical', 'integerOnly'=>true),
			array('NomeUsuario, NomeContactado, OrigemEmail', 'length', 'max'=>100),
			array('StatusOcorrencia', 'length', 'max'=>2),
			array('ObsFec', 'length', 'max'=>1000),
			array('NomeUsuarioFec', 'length', 'max'=>20),
			array('flagVisivelCliente, flagSolicitacao', 'length', 'max'=>1),
			array('DataOcorrenciaF, Ocorrencia, dt_hr_ini_atendimento, dt_hr_fim_atendimento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NoContrato, DataOcorrencia, DataOcorrenciaF, NomeUsuario, NomeContactado, Ocorrencia, NoOcorrencia, StatusOcorrencia, NoOcorrenciaPai, NoChamado, cdproblema, cdServico, ObsFec, NomeUsuarioFec, cdproblemafec, dt_hr_ini_atendimento, dt_hr_fim_atendimento, id_usuario, id_setor, OrigemdaOcorrencia, id_grupo, OrigemEmail, idUsuarioF, flagVisivelCliente, flagSolicitacao', 'safe', 'on'=>'search'),
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

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NoContrato' => 'No Contrato',
			'DataOcorrencia' => 'Data Ocorrencia',
			'DataOcorrenciaF' => 'Data Ocorrencia F',
			'NomeUsuario' => 'Nome Usuario',
			'NomeContactado' => 'Nome Contactado',
			'Ocorrencia' => 'Ocorrencia',
			'NoOcorrencia' => 'No Ocorrencia',
			'StatusOcorrencia' => 'Status Ocorrencia',
			'NoOcorrenciaPai' => 'No Ocorrencia Pai',
			'NoChamado' => 'No Chamado',
			'cdproblema' => 'Cdproblema',
			'cdServico' => 'Cd Servico',
			'ObsFec' => 'Obs Fec',
			'NomeUsuarioFec' => 'Nome Usuario Fec',
			'cdproblemafec' => 'Cdproblemafec',
			'dt_hr_ini_atendimento' => 'Dt Hr Ini Atendimento',
			'dt_hr_fim_atendimento' => 'Dt Hr Fim Atendimento',
			'id_usuario' => 'Id Usuario',
			'id_setor' => 'Id Setor',
			'OrigemdaOcorrencia' => 'Origemda Ocorrencia',
			'id_grupo' => 'Id Grupo',
			'OrigemEmail' => 'Origem Email',
			'idUsuarioF' => 'Id Usuario F',
			'flagVisivelCliente' => 'Flag Visivel Cliente',
			'flagSolicitacao' => 'Flag Solicitacao',
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

		$criteria->compare('NoContrato',$this->NoContrato);
		$criteria->compare('DataOcorrencia',$this->DataOcorrencia,true);
		$criteria->compare('DataOcorrenciaF',$this->DataOcorrenciaF,true);
		$criteria->compare('NomeUsuario',$this->NomeUsuario,true);
		$criteria->compare('NomeContactado',$this->NomeContactado,true);
		$criteria->compare('Ocorrencia',$this->Ocorrencia,true);
		$criteria->compare('NoOcorrencia',$this->NoOcorrencia);
		$criteria->compare('StatusOcorrencia',$this->StatusOcorrencia,true);
		$criteria->compare('NoOcorrenciaPai',$this->NoOcorrenciaPai);
		$criteria->compare('NoChamado',$this->NoChamado);
		$criteria->compare('cdproblema',$this->cdproblema);
		$criteria->compare('cdServico',$this->cdServico);
		$criteria->compare('ObsFec',$this->ObsFec,true);
		$criteria->compare('NomeUsuarioFec',$this->NomeUsuarioFec,true);
		$criteria->compare('cdproblemafec',$this->cdproblemafec);
		$criteria->compare('dt_hr_ini_atendimento',$this->dt_hr_ini_atendimento,true);
		$criteria->compare('dt_hr_fim_atendimento',$this->dt_hr_fim_atendimento,true);
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('id_setor',$this->id_setor);
		$criteria->compare('OrigemdaOcorrencia',$this->OrigemdaOcorrencia);
		$criteria->compare('id_grupo',$this->id_grupo);
		$criteria->compare('OrigemEmail',$this->OrigemEmail,true);
		$criteria->compare('idUsuarioF',$this->idUsuarioF);
		$criteria->compare('flagVisivelCliente',$this->flagVisivelCliente,true);
		$criteria->compare('flagSolicitacao',$this->flagSolicitacao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}