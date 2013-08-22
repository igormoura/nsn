<?php

/**
 * This is the model class for table "RALSecrel.TipoCobranca".
 *
 * The followings are the available columns in table 'RALSecrel.TipoCobranca':
 * @property string $CodigoTipoCobr
 * @property string $CodigoConvenio
 * @property string $FormaPaga
 * @property string $DescrTipoCobr
 */
class TipoCobranca extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TipoCobranca the static model class
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
		return 'RALSecrel.TipoCobranca';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CodigoTipoCobr, FormaPaga, DescrTipoCobr', 'required'),
			array('CodigoTipoCobr, CodigoConvenio, FormaPaga', 'length', 'max'=>2),
			array('DescrTipoCobr', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CodigoTipoCobr, CodigoConvenio, FormaPaga, DescrTipoCobr', 'safe', 'on'=>'search'),
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
			'CodigoTipoCobr' => 'Codigo Tipo Cobr',
			'CodigoConvenio' => 'Codigo Convenio',
			'FormaPaga' => 'Forma Paga',
			'DescrTipoCobr' => 'Descr Tipo Cobr',
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

		$criteria->compare('CodigoTipoCobr',$this->CodigoTipoCobr,true);
		$criteria->compare('CodigoConvenio',$this->CodigoConvenio,true);
		$criteria->compare('FormaPaga',$this->FormaPaga,true);
		$criteria->compare('DescrTipoCobr',$this->DescrTipoCobr,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}