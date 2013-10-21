<?php

/**
 * This is the model class for table "RALSecrel.FormasPagamento".
 *
 * The followings are the available columns in table 'RALSecrel.FormasPagamento':
 * @property string $FormaPaga
 * @property string $DescricaoFormaPag
 * @property string $TipoFormaPag
 */
class FormasPagamento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FormasPagamento the static model class
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
		return 'RALSecrel.FormasPagamento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FormaPaga, DescricaoFormaPag', 'required'),
			array('FormaPaga', 'length', 'max'=>2),
			array('DescricaoFormaPag', 'length', 'max'=>30),
			array('TipoFormaPag', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('FormaPaga, DescricaoFormaPag, TipoFormaPag', 'safe', 'on'=>'search'),
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
			'FormaPaga' => 'Forma Paga',
			'DescricaoFormaPag' => 'Descricao Forma Pag',
			'TipoFormaPag' => 'Tipo Forma Pag',
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

		$criteria->compare('FormaPaga',$this->FormaPaga,true);
		$criteria->compare('DescricaoFormaPag',$this->DescricaoFormaPag,true);
		$criteria->compare('TipoFormaPag',$this->TipoFormaPag,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function behaviors()
        { 
            return array( 'LoggableBehavior'=> 'application.modules.auditTrail.behaviors.LoggableBehavior', );
        }
}