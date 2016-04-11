<?php
namespace frontend\components\validators;

use Yii;
use yii\validators\Validator;
use common\lib\helper\SessionHelper;

class CodesValidator extends Validator
{
    public $other;
    public function validateAttribute($model, $attribute)
    {
        if (strtolower($model->{$this->other}) != strtolower(SessionHelper::init()->get('valid'))) {
            $this->addError($model, $attribute, '验证码验证失败!');
        }
    }
}
