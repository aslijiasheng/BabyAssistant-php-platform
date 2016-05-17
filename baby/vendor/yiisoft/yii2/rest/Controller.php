<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\rest;

use Yii;
use yii\filters\auth\CompositeAuth;
use yii\filters\ContentNegotiator;
use yii\filters\RateLimiter;
use yii\web\Response;
use yii\filters\VerbFilter;

/**
 * Controller is the base class for RESTful API controller classes.
 *
 * Controller implements the following steps in a RESTful API request handling cycle:
 *
 * 1. Resolving response format (see [[ContentNegotiator]]);
 * 2. Validating request method (see [[verbs()]]).
 * 3. Authenticating user (see [[\yii\filters\auth\AuthInterface]]);
 * 4. Rate limiting (see [[RateLimiter]]);
 * 5. Formatting response data (see [[serializeData()]]).
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Controller extends \yii\web\Controller
{
    /**
     * @var string|array the configuration for creating the serializer that formats the response data.
     */
    public $serializer = 'yii\rest\Serializer';
    /**
     * @inheritdoc
     */
    public $enableCsrfValidation = false;

    public static $URL_ROOT = 'http://localhost:3000/';


    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'contentNegotiator' => [
                'class' => ContentNegotiator::className(),
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                    'application/xml' => Response::FORMAT_XML,
                ],
            ],
            'verbFilter' => [
                'class' => VerbFilter::className(),
                'actions' => $this->verbs(),
            ],
            'authenticator' => [
                'class' => CompositeAuth::className(),
            ],
            'rateLimiter' => [
                'class' => RateLimiter::className(),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function afterAction($action, $result)
    {
        $result = parent::afterAction($action, $result);
        return $this->serializeData($result);
    }

    /**
     * Declares the allowed HTTP verbs.
     * Please refer to [[VerbFilter::actions]] on how to declare the allowed verbs.
     * @return array the allowed HTTP verbs.
     */
    protected function verbs()
    {
        return [];
    }

    /**
     * Serializes the specified data.
     * The default implementation will create a serializer based on the configuration given by [[serializer]].
     * It then uses the serializer to serialize the given data.
     * @param mixed $data the data to be serialized
     * @return mixed the serialized data.
     */
    protected function serializeData($data)
    {
        return Yii::createObject($this->serializer)->serialize($data);
    }

    /**
     * renderView 
     * jason custom node http data
     * @param mixed $url 
     * @param mixed $data 
     * @param mixed $Method 
     * @access public
     * @return void
     */
    public function renderView($url, $data = NULL, $Method = 'POST'){
        $url = self::$URL_ROOT . $url;
        $curl = curl_init($url);
        $postData = array(
            'data' => $data,//数据
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $Method);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($postData, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if ($result === false || $httpCode == '500') {
            header("HTTP/1.1 500 Internal Server Error");
            header("Status: 500 Internal Server Error");
            header('Error From: template node');
        }

        if ($httpCode == '404') {
            header("HTTP/1.1 404 Not Found");
            header("Status: 404 Not Found");
            header('Error From: template node');
        }

        echo $result;
        exit;
    }


    public function echoAjaxResult($data, $code=1000){
        if($data['success']){
            $output = $data;
        }else{
            $output=array(
                'code'=>$code,
                'msg'=>isset($data['error']) ? $data['error'] : $data['msg'],
                'message'=>"",//配合前端上报功能增加的字段
            );
            if(1 == count($output['msg']) && isset($output['msg']['common'])){
                $output['message'] = $output['msg']['common'];
            }
            header("HTTP/1.1 608 Error");
            header("Status: 608 Error");
        }
        echo json_encode($output);
        exit;
    }

}
