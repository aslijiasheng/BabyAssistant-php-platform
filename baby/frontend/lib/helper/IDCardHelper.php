<?php
namespace frontend\lib\helper;

class IDCardHelper {
    
    private static function idcard_verify_number($idcard_base) {
        $re = '';
        if (strlen($idcard_base) == 17) {
            $factor = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2); // 加权因子
            $arr = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2'); // 校验码对应值
            $checksum = 0;
            for ($i = 0; $i < 17; $i ++) {
                $checksum += substr($idcard_base, $i, 1) * $factor[$i];
            }
            $re = $arr[$checksum % 11];
        }
        return $re;
    }
    
    private static function idcard_15to18($idcard) {
        $re = '';
        if (strlen($idcard) == 15) {
            $i = (array_search(substr($idcard, 12, 3), array('996', '997', '998', '999')) !== false) ? 18 : 19;
            $idcard = substr($idcard, 0, 6) . $i . substr($idcard, 6, 9);
            $re = $idcard . self::idcard_verify_number($idcard);
        }
        return $re;
    }
    
    private static function idcard_checksum18($idcard) {
        $re = false;
        if ($idcard && strlen($idcard) == 18) {
            $re = (self::idcard_verify_number(substr($idcard, 0, 17)) == strtoupper(substr($idcard, 17, 1)));
        }
        return $re;
    }
    
    public static function check($idcard) {
        strlen($idcard) == 15 && $idcard = self::idcard_15to18($idcard);
        return self::idcard_checksum18($idcard);
    }

    public static function isIdCard($idCard){
        return !empty($idCard);
    }

    public static function getIDCardInfo($idCard){
        if (!self::isIdCard($idCard)) return '';
        $data['constellation'] = self::get_xingzuo($idCard);
        $data['sex']           = self::get_xingbie($idCard);
        $data['age']           = self::getAgeByID($idCard);
        $data['lunar']         = self::get_shengxiao($idCard);
        $data['birthDay']      = self::getBirthDay($idCard);
        return $data;
    }

    // 根据身份证号，自动返回对应的星座
    public static function get_xingzuo($cid) {
        if (!self::isIdCard($cid)) return '';
        $bir = substr($cid,10,4);
        $month = (int)substr($bir,0,2);
        $day = (int)substr($bir,2);
        $strValue = '';
        if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
            $strValue = "水瓶座";
        } else if (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
            $strValue = "双鱼座";
        } else if (($month == 3 && $day > 20) || ($month == 4 && $day <= 19)) {
            $strValue = "白羊座";
        } else if (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
            $strValue = "金牛座";
        } else if (($month == 5 && $day >= 21) || ($month == 6 && $day <= 21)) {
            $strValue = "双子座";
        } else if (($month == 6 && $day > 21) || ($month == 7 && $day <= 22)) {
            $strValue = "巨蟹座";
        } else if (($month == 7 && $day > 22) || ($month == 8 && $day <= 22)) {
            $strValue = "狮子座";
        } else if (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
            $strValue = "处女座";
        } else if (($month == 9 && $day >= 23) || ($month == 10 && $day <= 23)) {
            $strValue = "天秤座";
        } else if (($month == 10 && $day > 23) || ($month == 11 && $day <= 22)) {
            $strValue = "天蝎座";
        } else if (($month == 11 && $day > 22) || ($month == 12 && $day <= 21)) {
            $strValue = "射手座";
        } else if (($month == 12 && $day > 21) || ($month == 1 && $day <= 19)) {
            $strValue = "魔羯座";
        }
        return $strValue;
    }

    // 根据身份证号，自动返回对应的生肖
    public static function get_shengxiao($cid) {
        if (!self::isIdCard($cid)) return '';
        $start = 1901;
        $end = $end = (int)substr($cid,6,4);
        $x = ($start - $end) % 12;
        $value = ""; 
        if ($x == 1 || $x == -11) {$value = "鼠";}
        if ($x == 0) { $value = "牛";}
        if ($x == 11 || $x == -1) {$value = "虎";}
        if ($x == 10 || $x == -2) {$value = "兔";}
        if ($x == 9 || $x == -3) {$value = "龙";}
        if ($x == 8 || $x == -4) {$value = "蛇";}
        if ($x == 7 || $x == -5) {$value = "马";}
        if ($x == 6 || $x == -6) {$value = "羊";}
        if ($x == 5 || $x == -7) {$value = "猴";}
        if ($x == 4 || $x == -8) {$value = "鸡";}
        if ($x == 3 || $x == -9) {$value = "狗";}
        if ($x == 2 || $x == -10) {$value = "猪";}
        return $value;
    }

    public static function get_xingbie($cid, $comm=0) { //根据身份证号，自动返回性别
        if (!self::isIdCard($cid)) return '';
        $sexint = (int)substr($cid,16,1);
        if($comm >0){
            return $sexint % 2 === 0 ? '女士' : '先生';
        }else{
            return $sexint % 2 === 0 ? '女' : '男';
        }
    }

    public static function getAgeByID($id){
        //过了这年的生日才算多了1周岁
        if(!self::isIdCard($id)) return '';
        $date=strtotime(substr($id,6,8));
        //获得出生年月日的时间戳
        $today=strtotime('today');
        //获得今日的时间戳
        $diff=floor(($today-$date)/86400/365);
        //得到两个日期相差的大体年数
        //strtotime加上这个年数后得到那日的时间戳后与今日的时间戳相比
        $age=strtotime(substr($id,6,8).' +'.$diff.'years')>$today?($diff+1):$diff;
        return $age;
    }

    public static function getBirthDay($id){
        //过了这年的生日才算多了1周岁
        if(!self::isIdCard($id)) return '';
        $date=strtotime(substr($id,6,8));
        //获得出生年月日的时间戳
        return $date;
    }
}
