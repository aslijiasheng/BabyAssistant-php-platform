<?php
namespace common\config;

class BaseError {
    /* 错误码定义 */

    // 系统级错误码 : 通用错误码0-10000
    const SUCCESS = 0; // 成功
    const SYS_ERR = 1; //系统错误
    const PARAMS_ERR = 2; //参数错误
    const LOGIN_STATUS_TIMEOUNT = 3; // 登录态超时
    const LOGIN_AUTH_ERROR = 4; // 登录态错误
    const DIRTY_WORD_FOUND = 5; // 敏感词错误
    const GET_CMLB_FAIL = 6; // 从cmlb获取服务器信息失败
    const PERMISSION_FAIL = 7;//没有权限
    const DIRTY_WORD_SERVER_ERROR = 8; //检查敏感词返回系统错误

    // crm3lib业务逻辑错误10001-20000
    const IMG_PROCESS_ERR = 10001; //图片处理错误
    //const GET_KFUIN_BY_KFEXT_EMPTY = 10002; //通过工号获取主号为空
    //const GET_NICKNAME_BY_KFUIN_FAIL = 10003; //通过主号获取主号对外名称失败
    //const GET_NICKNAME_BY_KFUIN_EMPTY = 10004; //通过主号获取主号对外名称为空
    const IMG_PROCESS_SIZE_OR_TYPE_ERR = 10005; //图片过大或格式错误
    const IMG_PROCESS_SIZE_EXCEED = 10006; //图片太大
    const IMG_PROCESS_TYPE_ERR = 10007; //图片格式错误
    const IMG_PROCESS_UPLOAD_ERR = 10008; //图片上传失败
//    const GET_NUMBER_CONVERT_FAIL = 10009; //主靓号转换失败
//    const GET_PERMISSION_FAIL = 10010; //拉取权限失败
    const GET_SUPER_PERMISSION_FAIL = 10011; //拉取超级权限失败
    const GET_OPENID_APPID_FAIL = 10012; //open id 取appId失败
    const GET_OPENID_NO_APPID = 10013;   //open id 拉不到appId
    const GET_OPENID_FAILED = 10014;   //open id 拉不到appId
    const GET_CORP_BOSS_COMBO_BY_KFUIN_FAIL = 10015;//拉取boss的套餐失败
    const GET_CORP_WX_COMBO_BY_KFUIN_FAIL = 10016;//拉取微信的套餐失败
    const GET_KFUIN_BY_KFEXT_FAIL = 10017; //通过工号获取主号失败
    const GET_KFUIN_BY_KFEXT_EMPTY = 10002; //通过工号获取主号为空
    const GET_NICKNAME_BY_KFUIN_FAIL = 10003; //通过主号获取主号对外名称失败
    const GET_NICKNAME_BY_KFUIN_EMPTY = 10004; //通过主号获取主号对外名称为空
    const GET_INFO_BY_KFEXT_FAIL = 10005; //通过工号获取主号失败
    const GET_INFO_BY_KFEXT_EMPTY = 10006; //通过工号获取主号为空
    const GET_KFEXT_LIST_BY_KFUIN_FAIL = 10007; //通过主号获取工号列表失败
    const GET_TOTAL_KFEXT_NUM_BY_KFUIN_FAIL = 10008; //通过主号获取总工号总数失败
    const GET_NUMBER_CONVERT_FAIL = 10009; //主靓号转换失败
    const GET_PERMISSION_FAIL = 10010; //拉取权限失败
    const GET_PORTRAIT_QQ_ERROR = 10011;//拉取qq头像失败
    const GET_PORTRAIT_WX_ERROR = 10012;//拉取wx头像失败
    const GET_WX_ACCESSTOKEN_ERROR = 10013;//拉取access token 失败
    const GET_WX_NO_ACCESSTOKEN = 10014;//无access token


    /** 业务级错误码开始20000，定义在子站里面 **/

    /* 错误消息定义 */
    protected static $errorMessages = array(
        self::SUCCESS => '操作成功',
        self::SYS_ERR => '系统异常，请稍后再试',
        self::LOGIN_STATUS_TIMEOUNT => '登录超时啦',
        self::LOGIN_AUTH_ERROR => '登录态错误',
        self::PARAMS_ERR => '请求参数错误',
        self::DIRTY_WORD_FOUND => '参数含有敏感词',
        self::GET_CMLB_FAIL => '从cmlb获取服务器配置失败',
        self::PERMISSION_FAIL => '没有权限',

        self::GET_KFUIN_BY_KFEXT_FAIL => '通过工号获取主号失败',
        self::GET_KFUIN_BY_KFEXT_EMPTY => '通过工号获取主号数据为空',
        self::GET_NICKNAME_BY_KFUIN_FAIL => '通过主号获得主号对外名称失败',
        self::GET_NICKNAME_BY_KFUIN_EMPTY => '通过主号获得主号对外名称为空',
        self::GET_INFO_BY_KFEXT_FAIL => '通过工号获得工号信息失败',
        self::GET_INFO_BY_KFEXT_EMPTY => '通过工号获得工号信息为空',
        self::GET_KFEXT_LIST_BY_KFUIN_FAIL => '通过主号获得工号列表失败',
        self::GET_TOTAL_KFEXT_NUM_BY_KFUIN_FAIL => '通过主号获取总工号总数失败',
        self::GET_NUMBER_CONVERT_FAIL => '主靓号转换失败',
        self::GET_PERMISSION_FAIL => '拉取权限失败',
        self::GET_SUPER_PERMISSION_FAIL => '拉取超级权限失败',
        self::GET_OPENID_APPID_FAIL => '拉取appid失败',
        self::GET_OPENID_NO_APPID => '拉取appid失败',
        self::GET_OPENID_FAILED => '拉取openId失败',
        self::GET_CORP_BOSS_COMBO_BY_KFUIN_FAIL => '拉取企业的套餐失败',
        self::GET_CORP_WX_COMBO_BY_KFUIN_FAIL => '拉取企业的微信套餐失败',
        self::IMG_PROCESS_SIZE_EXCEED => '图片太大或格式错误',
        self::IMG_PROCESS_SIZE_OR_TYPE_ERR => '图片过大',
        self::IMG_PROCESS_TYPE_ERR => '图片格式错误',
        self::IMG_PROCESS_UPLOAD_ERR => '图片上传失败'


   	);

    public static function getErrorMessage($errorCode) {
        return self::$errorMessages[$errorCode];
    }
}
