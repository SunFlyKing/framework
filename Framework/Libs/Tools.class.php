<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/13
 * Time: 10:55
 */
namespace Libs;
class Tools
{
    public static function getTree($categorys,$pid = 0,$level = 0)
    {
        foreach ($categorys as $category){
            if($category['pid'] == $pid){
                //给$category变量加一个键
                $category['level'] = $level;
                $GLOBALS['tree'][] = $category;
                self::getTree($categorys,$category['id'],$level+1);
            }
        }
    }
}