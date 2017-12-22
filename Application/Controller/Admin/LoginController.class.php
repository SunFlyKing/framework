<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/12
 * Time: 10:42
 */
namespace Controller\Admin;

class LoginController extends \Core\Controller
{

    public function login()
    {

        if(!empty($_POST)){
            $uname = $_POST['uname'];
            $pwd = $_POST['pwd'];
            $code = $_POST['code'];

            if(!\Core\Captcha::checkVerify($code)){
               $this->error('./index.php?p=admin&c=login&a=login','验证码不正确',1);
            }

            $adminsmodel = new \Model\AdminModel();
            $rs = $adminsmodel->getUserinfo($uname,$pwd);
            if($rs){
                $_SESSION['admin_userinfo'] = $rs;
                $adminsmodel->updateUserinfo($rs['id']);
               $this->success('./index.php?p=admin&c=index&a=index','登录成功',1);
            }else{
                $this->error('./index.php?p=admin&c=login&a=login','登录失败',1);
            }
        }else{
            $this->Smarty->display('login.html');
        }

    }
    public function captcha(){

        $captcha = new \Core\Captcha(102,35);
        $captcha->generalVerify();
    }

    public function loginOut(){

        session_unset();
        session_destroy();
        $this->success('./index.php?p=admin&c=login&a=login','安全退出',1);
    }

    public function regester(){
        if(!empty($_POST)){

            $uname = $_POST['uname'];
            $pwd = $_POST['pwd'];
            $conpwd = $_POST['conpwd'];
            $code = $_POST['code'];

            if($pwd != $conpwd){
                $this->error('./index.php?p=admin&c=login&a=regester','密码不匹配',1);
            }
            if(!\Core\Captcha::checkVerify($code)){
                $this->error('./index.php?p=admin&c=login&a=regester','验证码不正确',1);
            }
            $img ="";
            if(!empty($_FILES['img']['name'])){
                $img = \Libs\UploadFile::upload($_FILES['img']);
                if(!$img){
                    $this->error('./index.php?p=admin&c=Articles&a=add', \Libs\UploadFile::getMessage(), 1);

                }
            }
            $adminModel = new \Model\AdminModel();
            $rs = $adminModel->addAdmin($uname,$pwd,$img);
            if ($rs) {

                $data = $adminModel->getUserinfo($uname,$pwd);
                if($data){
                    $_SESSION['admin_userinfo'] = $data;
                    $adminModel->updateUserinfo($data['id']);
                    $this->success('./index.php?p=admin&c=index&a=index','添加成功,且成功登录',3);
                }else{
                    $this->error('./index.php?p=admin&c=login&a=login','登录失败',1);
                }
            } else {
                $this->error('./index.php?p=admin&c=login&a=regester', '添加失败', 1);

            }

        }else {
            $this->Smarty->display('regester.html');
        }
    }
}