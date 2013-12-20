<?php

/**
 * This is the model class for table "Setor".
 *
 * The followings are the available columns in table 'Setor':
 * @property integer $id_setor
 * @property string $ds_setor
 * @property string $ativo
 */
class Setor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Setor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Setor';
	}
        
        public function primaryKey(){
            return 'id_setor';
        }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_setor', 'required'),
			array('id_setor', 'numerical', 'integerOnly'=>true),
			array('ds_setor', 'length', 'max'=>200),
			array('ativo', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_setor, ds_setor, ativo', 'safe', 'on'=>'search'),
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
                    'Usuarios'=>array(self::MANY_MANY, 'Usuarios', 'usuarios_setor(id_setor, id_usuario)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_setor' => Yii::t('main','setor.id_setor'),
			'ds_setor' => Yii::t('main','setor.ds_setor'),
			'ativo' => Yii::t('main','setor.ativo'),
                        'ativo.nome' => Yii::t('main','setor.ativo'),
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

		$criteria->compare('id_setor',$this->id_setor);
		$criteria->compare('ds_setor',$this->ds_setor,true);
		$criteria->compare('ativo',$this->ativo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array(
                                  // 'defaultOrder'=>'stamp DESC',
                                    'attributes'=>array('')
                                )
		));
	}
        
        
        public function status(){
            return array (
                '' => '',
                's' => Yii::t('main','helper.yes'),
                'n' => Yii::t('main','helper.no'),
                
            );   
        }
}