<?php 
   static function getGenderOptions($status = null)
    {
        $base = array(
            self::MALE => Yii::t('app', 'Male'),
            self::FEMALE => Yii::t('app', 'Female')
        );
        return !empty($base[$status]) ? $base[$status] : ($base);
    }
?>