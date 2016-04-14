<?php
namespace frontend\components\validators;

use Yii;
use yii\validators\Validator;
use common\lib\helper\CacheHelper;

class TokenFormValidator extends Validator{

    public $other;

    public function validateAttribute($model, $attribute){

        if (($model->{$attribute}) != CacheHelper::init()->get(($model->{$this->other}))){
            $this->addError($model, $attribute, '令牌验证不通过!');
        }

    }

}
