<?php
namespace frontend\lib\helper;

use Yii;
use Yii\web\session;

class SessionHelper{

    private static $_session = null;

    private static $_instance = null;

    public static function init(){
        self::$_session = Yii::$app->session;
        if(!self::$_session->isActive){
            self::$_session->open();
        } 
        return self::getInstance();
    }

    public static function getInstance(){
        if (self::$_instance === null) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    public function get($key){
        if(!self::$_session->has($key))
            return null;
        return self::$_session->get($key);
    }

    public function set($key, $value){
        self::$_session->set($key, $value);
    }

    public function hash($key){
        return self::$_session->has($key);
    }

    public function getID(){
        return self::$_session->getId();
    }

    public function unsetID($key){
        self::$_session->remove($key);
    }

    public function getAllSession(){
        return self::$_session;
    }

    public function destroy(){
        self::$_session->destroy();
    }


}
