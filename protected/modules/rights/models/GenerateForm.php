<?php
/**
* Generation form class file.
*
* @author Christoffer Niska <cniska@live.com>
* @copyright Copyright &copy; 2010 Christoffer Niska
* @since 0.9.8
*/
class GenerateForm extends CActiveRecord
{
	public $items;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
            return array(
                    array('items', 'safe'),
            );
	}
        
        public function behaviors()
        { 
            return array( 'LoggableBehavior'=> 'application.modules.auditTrail.behaviors.LoggableBehavior', );
        }
}
