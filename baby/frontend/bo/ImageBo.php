<?php
namespace frontend\bo;

use Yii;
use frontend\lib\helper\ImageHelper;
use frontend\lib\helper\SessionHelper;

class ImageBo{

    private $validateWidth = 64;
    private $validateHeight = 21;
    private $validateLength;
    private $validateValidType;
    private $validateTextColor = '#3e3e3e';
    private $validateBackgroundColor = '#B6B6B6';

    function __construct(){
        $this->validateLength = Yii::$app->params['VALID_CODE_LENGTH'];
        $this->validateValidType = Yii::$app->params['VALID_CODE_TYPE'];
    }

    public function validateGernate(){
        $imageHelper = new ImageHelper();
        $valid = $imageHelper->imageValidate($this->validateWidth, $this->validateHeight, $this->validateLength, $this->validateValidType, $this->validateTextColor, $this->validateBackgroundColor);
        SessionHelper::init()->set('valid', $valid);
        return $imageHelper;
    }

    public function validateDisplay(ImageHelper $imageHelper){
        $imageHelper->display();
    }
}
