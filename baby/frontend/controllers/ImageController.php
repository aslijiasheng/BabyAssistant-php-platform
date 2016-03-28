<?php
namespace frontend\controllers;

use Yii;
use yii\rest\Controller;
use frontend\lib\helper\ImageHelper;

class ImageController extends Controller
{

    public function actionValidata(){
        $imageHelper = new ImageHelper();
        $valid = $imageHelper->imageValidate(64, 21, Yii::$app->params['VALID_CODE_LENGTH'], Yii::$app->params['VALID_CODE_TYPE'],'#3e3e3e','#B6B6B6');
        $imageHelper->display();
        exit;
    }

}
