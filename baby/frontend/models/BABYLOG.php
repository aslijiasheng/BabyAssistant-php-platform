<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TC_BABY_LOG".
 *
 * @property integer $baby_log_id
 * @property string $baby_log_addtime
 * @property string $baby_log_method
 * @property string $baby_log_data
 * @property integer $baby_log_status
 * @property string $baby_log_result
 */
class BABYLOG extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'TC_BABY_LOG';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['baby_log_addtime'], 'safe'],
            [['baby_log_data'], 'string'],
            [['baby_log_status'], 'integer'],
            [['baby_log_method'], 'string', 'max' => 128],
            [['baby_log_result'], 'string', 'max' => 225]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'baby_log_id' => '日志id',
            'baby_log_addtime' => '创建时间',
            'baby_log_method' => '操作方法',
            'baby_log_data' => '原始数据',
            'baby_log_status' => '状态',
            'baby_log_result' => '返回结果',
        ];
    }
}
