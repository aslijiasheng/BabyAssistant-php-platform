<?php
namespace frontendBo;

use Yii;
use frontend\lib\helper\RandomStringGenerator;
use frontend\lib\helper\SessionHelper;

class BabyBo{

    public function generateToken(){
        $customAlphabet = '0123456789ABCDEF';
        // Create new instance of generator class.
        $generator = new RandomStringGenerator($customAlphabet);
        // Set token length.
        $tokenLength = 32;

        // Call method to generate random string.
        $token['babyFormToken'] = $generator->generate($tokenLength);
        SessionHelper::init()->set('babyFormToken', $token);
        return $token;
    }

}
