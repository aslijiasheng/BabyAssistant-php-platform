<?php
namespace frontend\beans;

use Yii;
use yii\base\Model;
use frontend\components\validators\IdentificationNumberValidator;
use frontend\components\validators\CodesValidator;
use frontend\components\validators\TokenFormValidator;

class BabyUserForm extends Model{

    public $email;

    public $valid;

    public $token;

    public $secret;

    public $identificationNumber;

    /**
     * @inheritdoc
     */
    public function rules(){
        return [
            // name, email, subject and body are required
            [['identificationNumber', 'email', 'valid', 'secret'], 'required'],
            ['identificationNumber', IdentificationNumberValidator::className(), 'other'=>'identificationNumber', 'skipOnEmpty' => false, ],
            ['valid', CodesValidator::className(), 'other'=>'valid', 'skipOnEmpty' => false, ],
            ['token', TokenFormValidator::className(), 'other'=>'secret', 'skipOnEmpty' => false, ],
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
            'secret' => '令牌失效',
        ];
    }

    public function errors(){
        $msg = "";
        $errors = $this->errors;
        foreach($errors as $key => $value){
            $msg .= $value[0];
        }
        return $msg;
    }

}
