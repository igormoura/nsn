<?php
class SecondbActiveRecord extends CActiveRecord {
    private static $secondb = null;
 
    protected static function getSecondbConnection()
    {
        if (self::$secondb !== null)
            return self::$secondb;
        else
        {
            self::$secondb = Yii::app()->secondb;
            if (self::$secondb instanceof CDbConnection)
            {
                self::$secondb->setActive(true);
                return self::$secondb;
            }
            else
                throw new CDbException(Yii::t('yii','Active Record requires a "db" CDbConnection application component.'));
        }
    }
    
}
?>
