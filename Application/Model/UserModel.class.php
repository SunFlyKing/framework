<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/9
 * Time: 14:56
 */
namespace Model;

class UserModel extends \Core\Model
{
    public function getRow()
    {
        return $this->mypdo->getRow('select *from student LIMIT 1');
    }

    public function getUserinfo($uname,$pwd){
        $uname = addslashes($uname);
        $pwd = md5($pwd);

        return $this->mypdo->getRow("select *from users where uname='$uname' and pwd='$pwd'");
    }

    public function add($uname,$pwd,$uimg){
        $uname = addslashes($uname);
        $pwd = md5($pwd);
        $time = time();
        $sql = "insert into users(uname,pwd,created_time,display,uimg) values('$uname','$pwd',$time,1,'$uimg')";
        return $this->mypdo->exec($sql);
    }


    public function getallUser()
    {
        $sql = "select *from users";
        return $this->mypdo->getAll($sql);
    }

    public function delete($id){
        $sql = "delete from users where id = $id";
        return $this->mypdo->exec($sql);
    }
    public function deleteall($id){
        $sql = "delete from users where id in ($id)";
        return $this->mypdo->exec($sql);
    }
}