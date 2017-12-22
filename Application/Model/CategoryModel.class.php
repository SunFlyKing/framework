<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/13
 * Time: 11:05
 */
namespace Model;
class CategoryModel extends \Core\Model
{
    public function getAll($where = array()){


        $whereStr = empty($where)?'':"where pid = {$where['pid']}";

        return $this->mypdo->getAll("select * from categorys $whereStr order by sort asc");
    }

    public function delete($id){
        return $this->mypdo->exec("delete from categorys where id = $id");
    }
    public function isSon($id){
        return $this->mypdo->getRow("select *from categorys where pid = $id");
    }

    public function add($pid,$name,$sort){
        $time = time();
        $sql = "insert into categorys values (null,'$name','$pid','$sort',$time,$time,1)";
        return $this->mypdo->exec($sql);
    }

    public function getRow($id){
        return $this->mypdo->getRow("select * from categorys where id = $id");
    }

    public function update($id,$pid,$name,$sort){
        $time = time();
        $sql = "update categorys set pid=$pid,name='$name',sort=$sort,updated_time=$time where id =$id";
        return $this->mypdo->exec($sql);
    }

    public function getdata($showrow,$curpage){

        $sql = "select *from categorys";
        $sql .= " LIMIT " . ($curpage - 1) * $showrow . ",$showrow;";
        return $this->mypdo->getAll($sql);
    }
    public function gettotal(){
        $sql = "select *from categorys";
        return $this->mypdo->getCount($sql);
    }
}