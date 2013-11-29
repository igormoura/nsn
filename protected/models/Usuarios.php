<?php

/**
 * This is the model class for table "Usuarios".
 *
 * The followings are the available columns in table 'Usuarios':
 * @property integer $id_usuario
 * @property string $email_usuario
 * @property string $nm_usuario
 * @property string $pw_usuario
 * @property string $home_usuario
 * @property string $foto_usuario
 * @property string $dt_nascimento
 * @property string $cel_usuario
 * @property string $tel_usuario
 * @property string $ramal_usuario
 * @property string $status
 * @property string $nomecompleto_usuario
 * @property integer $cdGrupoVenda
 * @property integer $Id_Supervisor
 * @property string $matricula
 * @property integer $id_cargahora
 * @property string $filial
 * @property string $usuarioad
 * @property integer $VocalixAgenteID
 */
class Usuarios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function getDbConnection()
        {
                return Yii::app()->db;
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
			array('nm_usuario, email_usuario, email_usuario', 'required'),
			array('id_usuario, cdGrupoVenda, Id_Supervisor, id_cargahora, VocalixAgenteID', 'numerical', 'integerOnly'=>true),
			//array('email_usuario, nm_usuario, pw_usuario, home_usuario, nomecompleto_usuario', 'length', 'max'=>100),
			//array('foto_usuario', 'length', 'max'=>50),
                        //array('foto_usuario', 'file', 'types'=>'jpg, gif, png'),
			array('cel_usuario, tel_usuario, ramal_usuario', 'length', 'max'=>10),
			array('status', 'length', 'max'=>1),
			array('matricula', 'length', 'max'=>20),
			array('filial', 'length', 'max'=>3),
			array('usuarioad', 'length', 'max'=>255),
			array('dt_nascimento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_usuario, email_usuario, nm_usuario, pw_usuario, home_usuario, foto_usuario, dt_nascimento, cel_usuario, tel_usuario, ramal_usuario, status, nomecompleto_usuario, cdGrupoVenda, Id_Supervisor, matricula, id_cargahora, filial, usuarioad, VocalixAgenteID', 'safe', 'on'=>'search'),
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
                    'Setor'=>array(self::MANY_MANY, 'Setor', 'usuarios_setor(id_usuario, id_setor)'),
                    'CargaHoraria'=>array(self::BELONGS_TO, 'CargaHoraria', 'id_grupo_horario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_usuario' =>             Yii::t('main','usuarios.id_usuario'),
			'email_usuario' =>          Yii::t('main','usuarios.email_usuario'),
			'nm_usuario' =>             Yii::t('main','usuarios.nm_usuario'),
			'pw_usuario' =>             Yii::t('main','usuarios.pw_usuario'),
			'home_usuario' =>           Yii::t('main','usuarios.home_usuario'),
			'foto_usuario' =>           Yii::t('main','usuarios.foto_usuario'),
			'dt_nascimento' =>          Yii::t('main','usuarios.dt_nascimento'),
			'cel_usuario' =>            Yii::t('main','usuarios.cel_usuario'),
			'tel_usuario' =>            Yii::t('main','usuarios.tel_usuario'),
			'ramal_usuario' =>          Yii::t('main','usuarios.ramal_usuario'),
			'status' =>                 Yii::t('main','usuarios.status'),
			'nomecompleto_usuario' =>   Yii::t('main','usuarios.nomecompleto_usuario'),
			'cdGrupoVenda' =>           Yii::t('main','usuarios.cdGrupoVenda'),
			'Id_Supervisor' =>          Yii::t('main','usuarios.Id_Supervisor'),
			'matricula' =>              Yii::t('main','usuarios.matricula'),
			'id_cargahora' =>           Yii::t('main','usuarios.id_cargahora'),
			'filial' =>                 Yii::t('main','usuarios.filial'),
			'usuarioad' =>              Yii::t('main','usuarios.usuarioad'),
			'VocalixAgenteID' =>        Yii::t('main','usuarios.VocalixAgenteID'),
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

		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('email_usuario',$this->email_usuario,true);
		$criteria->compare('nm_usuario',$this->nm_usuario,true);
		$criteria->compare('pw_usuario',$this->pw_usuario,true);
		$criteria->compare('home_usuario',$this->home_usuario,true);
		$criteria->compare('foto_usuario',$this->foto_usuario,true);
		$criteria->compare('dt_nascimento',$this->dt_nascimento,true);
		$criteria->compare('cel_usuario',$this->cel_usuario,true);
		$criteria->compare('tel_usuario',$this->tel_usuario,true);
		$criteria->compare('ramal_usuario',$this->ramal_usuario,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('nomecompleto_usuario',$this->nomecompleto_usuario,true);
		$criteria->compare('cdGrupoVenda',$this->cdGrupoVenda);
		$criteria->compare('Id_Supervisor',$this->Id_Supervisor);
		$criteria->compare('matricula',$this->matricula,true);
		$criteria->compare('id_cargahora',$this->id_cargahora);
		$criteria->compare('filial',$this->filial,true);
		$criteria->compare('usuarioad',$this->usuarioad,true);
		$criteria->compare('VocalixAgenteID',$this->VocalixAgenteID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array(
                              // 'defaultOrder'=>'stamp DESC',
                                'attributes'=>array('')
                            )
		));
	}
        
        public function behaviors()
        { 
            return array( 'LoggableBehavior'=> 'application.modules.auditTrail.behaviors.LoggableBehavior', );
        }
}