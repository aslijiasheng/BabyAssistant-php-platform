<?php
namespace frontend\components\validators;

use Yii;
use yii\validators\Validator;
use frontend\lib\helper\CacheHelper;

class TokenFormValidator extends Validator{

    public $other;

    public function validateAttribute($model, $attribute){
        if (($model->{$this->other}) != CacheHelper::init()->get('babyFormToken')){
            $this->addError($model, $attribute, '令牌验证不通过!');
        }
    }

}
