<?php
namespace common\lib\helper;

use Yii;

class CacheHelper{

    private static $_cache = null;

    private static $_instance = null;

    public static function init(){
        self::$_cache = Yii::$app->cache;
        return self::getInstance();
    }

    public static function getInstance(){
        if (self::$_instance === null) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    public function get($key){
        if(!($value = self::$_cache->get($key)))
            return FALSE;
        return $value;
    }

    public function set($key, $value, $ttl = 1200){
        self::$_cache->set($key, $value, $ttl);
    }

    public function unsetID($key){
        self::$_cache->delete($key);
    }

    public function flush(){
        self::$_cache->flush();
    }


}
