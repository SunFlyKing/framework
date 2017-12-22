<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/21
 * Time: 11:12
 */
namespace Model;
class MessageModel extends \Core\Model
{
    public function getAll()
    {
        $sql = "select *from messages ";
        return $this->mypdo->getAll($sql);
    }
}