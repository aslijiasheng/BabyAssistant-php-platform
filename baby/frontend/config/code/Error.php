<?php
namespace app\config\code;

use common\config\BaseError;

class Error extends BaseError{

    /* 错误消息定义 */
    protected static $errorMessages = array(
   	);

    public static function getErrorMessage($errorCode) {
        if(isset(self::$errorMessages[$errorCode])){
            return self::$errorMessages[$errorCode];
        }
        else{
            return parent::getErrorMessage($errorCode);
        }
    }
}
