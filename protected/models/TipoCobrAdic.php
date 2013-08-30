<?php

/**
 * This is the model class for table "RALSecrel.TipoCobrAdic".
 *
 * The followings are the available columns in table 'RALSecrel.TipoCobrAdic':
 * @property string $TipoCobrAdic
 * @property string $DescrTipo
 * @property string $FreqCobr
 * @property string $FonteArrecad
 * @property string $Valor
 * @property integer $GrupoServ
 * @property string $FlagComercializacao
 * @property string $pacote
 * @property string $DescricaoSite
 * @property string $DescricaoNfse
 * @property string $CobrAdicDescricaoTecnica
 */
class TipoCobrAdic extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TipoCobrAdic the static model class
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
		return 'RALSecrel.TipoCobrAdic';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TipoCobrAdic, DescrTipo', 'required'),
			array('GrupoServ', 'numerical', 'integerOnly'=>true),
			array('TipoCobrAdic', 'length', 'max'=>8),
			array('DescrTipo', 'length', 'max'=>50),
			array('FreqCobr, FlagComercializacao, CobrAdicDescricaoTecnica', 'length', 'max'=>1),
			array('FonteArrecad', 'length', 'max'=>2),
			array('Valor', 'length', 'max'=>18),
			array('pacote', 'length', 'max'=>15),
			array('DescricaoSite, DescricaoNfse', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('TipoCobrAdic, DescrTipo, FreqCobr, FonteArrecad, Valor, GrupoServ, FlagComercializacao, pacote, DescricaoSite, DescricaoNfse, CobrAdicDescricaoTecnica', 'safe', 'on'=>'search'),
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
			'TipoCobrAdic' => 'Tipo Cobr Adic',
			'DescrTipo' => 'Descr Tipo',
			'FreqCobr' => 'Freq Cobr',
			'FonteArrecad' => 'Fonte Arrecad',
			'Valor' => 'Valor',
			'GrupoServ' => 'Grupo Serv',
			'FlagComercializacao' => 'Flag Comercializacao',
			'pacote' => 'Pacote',
			'DescricaoSite' => 'Descricao Site',
			'DescricaoNfse' => 'Descricao Nfse',
			'CobrAdicDescricaoTecnica' => 'Cobr Adic Descricao Tecnica',
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

		$criteria->compare('TipoCobrAdic',$this->TipoCobrAdic,true);
		$criteria->compare('DescrTipo',$this->DescrTipo,true);
		$criteria->compare('FreqCobr',$this->FreqCobr,true);
		$criteria->compare('FonteArrecad',$this->FonteArrecad,true);
		$criteria->compare('Valor',$this->Valor,true);
		$criteria->compare('GrupoServ',$this->GrupoServ);
		$criteria->compare('FlagComercializacao',$this->FlagComercializacao,true);
		$criteria->compare('pacote',$this->pacote,true);
		$criteria->compare('DescricaoSite',$this->DescricaoSite,true);
		$criteria->compare('DescricaoNfse',$this->DescricaoNfse,true);
		$criteria->compare('CobrAdicDescricaoTecnica',$this->CobrAdicDescricaoTecnica,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}