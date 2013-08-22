<?php

/**
 * This is the model class for table "RALSecrel.Faturamento".
 *
 * The followings are the available columns in table 'RALSecrel.Faturamento':
 * @property string $NumeroDup
 * @property string $LoginUsuario
 * @property integer $NoCliente
 * @property integer $NoContrato
 * @property string $FTLoginOriginal
 * @property string $FTNomeUsuario
 * @property string $InicioPeriodo
 * @property string $FimPeriodo
 * @property string $FTVencimento
 * @property string $FTHoras
 * @property string $FTVAssinatura
 * @property string $FTVExtra
 * @property string $FTVAdicional
 * @property string $FTTotal
 * @property string $FTTelefone
 * @property string $CiaCC
 * @property string $NoCC
 * @property string $ValCC
 * @property string $TipoFat
 * @property string $FTDataFat
 * @property string $FTAdTxt
 * @property string $FTExtHoras
 * @property string $NumeroLote
 * @property integer $FTHorasContr
 * @property string $UCConta
 */
class Faturamento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Faturamento the static model class
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
		return 'RALSecrel.Faturamento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NumeroDup, NoCliente, NoContrato, FTLoginOriginal, FTNomeUsuario, InicioPeriodo, FTVencimento, FTHoras, FTVAssinatura, FTVExtra, FTVAdicional, FTTotal', 'required'),
			array('NoCliente, NoContrato, FTHorasContr', 'numerical', 'integerOnly'=>true),
			array('NumeroDup, NoCC, UCConta', 'length', 'max'=>20),
			array('LoginUsuario, FTLoginOriginal', 'length', 'max'=>100),
			array('FTNomeUsuario', 'length', 'max'=>50),
			array('FTHoras, FTExtHoras', 'length', 'max'=>4),
			array('FTVAssinatura, FTVExtra, FTVAdicional, FTTotal', 'length', 'max'=>11),
			array('FTTelefone', 'length', 'max'=>15),
			array('CiaCC', 'length', 'max'=>1),
			array('ValCC', 'length', 'max'=>5),
			array('TipoFat', 'length', 'max'=>2),
			array('FTAdTxt', 'length', 'max'=>35),
			array('NumeroLote', 'length', 'max'=>18),
			array('FimPeriodo, FTDataFat', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NumeroDup, LoginUsuario, NoCliente, NoContrato, FTLoginOriginal, FTNomeUsuario, InicioPeriodo, FimPeriodo, FTVencimento, FTHoras, FTVAssinatura, FTVExtra, FTVAdicional, FTTotal, FTTelefone, CiaCC, NoCC, ValCC, TipoFat, FTDataFat, FTAdTxt, FTExtHoras, NumeroLote, FTHorasContr, UCConta', 'safe', 'on'=>'search'),
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
			'NumeroDup' => 'Numero Dup',
			'LoginUsuario' => 'Login Usuario',
			'NoCliente' => 'No Cliente',
			'NoContrato' => 'No Contrato',
			'FTLoginOriginal' => 'Ftlogin Original',
			'FTNomeUsuario' => 'Ftnome Usuario',
			'InicioPeriodo' => 'Inicio Periodo',
			'FimPeriodo' => 'Fim Periodo',
			'FTVencimento' => 'Ftvencimento',
			'FTHoras' => 'Fthoras',
			'FTVAssinatura' => 'Ftvassinatura',
			'FTVExtra' => 'Ftvextra',
			'FTVAdicional' => 'Ftvadicional',
			'FTTotal' => 'Fttotal',
			'FTTelefone' => 'Fttelefone',
			'CiaCC' => 'Cia Cc',
			'NoCC' => 'No Cc',
			'ValCC' => 'Val Cc',
			'TipoFat' => 'Tipo Fat',
			'FTDataFat' => 'Ftdata Fat',
			'FTAdTxt' => 'Ftad Txt',
			'FTExtHoras' => 'Ftext Horas',
			'NumeroLote' => 'Numero Lote',
			'FTHorasContr' => 'Fthoras Contr',
			'UCConta' => 'Ucconta',
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

		$criteria->compare('NumeroDup',$this->NumeroDup,true);
		$criteria->compare('LoginUsuario',$this->LoginUsuario,true);
		$criteria->compare('NoCliente',$this->NoCliente);
		$criteria->compare('NoContrato',$this->NoContrato);
		$criteria->compare('FTLoginOriginal',$this->FTLoginOriginal,true);
		$criteria->compare('FTNomeUsuario',$this->FTNomeUsuario,true);
		$criteria->compare('InicioPeriodo',$this->InicioPeriodo,true);
		$criteria->compare('FimPeriodo',$this->FimPeriodo,true);
		$criteria->compare('FTVencimento',$this->FTVencimento,true);
		$criteria->compare('FTHoras',$this->FTHoras,true);
		$criteria->compare('FTVAssinatura',$this->FTVAssinatura,true);
		$criteria->compare('FTVExtra',$this->FTVExtra,true);
		$criteria->compare('FTVAdicional',$this->FTVAdicional,true);
		$criteria->compare('FTTotal',$this->FTTotal,true);
		$criteria->compare('FTTelefone',$this->FTTelefone,true);
		$criteria->compare('CiaCC',$this->CiaCC,true);
		$criteria->compare('NoCC',$this->NoCC,true);
		$criteria->compare('ValCC',$this->ValCC,true);
		$criteria->compare('TipoFat',$this->TipoFat,true);
		$criteria->compare('FTDataFat',$this->FTDataFat,true);
		$criteria->compare('FTAdTxt',$this->FTAdTxt,true);
		$criteria->compare('FTExtHoras',$this->FTExtHoras,true);
		$criteria->compare('NumeroLote',$this->NumeroLote,true);
		$criteria->compare('FTHorasContr',$this->FTHorasContr);
		$criteria->compare('UCConta',$this->UCConta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}