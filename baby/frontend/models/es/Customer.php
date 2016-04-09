<?php
namespace frontend\models\es;

use Yii;
use yii\elasticsearch\Command;

/**
 * Class Customer
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $address
 * @property integer $status
 */
class Customer extends \yii\elasticsearch\ActiveRecord{

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 2;

    public $status2;

    public static function primaryKey(){
        return ['id'];
    }

    public function attributes(){
        return ['id', 'name', 'email', 'address', 'status'];
    }

    /**
     * sets up the index for this record
     * @param Command $command es Connection object
     * @param boolean $statusIsBoolean
     */
    public static function setUpMapping($command, $statusIsBoolean = false){
        $command->deleteMapping(static::index(), static::type());
        $command->setMapping(static::index(), static::type(), [
            static::type() => [
                "_id" => ["path" => "id", "index" => "not_analyzed", "store" => "yes"],
                "properties" => [
                    "name" =>        ["type" => "string", "index" => "not_analyzed"],
                    "email" =>       ["type" => "string", "index" => "not_analyzed"],
                    "address" =>     ["type" => "string", "index" => "analyzed"],
                    "status" => $statusIsBoolean ? ["type" => "boolean"] : ["type" => "integer"],
                ]
            ]
        ]);
    }
}
