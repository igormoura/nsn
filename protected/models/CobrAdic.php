<?php

/**
 * This is the model class for table "RALSecrel.CobrAdic".
 *
 * The followings are the available columns in table 'RALSecrel.CobrAdic':
 * @property integer $NoContrato
 * @property string $Historico
 * @property string $Valor
 * @property string $FreqCobr
 * @property integer $Seq
 * @property string $aux
 * @property string $Vencimento
 * @property string $TipoCobrAdic
 * @property string $IdentificaOper
 * @property integer $SeqPai
 */
class CobrAdic extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CobrAdic the static model class
	 */

   

    public function primaryKey()
    {
      return 'Seq';
    }

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
		return 'RALSecrel.CobrAdic';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NoContrato, Historico, Valor, FreqCobr', 'required'),
			array('NoContrato, SeqPai', 'numerical', 'integerOnly'=>true),
			array('Historico', 'length', 'max'=>70),
			array('Valor', 'length', 'max'=>11),
			array('FreqCobr, aux', 'length', 'max'=>1),
			array('TipoCobrAdic', 'length', 'max'=>8),
			array('IdentificaOper', 'length', 'max'=>100),
			array('Vencimento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NoContrato, Historico, Valor, FreqCobr, Seq, aux, Vencimento, TipoCobrAdic, IdentificaOper, SeqPai', 'safe', 'on'=>'search'),
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
                    'Contrato' => array(self::BELONGS_TO, 'Contrato', 'NoContrato'),
                    'DescrTipo' => array(self::BELONGS_TO, 'TipoCobrAdic', 'TipoCobrAdic'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NoContrato' => 	Yii::t('main','cobriAdic.NoContrato'),
			'Historico' => 		Yii::t('main','cobriAdic.Historico'),
			'Valor' => 			Yii::t('main','cobriAdic.Valor'),
			'FreqCobr' =>		Yii::t('main','cobriAdic.FreqCobr'),
			'Seq' => 			Yii::t('main','cobriAdic.Seq'),
			'aux' => 			Yii::t('main','cobriAdic.aux'),
			'Vencimento' => 	Yii::t('main','cobriAdic.Vencimento'),
			'TipoCobrAdic' => 	Yii::t('main','cobriAdic.TipoCobrAdic'),
			'IdentificaOper' => Yii::t('main','cobriAdic.IdentificaOper'),
			'SeqPai' => 		Yii::t('main','cobriAdic.SeqPai'),
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

		$criteria->compare('NoContrato',$this->NoContrato);
		$criteria->compare('Historico',$this->Historico,true);
		$criteria->compare('Valor',$this->Valor,true);
		$criteria->compare('FreqCobr',$this->FreqCobr,true);
		$criteria->compare('Seq',$this->Seq);
		$criteria->compare('aux',$this->aux,true);
		$criteria->compare('Vencimento',$this->Vencimento,true);
		$criteria->compare('TipoCobrAdic',$this->TipoCobrAdic,true);
		$criteria->compare('IdentificaOper',$this->IdentificaOper,true);
		$criteria->compare('SeqPai',$this->SeqPai);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}