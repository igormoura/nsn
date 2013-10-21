<?php

/**
 * This is the model class for table "Log".
 *
 * The followings are the available columns in table 'Log':
 * @property integer $id_log
 * @property integer $id_usuario
 * @property string $dt_transacao
 * @property string $arquivo_asp
 * @property string $operacao
 * @property integer $nocontrato
 * @property string $val_ant
 * @property string $val_atu
 */
class Log extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Log the static model class
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
		return 'Log';
	}
        
        /**
         * 
         * @return string column define primary Key
         */
        public function primaryKey()
        {
           return array('id_log', 'id_usuario');
        }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_log, id_usuario', 'required'),
			array('id_log, id_usuario, nocontrato', 'numerical', 'integerOnly'=>true),
			array('arquivo_asp', 'length', 'max'=>50),
			array('operacao', 'length', 'max'=>3),
			array('dt_transacao, val_ant, val_atu', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_log, id_usuario, dt_transacao, arquivo_asp, operacao, nocontrato, val_ant, val_atu', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_log' => 'Id Log',
			'id_usuario' => 'Id Usuario',
			'dt_transacao' => 'Dt Transacao',
			'arquivo_asp' => 'Arquivo Asp',
			'operacao' => 'Operacao',
			'nocontrato' => 'Nocontrato',
			'val_ant' => 'Val Ant',
			'val_atu' => 'Val Atu',
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

		$criteria->compare('id_log',$this->id_log);
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('dt_transacao',$this->dt_transacao,true);
		$criteria->compare('arquivo_asp',$this->arquivo_asp,true);
		$criteria->compare('operacao',$this->operacao,true);
		$criteria->compare('nocontrato',$this->nocontrato);
		$criteria->compare('val_ant',$this->val_ant,true);
		$criteria->compare('val_atu',$this->val_atu,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function behaviors()
        { 
            return array( 'LoggableBehavior'=> 'application.modules.auditTrail.behaviors.LoggableBehavior', );
        }
}