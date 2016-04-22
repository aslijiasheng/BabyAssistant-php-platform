<?php
 
namespace console\controllers;
 
use yii\console\Controller;
 
/**
 * Test controller
 */
class TestController extends Controller {
 
    public function actionIndex() {
        echo "cron service runnning";
    }
 
    /**
     * actionMail 
     * php ./yii test/mail [--to="hemctest@gmail.com"]
     * @param mixed $to 
     * @access public
     * @return void
     */
    public function actionMail($to) {
        echo "Sending mail to " . $to;
    }
 
}
