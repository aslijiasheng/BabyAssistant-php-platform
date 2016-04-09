<?php
namespace frontend\models\es;

use Yii;
use yii\elasticsearch\Connection;

class ActiveRecord extends \yii\elasticsearch\ActiveRecord{

    public static $db;

    /**
     * @return \yii\elasticsearch\Connection
     */
    public static function getDb(){
        return self::$db;
    }

    /**
     * @param  boolean    $reset whether to clean up the test database
     * @return Connection
     */
    public static function getConnection($reset = true){
        $config = Yii::$app->params['elasticsearch'];
        self::$db = new Connection($config);
        if ($reset) {
            self::$db->open();
        }
    }

    public static function index(){
        return 'yiitest';
    }
}
