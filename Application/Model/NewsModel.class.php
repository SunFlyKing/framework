<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/9
 * Time: 10:33
 */
namespace Model;

class NewsModel extends \Core\Model
{
    public function getRow($id)
    {
        return $this->mypdo->getRow("select *from student where id = $id");
    }

    public function getAll()
    {
        return $this->mypdo->getAll('select *from student');
    }

    public function delete($id)
    {
        return $this->mypdo->exec("delete from student where id = $id");
    }
    public function insertnew($name,$sex,$edu,$salary,$bonus,$city){
        $sql ="insert into student values(null,'$name','$sex','$edu','$salary','$bonus','$city')";
        return $this->mypdo->exec($sql);
    }

    public function updatenew($id,$name,$sex,$edu,$salary,$bonus,$city){
        $sql = "update student set name = '$name',sex = '$sex',
 edu ='$edu',salary = '$salary',bonus='$bonus',city='$city' where id = {$id}";
        return $this->mypdo->exec($sql);
    }

    public function showPage(){
        //每页显示信息条数
        $pageSize = 13;
        //获取当前页码
        $page = isset($_GET['page']) ?$_GET['page']:1;
        //计算当前页应该显示第几条信息
        $startNow = ($page-1)*$pageSize;
        //计算数据库中信息总数
        $sql = "select *from student";
        $count=$this->mypdo->getCount($sql);;
        //计算数据库信息可以分为多少页
        $pages = ceil($count/$pageSize);
        //获取当前页所要的信息 10 条 从第startNowt开始
        $sql .= " order by id desc limit $startNow,$pageSize";
        $arr = $this->mypdo->getAll($sql);
        $page_str = $this->setPager($page,$pages);
        return array('str'=>$page_str,'all'=>$arr);

    }

    private function setPager($page,$pages){
        $start = $page-5;
        $end=$page+4;
        if($page<6){
            $start=1;
            $end=$end+6-$page;
        }
        if($end>$pages){
            $start=$pages-10+1;
            $end=$pages;
        }
        if($pages<=10){
            $start=1;
            $end=$pages;
        }
        $str ="";
        for($i=$start;$i<=$end;$i++){
            if($i==$page){
                $str .="<span class='current' style='margin: 0 8px'>$i</span>";
            }else{
                $str.="<a href='?page=$i' style='display: inline-block;margin: 0 3px' >$i</a>";
            }
        }
        $pre =$page-1;
        $nex = $page+1;
        $str1 ="<a href='?page=$pre' class='current' style='margin: 0 8px'>上一页</a>";
        $str2 ="<a href='?page=$nex'class='current' style='margin: 0 8px'>下一页</a>";
        $str=$str1.$str.$str2;
        return $str;
    }
}