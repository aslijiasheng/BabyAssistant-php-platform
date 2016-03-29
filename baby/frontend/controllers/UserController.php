<?php
namespace frontend\controllers;

use Yii;
use yii\rest\Controller;
use frontendBo\BabyBo;
use frontend\beans\BabyUserForm;
use frontend\lib\helper\SessionHelper;

class UserController extends Controller
{

    public function actionIndex()
    {
        $babyBo = new BabyBo();
        $babyFormToken = $babyBo->generateToken();
        // \Yii::error('basket error', 'basket');
        $this->renderView('home', $babyFormToken);
    }

    public function actionInfo(){
        $ret = array('succ' => TRUE, 'message' => NULL, 'data' => array());
        $babyUserForm = new BabyUserForm();
        $babyUserForm->load(['BabyUserForm' => Yii::$app->request->post()]);
        if (!$babyUserForm->validate()) {
            // validation failed: $errors is an array containing error messages
            $errors = $babyUserForm->errors;
            var_dump($errors);
            exit;
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
