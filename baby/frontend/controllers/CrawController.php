<?php
namespace frontend\controllers;

use Yii;
use yii\rest\Controller;
use common\lib\helper\ReptileComponents;

class CrawController extends Controller{

    public function actionOnetofive(){
        $babyOneTodFiveUrl = Yii::$app->params['craw']['oneTodFive'];
        $babyOneTodFiveHtml = ReptileComponents::file_get_html($babyOneTodFiveUrl);
        $ret = array();
        foreach($babyOneTodFiveHtml->find('ul.knowledge-lists') as $article) {
            // get intro
            for($i=0; $i<24; $i++){
                $item['diggs'] = $article->find('li a', $i)->outertext;
                $item['text'] = $article->find('li a', $i)->plaintext;
                $ret[] = $item;
            }
        }
        $dom = $babyOneTodFiveHtml->find('span.info');
        foreach($dom as $article){
            $ret['ar'] = $article->find('em', 0)->plaintext;
        }
        var_dump($ret);
        //warning memory
        $babyOneTodFiveHtml->clear();
        unset($babyOneTodFiveHtml);
        exit;
    }
}
