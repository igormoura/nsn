<?php

/**
 * This is the model class for table "NomesEmpresas".
 *
 * The followings are the available columns in table 'NomesEmpresas':
 * @property string $NomeCB
 * @property string $Nome
 * @property string $Empresa
 * @property string $Ordem
 */
class NomesEmpresas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NomesEmpresas the static model class
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
		return 'NomesEmpresas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nome, Empresa', 'required'),
			array('NomeCB, Nome', 'length', 'max'=>200),
			array('Empresa', 'length', 'max'=>50),
			array('Ordem', 'length', 'max'=>19),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NomeCB, Nome, Empresa, Ordem', 'safe', 'on'=>'search'),
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
			'NomeCB' => 'Nome Cb',
			'Nome' => 'Nome',
			'Empresa' => 'Empresa',
			'Ordem' => 'Ordem',
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

		$criteria->compare('NomeCB',$this->NomeCB,true);
		$criteria->compare('Nome',$this->Nome,true);
		$criteria->compare('Empresa',$this->Empresa,true);
		$criteria->compare('Ordem',$this->Ordem,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function behaviors()
        { 
            return array( 'LoggableBehavior'=> 'application.modules.auditTrail.behaviors.LoggableBehavior', );
        }
}