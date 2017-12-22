<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/12
 * Time: 11:27
 */
namespace Controller\Admin;

class IndexController extends BaseController
{

    public function index()
    {
        $this->Smarty->assign('uname','sfx');
        $this->Smarty->display('index.html');
    }
    public function welcome()
    {
        $this->Smarty->display('welcome.html');
    }



}