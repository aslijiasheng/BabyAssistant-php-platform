<?php
namespace frontend\controllers;

use Yii;
use yii\rest\Controller;
use frontendBo\BabyBo;
use frontend\models\BabyUserForm;

class UserController extends Controller
{
    public function actionIndex()
    {
        // $babyBo = new frontendBo\BabyBo();
        // \Yii::error('basket error', 'basket');
        $this->renderView('home');
    }

    public function actionInfo(){
        $ret = array('succ' => TRUE, 'message' => NULL, 'data' => array());
        $model = new BabyUserForm();
        $model->load(['BabyUserForm' => Yii::$app->request->post()]);
        if (!$model->validate()) {
            // validation failed: $errors is an array containing error messages
            $errors = $model->errors;
            $this->renderView('home/reiver', $ret);
        }

        $babyBo = new BabyBo();
        $ret = $babyBo->userInfo();
        $this->renderView('home/reiver', $ret);
    }

    public function actionCreate(){
        $a = [1,2,3,4,5];
        echo json_encode($a);
    }

    public function actionUpdate(){
        $a = [1,2,3,4,5];
        echo json_encode($a);
    }

    public function actionDelete(){
        $a = [1,2,3,4,5];
        echo json_encode($a);
    }

    public function actionPush(){
        var_dump('push');
    }

}
