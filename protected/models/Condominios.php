<?php

/**
 * This is the model class for table "RALSecrel.Condominios".
 *
 * The followings are the available columns in table 'RALSecrel.Condominios':
 * @property integer $NoCondo
 * @property string $NomeCondo
 * @property string $Endereco
 * @property string $Bairro
 * @property string $Cidade
 * @property string $Estado
 * @property string $CEP
 * @property string $CNPJ
 * @property string $FoneContato
 * @property string $Contato
 * @property string $FAX
 * @property string $EMail
 * @property string $TipoCondoResCom
 * @property integer $QuantUnidades
 * @property string $DataContratacao
 * @property integer $ClientesAtivos
 * @property integer $Status
 * @property integer $QuantMinima
 * @property string $obsCondo
 */
class Condominios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Condominios the static model class
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
		return 'RALSecrel.Condominios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NomeCondo, Endereco, Bairro, Cidade, Estado, CEP, TipoCondoResCom, QuantUnidades', 'required'),
			array('QuantUnidades, ClientesAtivos, Status, QuantMinima', 'numerical', 'integerOnly'=>true),
			array('NomeCondo, Endereco, Contato', 'length', 'max'=>50),
			array('Bairro, CNPJ, FoneContato, FAX', 'length', 'max'=>20),
			array('Cidade', 'length', 'max'=>30),
			array('Estado', 'length', 'max'=>2),
			array('CEP', 'length', 'max'=>10),
			array('EMail', 'length', 'max'=>100),
			array('TipoCondoResCom', 'length', 'max'=>1),
			array('obsCondo', 'length', 'max'=>255),
			array('DataContratacao', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NoCondo, NomeCondo, Endereco, Bairro, Cidade, Estado, CEP, CNPJ, FoneContato, Contato, FAX, EMail, TipoCondoResCom, QuantUnidades, DataContratacao, ClientesAtivos, Status, QuantMinima, obsCondo', 'safe', 'on'=>'search'),
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
			'NoCondo' => 'No Condo',
			'NomeCondo' => 'Nome Condo',
			'Endereco' => 'Endereco',
			'Bairro' => 'Bairro',
			'Cidade' => 'Cidade',
			'Estado' => 'Estado',
			'CEP' => 'Cep',
			'CNPJ' => 'Cnpj',
			'FoneContato' => 'Fone Contato',
			'Contato' => 'Contato',
			'FAX' => 'Fax',
			'EMail' => 'Email',
			'TipoCondoResCom' => 'Tipo Condo Res Com',
			'QuantUnidades' => 'Quant Unidades',
			'DataContratacao' => 'Data Contratacao',
			'ClientesAtivos' => 'Clientes Ativos',
			'Status' => 'Status',
			'QuantMinima' => 'Quant Minima',
			'obsCondo' => 'Obs Condo',
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

		$criteria->compare('NoCondo',$this->NoCondo);
		$criteria->compare('NomeCondo',$this->NomeCondo,true);
		$criteria->compare('Endereco',$this->Endereco,true);
		$criteria->compare('Bairro',$this->Bairro,true);
		$criteria->compare('Cidade',$this->Cidade,true);
		$criteria->compare('Estado',$this->Estado,true);
		$criteria->compare('CEP',$this->CEP,true);
		$criteria->compare('CNPJ',$this->CNPJ,true);
		$criteria->compare('FoneContato',$this->FoneContato,true);
		$criteria->compare('Contato',$this->Contato,true);
		$criteria->compare('FAX',$this->FAX,true);
		$criteria->compare('EMail',$this->EMail,true);
		$criteria->compare('TipoCondoResCom',$this->TipoCondoResCom,true);
		$criteria->compare('QuantUnidades',$this->QuantUnidades);
		$criteria->compare('DataContratacao',$this->DataContratacao,true);
		$criteria->compare('ClientesAtivos',$this->ClientesAtivos);
		$criteria->compare('Status',$this->Status);
		$criteria->compare('QuantMinima',$this->QuantMinima);
		$criteria->compare('obsCondo',$this->obsCondo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}