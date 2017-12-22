<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/17
 * Time: 8:46
 */
namespace Controller\Home;
class LoginController extends \Core\Controller
{
    public function login(){

        if(!empty($_POST)){
            $uname = $_POST['username'];
            $pwd = $_POST['pwd'];

            $userModel = new \Model\UserModel;
            $rs = $userModel->getUserinfo($uname,$pwd);
            if($rs){
                $_SESSION['home_userinfo'] = $rs;
                if(!empty($_POST['checkREM'])){
                    setcookie('home_userinfo',serialize($rs),time()+3600*24*7);
                }
                $this->success('./index.php?p=home&c=index&a=index','登录成功');
            }else{
                $this->error('./index.php?p=home&c=login&a=login','登录失败');
            }
        }

    }
    public function captcha(){

        $captcha = new \Core\Captcha(102,35);
        $captcha->generalVerify();
    }
    public function loginOut(){
        session_unset();
        session_destroy();
        $this->success('./index.php?p=home&c=index&a=index','安全退出',1);
    }

    public function regester(){
        if(!empty($_POST)){

            $uname = $_POST['uname'];
            $pwd = $_POST['pwd'];
            $conpwd = $_POST['conpwd'];
            $code = $_POST['code'];

            if($pwd != $conpwd){
                $this->error('./index.php?p=home&c=login&a=regester','密码不匹配',1);
            }
            if(!\Core\Captcha::checkVerify($code)){
                $this->error('./index.php?p=home&c=login&a=regester','验证码不正确',1);
            }
             $img ="";
                if(!empty($_FILES['img']['name'])){
                    $img = \Libs\UploadFile::upload($_FILES['img']);
                    if(!$img){
                        $this->error('./index.php?p=home&c=home&a=regester', \Libs\UploadFile::getMessage(), 1);

                    }
                }
                $userModel = new \Model\UserModel();
                $rs = $userModel->add($uname,$pwd,$img);
                if ($rs) {

                   $data = $userModel->getUserinfo($uname,$pwd);
                    if($data){
                        $_SESSION['home_userinfo'] = $data;

                        $this->success('./index.php?p=home&c=index&a=index','添加成功,且成功登录',3);
                    }else{
                        $this->error('./index.php?p=home&c=login&a=login','登录失败',1);
                    }
                } else {
                    $this->error('./index.php?p=home&c=login&a=regester', '添加失败', 1);

                }

        }else {
            $this->Smarty->display('regester.html');
        }
    }


}