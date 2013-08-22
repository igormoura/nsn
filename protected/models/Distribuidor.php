<?php

/**
 * This is the model class for table "RALSecrel.Distribuidor".
 *
 * The followings are the available columns in table 'RALSecrel.Distribuidor':
 * @property string $CodigoDistr
 * @property string $NomeDistr
 * @property integer $NoCliente
 * @property string $DistribGrat
 * @property string $Contato
 * @property string $Telefone
 * @property string $TipoLogradouro
 * @property string $NomeLogradouro
 * @property string $NumeroLogradouro
 * @property string $NumeroApto
 * @property string $Complemento
 * @property string $Bairro
 * @property string $Cidade
 * @property string $Esdtado
 * @property string $CEP
 * @property string $PassDistr
 *
 * The followings are the available model relations:
 * @property VendedorNET[] $vendedorNETs
 */
class Distribuidor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Distribuidor the static model class
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
		return 'RALSecrel.Distribuidor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CodigoDistr, NomeDistr, NoCliente', 'required'),
			array('NoCliente', 'numerical', 'integerOnly'=>true),
			array('CodigoDistr, NumeroLogradouro, NumeroApto', 'length', 'max'=>5),
			array('NomeDistr, Bairro', 'length', 'max'=>20),
			array('DistribGrat', 'length', 'max'=>1),
			array('Contato', 'length', 'max'=>100),
			array('Telefone, NomeLogradouro, Complemento', 'length', 'max'=>50),
			array('TipoLogradouro, Esdtado', 'length', 'max'=>2),
			array('Cidade', 'length', 'max'=>30),
			array('CEP', 'length', 'max'=>10),
			array('PassDistr', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CodigoDistr, NomeDistr, NoCliente, DistribGrat, Contato, Telefone, TipoLogradouro, NomeLogradouro, NumeroLogradouro, NumeroApto, Complemento, Bairro, Cidade, Esdtado, CEP, PassDistr', 'safe', 'on'=>'search'),
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
			'vendedorNETs' => array(self::HAS_MANY, 'VendedorNET', 'CodigoDistr'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CodigoDistr' => 'Codigo Distr',
			'NomeDistr' => 'Nome Distr',
			'NoCliente' => 'No Cliente',
			'DistribGrat' => 'Distrib Grat',
			'Contato' => 'Contato',
			'Telefone' => 'Telefone',
			'TipoLogradouro' => 'Tipo Logradouro',
			'NomeLogradouro' => 'Nome Logradouro',
			'NumeroLogradouro' => 'Numero Logradouro',
			'NumeroApto' => 'Numero Apto',
			'Complemento' => 'Complemento',
			'Bairro' => 'Bairro',
			'Cidade' => 'Cidade',
			'Esdtado' => 'Esdtado',
			'CEP' => 'Cep',
			'PassDistr' => 'Pass Distr',
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

		$criteria->compare('CodigoDistr',$this->CodigoDistr,true);
		$criteria->compare('NomeDistr',$this->NomeDistr,true);
		$criteria->compare('NoCliente',$this->NoCliente);
		$criteria->compare('DistribGrat',$this->DistribGrat,true);
		$criteria->compare('Contato',$this->Contato,true);
		$criteria->compare('Telefone',$this->Telefone,true);
		$criteria->compare('TipoLogradouro',$this->TipoLogradouro,true);
		$criteria->compare('NomeLogradouro',$this->NomeLogradouro,true);
		$criteria->compare('NumeroLogradouro',$this->NumeroLogradouro,true);
		$criteria->compare('NumeroApto',$this->NumeroApto,true);
		$criteria->compare('Complemento',$this->Complemento,true);
		$criteria->compare('Bairro',$this->Bairro,true);
		$criteria->compare('Cidade',$this->Cidade,true);
		$criteria->compare('Esdtado',$this->Esdtado,true);
		$criteria->compare('CEP',$this->CEP,true);
		$criteria->compare('PassDistr',$this->PassDistr,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}