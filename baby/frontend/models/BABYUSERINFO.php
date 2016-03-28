<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TC_BABY_USER_INFO".
 *
 * @property integer $baby_user_info_id
 * @property integer $baby_user_id
 * @property integer $baby_user_sex
 * @property integer $baby_user_age
 * @property string $baby_user_birthday
 * @property string $baby_user_info_create_time
 */
class BABYUSERINFO extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'TC_BABY_USER_INFO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['baby_user_id', 'baby_user_sex', 'baby_user_age'], 'integer'],
            [['baby_user_birthday', 'baby_user_info_create_time'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'baby_user_info_id' => '用户详情ID',
            'baby_user_id' => '用户外键ID',
            'baby_user_sex' => '用户性别 1-男 0-女',
            'baby_user_age' => '年龄',
            'baby_user_birthday' => '生日',
            'baby_user_info_create_time' => '创建时间',
        ];
    }
}
