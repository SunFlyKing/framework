<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/12
 * Time: 11:22
 */
namespace Model;

class AdminModel extends \Core\Model
{
    public function getUserinfo($uname,$pwd){
        $uname = addslashes($uname);
        $pwd = md5($pwd);
        $sql = "select *from admins where uname = '$uname' and pwd = '$pwd'";
        return $this->mypdo->getRow($sql);
    }

    public function updateUserinfo($id){
        $time = time();
        $ip = ip2long($_SERVER['REMOTE_ADDR']);
        return $this->mypdo->exec("update admins set
        login_count = login_count +1,
        last_login_time = $time,
        last_login_ip = $ip,
        updated_time = $time
        where id = $id"
        );
    }

    public function addAdmin($uname,$pwd,$img){
        $uname = addslashes($uname);
        $pwd = md5($pwd);
        $time = time();
        $sql = "insert into admins(uname,pwd,created_time,display,img) values('$uname','$pwd',$time,1,'$img')";
        return $this->mypdo->exec($sql);
    }

    public function getallUser()
    {
        $sql = "select *from admins";
        return $this->mypdo->getAll($sql);
    }

    public function delete($id){
        $sql = "delete from admins where id = $id";
        return $this->mypdo->exec($sql);
    }
    public function deleteall($id){
        $sql = "delete from admins where id in ($id)";
        return $this->mypdo->exec($sql);
    }
}