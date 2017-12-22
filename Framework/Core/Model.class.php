<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/9
 * Time: 14:52
 */
namespace Core;

class Model
{
    protected $mypdo;
    public function __construct()
    {
        $array = array(
            'host'=>$GLOBALS['config']['database']['host'],
            'port'=>$GLOBALS['config']['database']['port'],
            'user'=>$GLOBALS['config']['database']['user'],
            'pwd'=>$GLOBALS['config']['database']['pwd'],
            'charset'=>$GLOBALS['config']['database']['charset'],
            'dbname'=>$GLOBALS['config']['database']['dbname']
        );
        $this->mypdo = MyPdo::getInstance($array);
    }

}