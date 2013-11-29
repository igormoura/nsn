<?php

/**
 * This is the model class for table "Usuario_Controle_Presenca_Grupo_Horario".
 *
 * The followings are the available columns in table 'Usuario_Controle_Presenca_Grupo_Horario':
 * @property integer $id_grupo_horario
 * @property string $ds_grupo_horario
 * @property integer $qtmovimentos
 * @property string $hrinicio
 * @property string $hrfim
 */
class CargaHoraria extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CargaHoraria the static model class
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
		return 'Usuario_Controle_Presenca_Grupo_Horario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_grupo_horario, qtmovimentos', 'numerical', 'integerOnly'=>true),
			array('ds_grupo_horario', 'length', 'max'=>30),
			array('hrinicio, hrfim', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_grupo_horario, ds_grupo_horario, qtmovimentos, hrinicio, hrfim', 'safe', 'on'=>'search'),
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
			'id_grupo_horario' => 'Id Grupo Horario',
			'ds_grupo_horario' => 'Ds Grupo Horario',
			'qtmovimentos' => 'Qtmovimentos',
			'hrinicio' => 'Hrinicio',
			'hrfim' => 'Hrfim',
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

		$criteria->compare('id_grupo_horario',$this->id_grupo_horario);
		$criteria->compare('ds_grupo_horario',$this->ds_grupo_horario,true);
		$criteria->compare('qtmovimentos',$this->qtmovimentos);
		$criteria->compare('hrinicio',$this->hrinicio,true);
		$criteria->compare('hrfim',$this->hrfim,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}