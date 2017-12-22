<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/15
 * Time: 10:55
 */
namespace Model;

class ArticlesModel extends \Core\Model
{
    public function getAll($where = array()){

        $whereStr = empty($where['display'])?'':"where articles.display = {$where['display']}";
        $sql = "select articles.*,categorys.name as cateName,admins.uname from articles
left join categorys on articles.cid = categorys.id
left join admins on articles.admin_id = admins.id $whereStr;
";
        return $this->mypdo->getAll($sql);
    }

    public function gettll($where = array()){

        $whereStr = empty($where['display'])?'':"where articles.display = {$where['display']}";
        $sql = "select * from categorys;
";
        return $this->mypdo->getAll($sql);
    }
    public function getOne($id){

        $sql = "select *from articles where id =$id";
        return $this->mypdo->getAll($sql);
    }


    public function delete($id){
        $sql = "delete from articles where id = $id";
        return $this->mypdo->exec($sql);
    }
    public function deleteall($id){
        $sql = "delete from articles where id in ($id)";
        return $this->mypdo->exec($sql);
    }

    public function getdata($showrow,$curpage ,$where = array(),$id =array()){
        $whereid = empty($id['id'])?'':"and categorys.pid in ({$id['id']})";
        $whereStr = empty($where['display'])?'':"where articles.display = {$where['display']}";
        $sql = "select articles.*,categorys.name as cateName,admins.uname from articles
left join categorys on articles.cid = categorys.id
left join admins on articles.admin_id = admins.id $whereStr $whereid";


        $sql .= " LIMIT " . ($curpage - 1) * $showrow . ",$showrow;";
        return $this->mypdo->getAll($sql);
    }
    public function gettotal($where=array(),$whereid=array()){
        $whereStr = empty($where['display'])?'':"where articles.display = {$where['display']}";
        $whereId = empty($whereid['id'])?'':"and categorys.pid in ({$whereid['id']})";
        $sql = "select articles.* from articles LEFT JOIN categorys on categorys.id = articles.cid $whereStr $whereId";
//        echo $sql;die;
        return $this->mypdo->getCount($sql);
    }

    public function add($cid,$title,$img,$author,$desc,$content,$is_tuijian,$display){
        $time =time();
        $sql ="insert into articles
        (cid,title,img,author,`desc`,content,is_tuijian,display,created_time,updated_time)
        values
        ($cid,'$title','$img','$author','$desc','$content',$is_tuijian,$display,$time,$time)";

        return $this->mypdo->exec($sql);
    }

    public function update($id,$cid,$title,$img,$author,$desc,$content,$is_tuijian,$display){
        $time =time();
        $sql ="update articles
        set cid=$cid,title='$title',img='$img',author='$author',`desc`='$desc',content='$content',is_tuijian=$is_tuijian,display=$display,created_time=$time,updated_time=$time where id =$id";
        return $this->mypdo->exec($sql);
    }

    public function getFliedname(){

    }
    public function search($where){
        $sql = "select *from articles where $where";
        return $this->mypdo->getAll($sql);
    }

    public function tuijian()
    {
        $sql = "select *from articles where is_tuijian = 1 and display = 1 order by created_time DESC limit 8";
        return $this->mypdo->getAll($sql);
    }

    public function headerimg()
    {
        $sql = "select *from articles where is_tuijian = 1 and display = 1 order by created_time DESC limit 5";
        return $this->mypdo->getAll($sql);
    }

    public function shang($aid)
    {
        $sql = "select *from articles where id<{$aid} and display= 1 order by id DESC limit 1";
        return $this->mypdo->getRow($sql);
    }
    public function xia($aid)
    {
        $sql = "select *from articles where id> {$aid} and display = 1 order by id desc limit 1";
        return $this->mypdo->getRow($sql);
    }

}