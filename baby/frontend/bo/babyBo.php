<?php
namespace frontendBo;

use Yii;
use frontend\lib\helper\RandomStringGenerator;
use frontend\lib\helper\SessionHelper;
use frontend\lib\helper\IDCardHelper;
use frontend\beans\BabyUserForm;
use frontend\models\dao\BabyUserInfoDao;
use app\config\code\Error;

class BabyBo{

    /**
     * generateToken 
     * 获取token
     * @access public
     * @return void
     */
    public function generateToken(){
        $customAlphabet = '0123456789ABCDEF';
        // Create new instance of generator class.
        $generator = new RandomStringGenerator($customAlphabet);
        // Set token length.
        $tokenLength = 32;

        // Call method to generate random string.
        $token['babyFormToken'] = $generator->generate($tokenLength);
        SessionHelper::init()->set('babyFormToken', $token['babyFormToken']);
        return $token;
    }

    public function userInfo(BabyUserForm $babyUserForm){
        $idCardDatas = IDCardHelper::getIDCardInfo($babyUserForm->identificationNumber);
        /*
         * 获取回性别 年龄 星座  生肖 生日
         * get 出年龄的分析结果 当前年龄段的分析结果
         * get出当前年龄  不符则return 3001 年龄超标
         * 符合后 开始对数据进行拉取  通过es将babyAgent/baby_age/{age} 获取专家分析数据
         * 符合后 开始对数据进行拉取  通过es将babyAgent/baby_book/{age} 获取建议书籍数据
         * 符合后 开始对数据进行拉取  通过es将babyAgent/baby_goods/{age} 获取建议商品数据
         * get出当前星座 进行性格分析
         * 符合后 开始对数据进行拉取  通过es将babyAgent/baby_constellation/{age} 获取星座数据
         * get出当前生肖 进行性格分析
         * 符合后 开始对数据进行拉取  通过es将babyAgent/baby_lunar/{age} 获取生肖数据
         */
        $babyUserInfo = BabyUserInfoDao::getUserInfo($idCardDatas['age']);
        exit;

    }

}
