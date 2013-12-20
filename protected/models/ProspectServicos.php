<?php

/**
 * This is the model class for table "ProspectServicos".
 *
 * The followings are the available columns in table 'ProspectServicos':
 * @property integer $cdservico
 * @property integer $NoProspect
 * @property string $Servico
 * @property string $Valor
 * @property string $Freq
 * @property string $historico
 * @property string $vencimento
 * @property integer $IdVend
 * @property integer $IdIndic
 * @property string $DtVend
 * @property string $DtIndic
 * @property string $status
 * @property string $FidelidadePredial
 * @property string $DtFidelidadePredial
 * @property string $PlanoFidelidadePredial
 */
class ProspectServicos extends CActiveRecord
{
        
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProspectServicos the static model class
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
		return Yii::app()->thirdb;
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
                return 'ProspectServicos';
	}
        
        /**
         *  @return primary Key
         */
        public function primaryKey()
        {
            return 'cdservico';
        }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NoProspect, IdVend, IdIndic', 'numerical', 'integerOnly'=>true),
			array('Servico', 'length', 'max'=>15),
			array('Valor', 'length', 'max'=>11),
			array('Freq, status, FidelidadePredial', 'length', 'max'=>1),
			array('historico', 'length', 'max'=>70),
			array('PlanoFidelidadePredial', 'length', 'max'=>12),
			array('vencimento, DtVend, DtIndic, DtFidelidadePredial', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('sizeChart, totalChart, cdservico, NoProspect, Servico, Valor, Freq, historico, vencimento, IdVend, IdIndic, DtVend, DtIndic, status, FidelidadePredial, DtFidelidadePredial, PlanoFidelidadePredial', 'safe', 'on'=>'search'),
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
			'cdservico' =>              Yii::t('main','prospectServicos.cdservico'),
			'NoProspect' =>             Yii::t('main','prospectServicos.NoProspect'),
			'Servico' =>                Yii::t('main','prospectServicos.Servico'),
			'Valor' =>                  Yii::t('main','prospectServicos.Valor'),
			'Freq' =>                   Yii::t('main','prospectServicos.Freq'),
			'historico' =>              Yii::t('main','prospectServicos.historico'),
			'vencimento' =>             Yii::t('main','prospectServicos.vencimento'),
			'IdVend' =>                 Yii::t('main','prospectServicos.IdVend'),
			'IdIndic' =>                Yii::t('main','prospectServicos.IdIndic'),
			'DtVend' =>                 Yii::t('main','prospectServicos.DtVend'),
			'DtIndic' =>                Yii::t('main','prospectServicos.DtIndic'),
			'status' =>                 Yii::t('main','prospectServicos.status'),
			'FidelidadePredial' =>      Yii::t('main','prospectServicos.FidelidadePredial'),
			'DtFidelidadePredial' =>    Yii::t('main','prospectServicos.DtFidelidadePredial'),
			'PlanoFidelidadePredial' => Yii::t('main','prospectServicos.PlanoFidelidadePredial'),
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
		$criteria->compare('NoProspect',$this->NoProspect);
		$criteria->compare('Servico',$this->Servico,true);
		$criteria->compare('Valor',$this->Valor,true);
		$criteria->compare('Freq',$this->Freq,true);
		$criteria->compare('historico',$this->historico,true);
		$criteria->compare('vencimento',$this->vencimento,true);
		$criteria->compare('IdVend',$this->IdVend);
		$criteria->compare('IdIndic',$this->IdIndic);
		$criteria->compare('DtIndic',$this->DtIndic,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('FidelidadePredial',$this->FidelidadePredial,true);
		$criteria->compare('DtFidelidadePredial',$this->DtFidelidadePredial,true);
		$criteria->compare('PlanoFidelidadePredial',$this->PlanoFidelidadePredial,true);         
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
       
}

