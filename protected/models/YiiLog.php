<?php
/**
 * This is the model class for table "YiiLog".
 *
 * The followings are the available columns in table 'YiiLog':
 * @property integer $id
 * @property string $level
 * @property string $category
 * @property string $logtime
 * @property string $IP_User
 * @property string $user_name
 * @property string $request_URL
 * @property string $message
 */
class YiiLog extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return YiiLog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function getDbConnection()
	{
		return Yii::app()->secondb;
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'YiiLog';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('logtime', 'required'),
			array('level, category', 'length', 'max'=>128),
			array('IP_User, user_name', 'length', 'max'=>50),
			array('request_URL, message', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, level, category, logtime, IP_User, user_name, request_URL, message', 'safe', 'on'=>'search'),
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
			'id' =>          Yii::t('main','yiiLog.id'),
			'level' =>       Yii::t('main','yiiLog.level'),
			'category' =>    Yii::t('main','yiiLog.category'),
			'logtime' =>     Yii::t('main','yiiLog.logtime'),
			'IP_User' =>     Yii::t('main','yiiLog.IP_User'),
			'user_name' =>   Yii::t('main','yiiLog.user_name'),
			'request_URL' => Yii::t('main','yiiLog.request_URL'),
			'message' =>     Yii::t('main','yiiLog.message'),
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

		$criteria->compare('id',$this->id);
		$criteria->compare('level',$this->level,true);
		$criteria->compare('category',$this->category,true);
		//$criteria->compare('logtime',$this->logtime,true);
                
                $inicio = explode('/', substr($this->logtime,0,10));
                $fim = explode('/', substr($this->logtime,13,10));
                //$criteria->addBetweenCondition('stamp', '2013/10/09 00:00:00', '2013/10/09 23:59:59');
                // POG
                if(isset($this->logtime) && $this->logtime != ''){
                    $criteria->addBetweenCondition('logtime', $inicio[2]. '-'. $inicio[1]. '-'. $inicio[0]. ' 00:00:00', $fim[2]. '-'. $fim[1]. '-'. $fim[0]. ' 23:59:59' );
                }
                
		$criteria->compare('IP_User',$this->IP_User,true);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('request_URL',$this->request_URL,true);
		$criteria->compare('message',$this->message,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array(
                           'defaultOrder'=>'logtime DESC',
                            'attributes'=>array('')
                        ),
		));
	}
        
        public function typeLevel() {
            return array(
              ''=>'',
              'trace'=>Yii::t('main','yiiLog.typeLevel.trace'),
              'error'=>Yii::t('main','yiiLog.typeLevel.error'),  
            );
        }
        
        public function behaviors()
        { 
            return array( 'LoggableBehavior'=> 'application.modules.auditTrail.behaviors.LoggableBehavior', );
        }
}