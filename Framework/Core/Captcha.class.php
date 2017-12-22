<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/12
 * Time: 14:49
 */
namespace Core;
class Captcha{

    private $len;   //验证码长度
    private $font;  //字号大小 1,2,3,4,5
    private $width; //验证码图片宽度
    private $height;//验证码图片高度

    public function __construct($width=0, $height=0, $len=4, $font=5)
    {
        $this->initParam($width, $height, $len, $font);
    }

    /**
     * 随机生成字符串
     */
     private function createCode($lenth=4){
        $char_array = array_merge(range(0,9),range('a','z'),range('A','Z'));
        shuffle($char_array);
        $index_array = array_rand($char_array,$lenth);
        $str = "";
        foreach ($index_array as $index){
            $str .=$char_array[$index];
        }
        $_SESSION['captcha'] = $str;
        return $str;
    }
    /**
     * 初始化成员属性
     * @param int $width  验证码图片宽度
     * @param int $height 验证码图片高度
     * @param int $len    验证码长度
     * @param int $font   字号大小 1,2,3,4,5
     */
    private function initParam($width, $height, $len, $font)
    {
        $this->width = $width;
        $this->height = $height;
        $this->len = $len;
        $this->font = $font;
    }

    /**
     * 生成验证码
     */
    public function generalVerify(){
        $str = $this->createCode();
        $img = imagecreate($this->width,$this->height);
        imagecolorallocate($img,255,0,0);
        $x = (imagesx($img)-imagefontwidth($this->font)*strlen($str))/2;
        $y = (imagesy($img)-imagefontheight($this->font))/2;
        $color = imagecolorallocate($img,255,255,255);
        imagestring($img,$this->font,$x,$y,$str,$color);
    ob_start();
    ob_clean();
    header('content-type:image/jpeg');
    imagejpeg($img);
    imagedestroy($img);
    }

    /**
     * @param 检测验证码
     * @return bool
     */
    public static function checkVerify($code){
        return strtolower($code) == strtolower($_SESSION['captcha']);


    }
}
