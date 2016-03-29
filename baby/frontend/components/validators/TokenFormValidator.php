<?php
namespace frontend\components\validators;

use Yii;
use yii\validators\Validator;
use frontend\lib\helper\SessionHelper;

class TokenFormValidator extends Validator{

    public $other;

    public function validateAttribute($model, $attribute){
        if (($model->{$this->other}) == SessionHelper::init()->get('babyFormToken')){
            $this->addError($model, $attribute, 'baby form token Inconsistent!');
        }
    }

}
