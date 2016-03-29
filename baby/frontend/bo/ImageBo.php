<?php
namespace frontend\bo;

use Yii;
use frontend\lib\helper\ImageHelper;

class ImageBo{

    private $validateWidth = 64;
    private $validateHeight = 21;
    private $validateLength;
    private $validateValidType;
    private $validateTextColor = '#3e3e3e';
    private $validateBackgroundColor = '#B6B6B6';
    private $_session;

    function __construct(){
        $this->validateLength = Yii::$app->params['VALID_CODE_LENGTH'];
        $this->validateValidType = Yii::$app->params['VALID_CODE_TYPE'];
        $this->_session = Yii::$app->session;
    }

    public function validateGernate(){
        $imageHelper = new ImageHelper();
        $valid = $imageHelper->imageValidate($this->validateWidth, $this->validateHeight, $this->validateLength, $this->validateValidType, $this->validateTextColor, $this->validateBackgroundColor);
        $this->validateSave($valid);
        return $imageHelper;
    }

    public function validateSave($valid){
        $this->_session->set('valid', $valid);
    }

    public function validateGet(){
        return $this->_session->get('valid');
    }

    public function validateDisplay(ImageHelper $imageHelper){
        $imageHelper->display();
    }
}
