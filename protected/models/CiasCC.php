<?php

/**
 * This is the model class for table "RALSecrel.CiasCC".
 *
 * The followings are the available columns in table 'RALSecrel.CiasCC':
 * @property string $CodigoCiaCC
 * @property string $NomeCiaCC
 * @property double $TaxaCC
 */
class CiasCC extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CiasCC the static model class
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
		return 'RALSecrel.CiasCC';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NomeCiaCC', 'required'),
			array('TaxaCC', 'numerical'),
			array('CodigoCiaCC', 'length', 'max'=>1),
			array('NomeCiaCC', 'length', 'max'=>25),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CodigoCiaCC, NomeCiaCC, TaxaCC', 'safe', 'on'=>'search'),
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
			'CodigoCiaCC' => 'Codigo Cia Cc',
			'NomeCiaCC' => 'Nome Cia Cc',
			'TaxaCC' => 'Taxa Cc',
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

		$criteria->compare('CodigoCiaCC',$this->CodigoCiaCC,true);
		$criteria->compare('NomeCiaCC',$this->NomeCiaCC,true);
		$criteria->compare('TaxaCC',$this->TaxaCC);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}