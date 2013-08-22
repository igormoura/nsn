<?php

/**
 * This is the model class for table "Usuarios".
 *
 * The followings are the available columns in table 'Usuarios':
 * @property integer $idUsuario
 * @property string $NomeUsuario
 * @property string $UsuarioDB
 * @property string $SenhaDB
 * @property string $UsuarioAD
 * @property string $Email
 * @property integer $idDominioLogon
 * @property integer $idVocalixAgent
 * @property integer $Status
 * @property integer $idUsuarioSHIP
 * @property integer $idUsuarioSNETD
 *
 * The followings are the available model relations:
 * @property DominiosLogon $idDominioLogon0
 * @property UsuarioDepartamento $usuarioDepartamento
 * @property Menus[] $menuses
 * @property UsuarioPerfil[] $usuarioPerfils
 * @property Auditorias[] $auditoriases
 */
class Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idUsuario, NomeUsuario, UsuarioDB, SenhaDB, Email', 'required'),
			array('idUsuario, idDominioLogon, idVocalixAgent, Status, idUsuarioSHIP, idUsuarioSNETD', 'numerical', 'integerOnly'=>true),
			array('NomeUsuario, UsuarioDB, SenhaDB, UsuarioAD', 'length', 'max'=>50),
			array('Email', 'length', 'max'=>80),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idUsuario, NomeUsuario, UsuarioDB, SenhaDB, UsuarioAD, Email, idDominioLogon, idVocalixAgent, Status, idUsuarioSHIP, idUsuarioSNETD', 'safe', 'on'=>'search'),
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
			'idDominioLogon0' => array(self::BELONGS_TO, 'DominiosLogon', 'idDominioLogon'),
			'usuarioDepartamento' => array(self::HAS_ONE, 'UsuarioDepartamento', 'idUsuario'),
			'menuses' => array(self::MANY_MANY, 'Menus', 'UsuarioMenu(IdUsuario, idMenu)'),
			'usuarioPerfils' => array(self::HAS_MANY, 'UsuarioPerfil', 'idUsuario'),
			'auditoriases' => array(self::HAS_MANY, 'Auditorias', 'IdUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUsuario' => 'Id Usuario',
			'NomeUsuario' => 'Nome Usuario',
			'UsuarioDB' => 'Usuario Db',
			'SenhaDB' => 'Senha Db',
			'UsuarioAD' => 'Usuario Ad',
			'Email' => 'Email',
			'idDominioLogon' => 'Id Dominio Logon',
			'idVocalixAgent' => 'Id Vocalix Agent',
			'Status' => 'Status',
			'idUsuarioSHIP' => 'Id Usuario Ship',
			'idUsuarioSNETD' => 'Id Usuario Snetd',
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

		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('NomeUsuario',$this->NomeUsuario,true);
		$criteria->compare('UsuarioDB',$this->UsuarioDB,true);
		$criteria->compare('SenhaDB',$this->SenhaDB,true);
		$criteria->compare('UsuarioAD',$this->UsuarioAD,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('idDominioLogon',$this->idDominioLogon);
		$criteria->compare('idVocalixAgent',$this->idVocalixAgent);
		$criteria->compare('Status',$this->Status);
		$criteria->compare('idUsuarioSHIP',$this->idUsuarioSHIP);
		$criteria->compare('idUsuarioSNETD',$this->idUsuarioSNETD);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}