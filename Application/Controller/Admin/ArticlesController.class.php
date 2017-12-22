<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/15
 * Time: 10:52
 */
namespace Controller\Admin;

class ArticlesController extends BaseController
{
    private $rs;
    private $open = 0;
    public function index(){

        $showrow = 10; //一页显示的行数
        $url = "./index.php?p=admin&c=Articles&a=index&page= {page}"; //分页地址
        $curpage = empty($_GET['page']) ? 1 : $_GET['page']; //当前的页,还应该处理非数字的情况

        $articlesModel = new \Model\ArticlesModel;

        $total = $articlesModel->gettotal();

        if (!empty($_GET['page']) && $total != 0 && $curpage > ceil($total / $showrow))
        {
            $curpage = ceil($total_rows / $showrow); //当前页数大于最后页数，取最后一页
        }

        if($this->open == 1){

            $articleList=$this->rs;

//            echo "<pre>";
//            print_r($articleList);die;
        }else{
            $articleList = $articlesModel->getdata($showrow,$curpage);
        }

        $str = "";
        if ($total > $showrow) {//总记录数大于每页显示数，显示分页
            $page = new \Libs\page($total, $showrow, $curpage, $url, 2);
            $str= $page->myde_write();
        }

        $this->Smarty->assign('str',$str);
        $this->Smarty->assign('articleList',$articleList);
        $this->Smarty->assign('page',$curpage);
        $this->open = 0;
        $this->Smarty->display('index.html');
    }

    public function deleteall(){
        $page = $_GET['page'];
        $url = "./index.php?p=admin&c=Articles&a=index&page={$page}";

        //批量删除
        if($_POST['btnSave']){

            if(empty($_POST['del_id'])){
                echo"<script>alert('必须选择一个产品,才可以删除!');history.back(-1);</script>";
                exit;
            }else{
                /*如果要获取全部数值则使用下面代码*/

                $id= implode(",",$_POST['del_id']);
                $articlesModel = new \Model\ArticlesModel;
                $rs = $articlesModel->deleteall($id);
                if($rs){
                    $this->success($url,'批量删除成功',1);
                    die;
                }else{
                    $this->error($url,'批量删除失败',1);
                    die;
                }
            }
        }
    }
    public function delete(){

        $page = $_GET['page'];
        $url = "./index.php?p=admin&c=Articles&a=index&page={$page}";

        //单个删除
        $id = (int)$_GET['id'];
        $articlesModel = new \Model\ArticlesModel;
        $rs = $articlesModel->delete($id);
        if($rs){
            $this->success($url,'删除成功',1);
        }else{
            $this->error($url,'删除失败',1);

        }
    }

    public function add()
    {

        if (!empty($_POST)) {
            $cid = (int)$_POST['cid'];
            $title = $this->Xss->purify($_POST['title']);
//            $img = $_POST['img'];
            $author = $_POST['author'];
            $desc = $_POST['desc'];
            $content = $_POST['content'];
            $is_tuijian = (int)$_POST['is_tuijian'];
            $display = (int)$_POST['display'];

            $img ="";
            if(!empty($_FILES['img']['name'])){
                $img = \Libs\UploadFile::upload($_FILES['img']);
                if(!$img){
                    $this->error('./index.php?p=admin&c=Articles&a=add', \Libs\UploadFile::getMessage(), 1);

                }
            }
            $articlesModel = new \Model\ArticlesModel;
            $rs = $articlesModel->add($cid, $title, $img, $author, $desc, $content, $is_tuijian, $display);
            if ($rs) {
                $this->success('./index.php?p=admin&c=Articles&a=index', '添加成功', 1);
            } else {
                $this->error('./index.php?p=admin&c=Articles&a=index', '添加失败', 1);

            }
        } else {
            $articlesModel = new \Model\CategoryModel();
            $articleList = $articlesModel->getAll();
            \Libs\Tools::getTree($articleList);
//            echo "<pre>";
//            print_r($GLOBALS['tree']);die;
            $this->Smarty->assign('articleList', $GLOBALS['tree']);
            $this->Smarty->display('add.html');
        }
    }
    public function update(){

            if(!empty($_POST)){
                $page = $_GET['page'];
                $id = (int)$_POST['id'];
                $cid = (int)$_POST['cid'];
                $title = $_POST['title'];
//                $img = $_POST['img'];
                $author = $_POST['author'];
                $desc = $_POST['desc'];
                $content = $_POST['content'];
                $is_tuijian =(int)$_POST['is_tuijian'];
                $display = (int)$_POST['display'];
                $img = empty($_FILES['img']['name']) ? $_POST['img']:'';
                if(!empty($_FILES['img']['name'])){
                    $img = \Libs\UploadFile::upload($_FILES['img']);
                    if(!$img){
                        $this->error('./index.php?p=admin&c=Articles&a=update&id=$id', '上传图片失败', 1);

                    }
                }

                //修改成功时,要返回当前页
                $url = "./index.php?p=admin&c=Articles&a=index&page={$page}";
                $articlesModel = new \Model\ArticlesModel;
                $rs = $articlesModel->update($id,$cid,$title,$img,$author,$desc,$content,$is_tuijian,$display);
                if($rs){
                    $this->success($url,'修改成功',1);
                }else{
                    $this->error('./index.php?p=admin&c=Articles&a=update&id=$id','修改失败',1);

                }
            }
            else{
                $id = (int)$_GET['id'];
                $articlesModel = new \Model\ArticlesModel();
                $articleList = $articlesModel->getOne($id);
//                echo "<pre>";
//                print_r($articleList);die;
                $categoryModel = new \Model\CategoryModel();
                $categoryList = $categoryModel->getAll();
                \Libs\Tools::getTree($categoryList);

                $this->Smarty->assign('categoryList',$GLOBALS['tree']);
                $this->Smarty->assign('articleList',$articleList);
                $this->Smarty->display('update.html');
            }

    }

    public function search(){

//                echo "<pre>";
//                $rs=strtotime($_POST['searchtext']);
//        print_r($rs) ;die;
        if($_POST){
            $where="";
            if(!empty($_POST['choose'])){
                if( $_POST['choose'] == 'id')
                {
                    $where=" id like '%".$_POST['searchtext']."%'";
                }
                if($_POST['choose'] == 'title')
                {
                    $where=" title like '%".$_POST['searchtext']."%'";
                }
                if($_POST['choose'] == 'author')
                {
                    $where=" author like '%".$_POST['searchtext']."%'";
                }
                if($_POST['choose'] == 'updated_time')
                {
                    $time = strtotime($_POST['searchtext']);
                    $where=" updated_time like '%".$time."%'";
                }
            }

            $articlesModel = new \Model\ArticlesModel;
            $rs = $articlesModel->search($where);
            if($rs){
                $this->rs=$rs;
                $this->open = 1;
                $this->index();
            }else{
                $this->index();
            }
        }


    }
}