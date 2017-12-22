<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/12
 * Time: 14:20
 */
namespace Controller\Admin;
class BaseController extends \Core\Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($_SESSION['admin_userinfo'])) {
            $this->error('./index.php?p=admin&c=Login&a=login', '请登录后访问', 1);
        }

    }
}