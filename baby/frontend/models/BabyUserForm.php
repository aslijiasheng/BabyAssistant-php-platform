<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use frontend\components\validators\IdentificationNumberValidator;

class BabyUserForm extends Model
{

    public $email;

    public $identificationNumber;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['identificationNumber', 'email'], 'required'],
            ['identificationNumber', IdentificationNumberValidator::className(), 'other'=>'identificationNumber', 'skipOnEmpty' => false, ],
            // email has to be a valid email address
            ['email', 'email'],
        ];
    }
    public function attributeLabels()
    {
        return [
            'identificationNumber' => '身份证号码',
            'email' => '电子邮箱',
        ];
    }

}
