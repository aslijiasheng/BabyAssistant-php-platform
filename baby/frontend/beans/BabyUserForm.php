<?php
namespace frontend\beans;

use Yii;
use yii\base\Model;
use frontend\components\validators\IdentificationNumberValidator;
use frontend\components\validators\CodesValidator;
use frontend\components\validators\TokenFormValidator;

class BabyUserForm extends Model
{

    public $email;

    public $valid;

    public $token;

    public $identificationNumber;

    /**
     * @inheritdoc
     */
    public function rules(){
        return [
            // name, email, subject and body are required
            [['identificationNumber', 'email', 'valid'], 'required'],
            ['identificationNumber', IdentificationNumberValidator::className(), 'other'=>'identificationNumber', 'skipOnEmpty' => false, ],
            ['valid', CodesValidator::className(), 'other'=>'valid', 'skipOnEmpty' => false, ],
            ['token', TokenFormValidator::className(), 'other'=>'token', 'skipOnEmpty' => false, ],
            // email has to be a valid email address
            ['email', 'email'],
        ];
    }

    public function attributeLabels(){
        return [
            'identificationNumber' => '身份证号码',
            'email' => '电子邮箱',
            'valid' => '验证码',
            'token' => '令牌失效',
        ];
    }

}
