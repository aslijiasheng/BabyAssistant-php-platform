<?php
namespace frontend\components\validators;

use Yii;
use yii\validators\Validator;
use frontend\bo\ImageBo;

class CodesValidator extends Validator
{
    public $other;
    public function validateAttribute($model, $attribute)
    {
        //取出session中的数据
        $imageBo = new ImageBo();
        $gernateValid = $imageBo->validateGet();
        if (($model->{$this->other}) != $gernateValid) {
            $this->addError($model, $attribute, 'Codes is Inconsistent!');
        }
    }
}
