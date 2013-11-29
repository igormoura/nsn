<?php

/**
 * This is the model class for table "TipoServico".
 *
 * The followings are the available columns in table 'TipoServico':
 * @property integer $cdservico
 * @property string $nmservico
 * @property string $dsservico
 * @property string $ativo
 */
class TipoServico extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TipoServico the static model class
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
		return 'TipoServico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cdservico', 'required'),
			array('cdservico', 'numerical', 'integerOnly'=>true),
			array('nmservico, dsservico', 'length', 'max'=>100),
			array('ativo', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cdservico, nmservico, dsservico, ativo', 'safe', 'on'=>'search'),
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
			'cdservico' => 'Cdservico',
			'nmservico' => 'Serviço',
			'dsservico' => 'Dsservico',
			'ativo' => 'Ativo',
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

		$criteria->compare('cdservico',$this->cdservico);
		$criteria->compare('nmservico',$this->nmservico,true);
		$criteria->compare('dsservico',$this->dsservico,true);
		$criteria->compare('ativo',$this->ativo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}