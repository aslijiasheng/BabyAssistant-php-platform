<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TC_BABY_USER".
 *
 * @property integer $baby_user_id
 * @property string $baby_user_identificationNumber
 * @property string $baby_user_email
 * @property string $baby_user_login_time
 * @property string $baby_user_create_time
 * @property string $baby_user_token
 */
class BABYUSER extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'TC_BABY_USER';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['baby_user_login_time', 'baby_user_create_time'], 'safe'],
            [['baby_user_identificationNumber'], 'string', 'max' => 18],
            [['baby_user_email'], 'string', 'max' => 100],
            [['baby_user_token'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'baby_user_id' => '用户ID',
            'baby_user_identificationNumber' => '身份证信息',
            'baby_user_email' => '电子邮箱地址',
            'baby_user_login_time' => '登陆时间',
            'baby_user_create_time' => '创建时间',
            'baby_user_token' => '用户令牌',
        ];
    }
}
