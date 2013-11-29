<?php

/**
 * This is the model class for table "ProspectAluno".
 *
 * The followings are the available columns in table 'ProspectAluno':
 * @property integer $idPessoa
 * @property integer $idTurma
 * @property integer $cdServico
 * @property integer $Seq
 */
class ProspectAluno extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProspectAluno the static model class
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
		return 'ProspectAluno';
	}
        
        /**
         *  @return primary Key
         */
        public function primaryKey()
        {
            return 'Seq';
        }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idPessoa, idTurma, cdServico', 'required'),
			array('idPessoa, idTurma, cdServico, Seq', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idPessoa, idTurma, cdServico, Seq', 'safe', 'on'=>'search'),
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
			'idPessoa' => 'Id Pessoa',
			'idTurma' => 'Id Turma',
			'cdServico' => 'Cd Servico',
			'Seq' => 'Seq',
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

		$criteria->compare('idPessoa',$this->idPessoa);
		$criteria->compare('idTurma',$this->idTurma);
		$criteria->compare('cdServico',$this->cdServico);
		$criteria->compare('Seq',$this->Seq);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}