<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/17
 * Time: 19:35
 */
namespace Controller\Home;
class BaseController extends \Core\Controller
{
    public function __construct()
    {
        parent::__construct();
        if(empty($_SESSION['home_userinfo']) && !empty($_COOKIE['home_userinfo'])){
          //  $_SESSION['home_userinfo'] = unserialize($_COOKIE['home_userinfo']);
        }
    }

}