<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dd_baby_age_info".
 *
 * @property integer $baby_age_info_id
 * @property string $baby_age_info_serid
 * @property string $baby_age_info_text
 */
class BabyAgeInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dd_baby_age_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['baby_age_info_text'], 'string'],
            [['baby_age_info_serid'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'baby_age_info_id' => '年龄ID',
            'baby_age_info_serid' => '年龄编号',
            'baby_age_info_text' => '年龄信息',
        ];
    }
}
