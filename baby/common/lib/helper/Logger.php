<?php
namespace common\lib\helper;

use Yii;

class Logger{

    private static $_logType = null;

    private static $_instance = null;

    public function init($logType = ''){
        // \Yii::error('basket error', 'basket');
        if(!self::$_logType)
            self::$_logType = $logType;
        return self::getInstance();
    }

    public static function getInstance(){
        if (self::$_instance === null) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    public function error($value){
        \Yii::error(var_export($value), self::$_logType);
    }

    public function warning($value){
        \Yii::warning(var_export($value), self::$_logType);
    }

    public function debug($value){
        \Yii::debug(var_export($value), self::$_logType);
    }

    public function info($value){
        \Yii::info(var_export($value), self::$_logType);
    }
}
