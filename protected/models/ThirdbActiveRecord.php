<?php
class ThirdbActiveRecord extends CActiveRecord {
    private static $thirdb = null;
 
    protected static function getThirdbConnection()
    {
        if (self::$thirdb !== null)
            return self::$thirdb;
        else
        {
            self::$thirdb = Yii::app()->thirdb;
            if (self::$thirdb instanceof CDbConnection)
            {
                self::$thirdb->setActive(true);
                return self::$thirdb;
            }
            else
                throw new CDbException(Yii::t('yii','Active Record requires a "db" CDbConnection application component.'));
        }
    }
    
}
?>
