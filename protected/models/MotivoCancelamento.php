<?php

/**
 * This is the model class for table "RALSecrel.MotivoCancelamento".
 *
 * The followings are the available columns in table 'RALSecrel.MotivoCancelamento':
 * @property string $CodigoMotivoCanc
 * @property string $DescrMotivo
 */
class MotivoCancelamento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MotivoCancelamento the static model class
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
		return Yii::app()->secondb;
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'RALSecrel.MotivoCancelamento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CodigoMotivoCanc, DescrMotivo', 'required'),
			array('CodigoMotivoCanc', 'length', 'max'=>2),
			array('DescrMotivo', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CodigoMotivoCanc, DescrMotivo', 'safe', 'on'=>'search'),
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
                 //'Contrato' => array(self::HAS_MANY, 'Contrato', 'NoContrato'),
            );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CodigoMotivoCanc' => 'Codigo Motivo Canc',
			'DescrMotivo' => 'Descr Motivo',
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

		$criteria->compare('CodigoMotivoCanc',$this->CodigoMotivoCanc,true);
		$criteria->compare('DescrMotivo',$this->DescrMotivo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function behaviors()
        { 
            return array( 'LoggableBehavior'=> 'application.modules.auditTrail.behaviors.LoggableBehavior', );
        }
}