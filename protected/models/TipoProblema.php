<?php

/**
 * This is the model class for table "TipoProblema".
 *
 * The followings are the available columns in table 'TipoProblema':
 * @property integer $cdproblema
 * @property string $dsproblema
 * @property integer $indcontabilizacao
 * @property integer $flagfechamento
 * @property integer $acessoexterno
 * @property string $transacaoseguinte
 * @property string $ativo
 * @property string $tipo
 */
class TipoProblema extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TipoProblema the static model class
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
		return 'TipoProblema';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cdproblema', 'required'),
			array('cdproblema, indcontabilizacao, flagfechamento, acessoexterno', 'numerical', 'integerOnly'=>true),
			array('dsproblema', 'length', 'max'=>50),
			array('transacaoseguinte', 'length', 'max'=>100),
			array('ativo, tipo', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cdproblema, dsproblema, indcontabilizacao, flagfechamento, acessoexterno, transacaoseguinte, ativo, tipo', 'safe', 'on'=>'search'),
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
			'cdproblema' => 'Cdproblema',
			'dsproblema' => 'Problema',
			'indcontabilizacao' => 'Indcontabilizacao',
			'flagfechamento' => 'Flagfechamento',
			'acessoexterno' => 'Acessoexterno',
			'transacaoseguinte' => 'Transacaoseguinte',
			'ativo' => 'Ativo',
			'tipo' => 'Tipo',
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

		$criteria->compare('cdproblema',$this->cdproblema);
		$criteria->compare('dsproblema',$this->dsproblema,true);
		$criteria->compare('indcontabilizacao',$this->indcontabilizacao);
		$criteria->compare('flagfechamento',$this->flagfechamento);
		$criteria->compare('acessoexterno',$this->acessoexterno);
		$criteria->compare('transacaoseguinte',$this->transacaoseguinte,true);
		$criteria->compare('ativo',$this->ativo,true);
		$criteria->compare('tipo',$this->tipo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}