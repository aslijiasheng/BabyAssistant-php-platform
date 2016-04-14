<?php
namespace common\config;

class BaseError {

    /* 错误码定义 */

    /** 业务级错误码开始20000，定义在子站里面 **/

    /* 错误消息定义 */
    protected static $errorMessages = array(

   	);

    public static function getErrorMessage($errorCode) {
        return self::$errorMessages[$errorCode];
    }
}
