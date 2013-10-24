<?php
/**
* Auth item assignment form class file.
*
* @author Christoffer Niska <cniska@live.com>
* @copyright Copyright &copy; 2010 Christoffer Niska
* @since 0.9
*/
class AssignmentForm extends CActiveRecord
{
	public $itemname;
        public $searchUsuario;
        /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'AuthAssignment';
	}
        
        public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			array('itemname', 'safe'),
                        array('searchUsuario', 'on'=>'search'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'itemname' => Rights::t('core', 'Authorization item'),
		);
	}
        
        public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                    'Usuario' => array(self::BELONGS_TO, 'Usuarios', 'userid'),
                );

        }
        
        public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
                
                $criteria->compare('userid',$this->userid, true);
               // $criteria->compare('Usuario.nm_usuario',$this->searchUsuario->nm_usuario, true);
               // 
               // 
               // $criteria->compare('Contrato.DataInicioContr',$this->searchContrato->DataInicioContr, true);
               //$criteria->compare('Contrato.NoContrato',$this->searchContrato->NoContrato, true);
                
                return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array('pageSize'=>10),
		));
                
        }
        
        public function getAssignmentNameLink()
	{
		return CHtml::link($this->Usuario->nm_usuario, array('assignment/user', 'id'=>$this->Usuario->id_usuario));
	}
        
        public function behaviors()
        { 
            return array( 'LoggableBehavior'=> 'application.modules.auditTrail.behaviors.LoggableBehavior', );
        }
}
