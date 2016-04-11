<?php
namespace frontend\controllers;

use Yii;
use yii\rest\Controller;
use frontend\bo\BabyBo;
use frontend\beans\BabyUserForm;
use common\lib\helper\SessionHelper;
use common\lib\helper\ConsoleLogger;
use frontend\models\es\Customer;

class UserController extends Controller{

    public function actionIndex(){
        // $db = ActiveRecord::getDb();
        // // delete index
        // if ($db->createCommand()->indexExists('yiitest')) {
            // $db->createCommand()->deleteIndex('yiitest');
        // }
        // $db->createCommand()->createIndex('yiitest');
        // $command = $db->createCommand();
        // Customer::setUpMapping($command);
        // $customer = new Customer();
        // $customer->id = 1;
        // $customer->setAttributes(['email' => 'user1@example.com', 'name' => 'user1', 'address' => 'address1', 'status' => 1], false);
        // $customer->insert();
        $babyBo = new BabyBo();
        $babyFormToken = $babyBo->generateToken();
        $this->renderView('home', $babyFormToken);
    }

    public function actionInfo(){
        $ret = array('succ' => TRUE, 'message' => NULL, 'data' => array());
        $babyBo = new BabyBo();
        $babyUserForm = new BabyUserForm();
        $babyUserForm->load(['BabyUserForm' => Yii::$app->request->post()]);
        if (!$babyUserForm->validate()) {
            $babyFormToken = $babyBo->generateToken();
            $ret['data']['token'] = $babyFormToken;
            $ret['succ'] = false;
            $ret['message'] = $babyUserForm->errors();
            $this->renderView('home/reiver', $ret);
        }
        $ret = $babyBo->userInfo($babyUserForm);
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
