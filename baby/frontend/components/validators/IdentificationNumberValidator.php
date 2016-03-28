<?php
namespace frontend\components\validators;

use Yii;
use yii\validators\Validator;

class IdentificationNumberValidator extends Validator
{
    public $other;
    public function validateAttribute($model, $attribute)
    {
        if (($model->{$this->other}) == '210304198710271612') {
            $this->addError($model, $attribute, 'Either '.$attribute.' or '.$this->other.' is required!');
            $this->addError($model, $this->other, 'Either '.$attribute.' or '.$this->other.' is required!');
        }
    }
}
