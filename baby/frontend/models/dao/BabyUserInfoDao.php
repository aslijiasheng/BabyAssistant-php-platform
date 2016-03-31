<?php
namespace frontend\models\dao;

use Yii;
use app\models\BabyAgeInfo;

class BabyUserInfoDao{

    public static function getUserInfo($ageID){
        if(empty($ageID)) return null;
        return BabyAgeInfo::find()->where(['baby_age_info_id' => $ageID])->one();
    }

}
