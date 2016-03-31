<?php
namespace frontend\components\validators;

use Yii;
use yii\validators\Validator;
use frontend\lib\helper\IDCardHelper;

class IdentificationNumberValidator extends Validator{
    public $other;
    public function validateAttribute($model, $attribute){
        $idCard = $model->{$this->other};
        if(!IDCardHelper::check($idCard)){
            $this->addError($model, $attribute, '身份证验证失败!');
        }
    }
}
