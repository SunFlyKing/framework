<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/17
 * Time: 14:39
 */
namespace Model;
class CommentsModel extends \Core\Model
{
    public function add($pid,$uid,$aid,$content,$display=1){
        $time = time();
        $sql = "insert into comments
        (pid,uid,aid,content,created_time,updated_time,display)
        values
        ($pid,$uid,$aid,'$content',$time,$time,$display)";

        return $this->mypdo->exec($sql);
    }
    public function getAll($aid){
        $sql = "select comments.*,users.uname,users.uimg as img from comments left join users on comments.uid = users.id where comments.aid = $aid";

        return $this->mypdo->getAll($sql);
    }

    public function newComment()
    {
        $sql = "select *from comments order by created_time DESC  LIMIT 5";
        return $this->mypdo->getAll($sql);
    }

}