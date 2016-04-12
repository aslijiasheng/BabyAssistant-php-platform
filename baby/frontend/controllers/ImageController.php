<?php
namespace frontend\controllers;

use Yii;
use yii\rest\Controller;
use frontend\bo\ImageBo;

class ImageController extends Controller{

    public function actionValidata(){
        $imageBo = new ImageBo();
        $imageGernate = $imageBo->validateGernate();
        $imageBo->validateDisplay($imageGernate);
        exit;
    }

}
