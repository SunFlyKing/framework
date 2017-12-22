<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/17
 * Time: 20:10
 */
namespace Controller\Home;
class ArticlesController extends BaseController
{
    public function index(){
        $pid = (int)$_GET['articles_id'];
        $categoryModel = new \Model\CategoryModel();
        $categoryList = $categoryModel->getAll();
        \Libs\Tools::getTree($categoryList,$pid);

        $arr[] = $pid;
        if(!empty($GLOBALS['tree'])){
            foreach ($GLOBALS['tree'] as $cate){
                $arr[] = $cate['id'];
            }
        }
        $nid = implode(',',$arr);
//        echo $nid;die;
        $showrow = 10; //一页显示的行数
        $url = "./index.php?p=home&c=Articles&a=index&page= {page}&articles_id={$pid}"; //分页地址
        $curpage = empty($_GET['page']) ? 1 : $_GET['page']; //当前的页,还应该处理非数字的情况
        $articlesModel = new \Model\ArticlesModel;

        $total = $articlesModel->gettotal(array('display'=>1),array('id'=>$nid));

        if (!empty($_GET['page']) && $total != 0 && $curpage > ceil($total / $showrow))
        {
            $curpage = ceil($total_rows / $showrow); //当前页数大于最后页数，取最后一页
        }


            $articleList = $articlesModel->getdata($showrow,$curpage,array('display'=>1),array('id'=>$nid));


        $str = "";
        if ($total > $showrow) {//总记录数大于每页显示数，显示分页
            $page = new \Libs\page($total, $showrow, $curpage, $url, 2);
            $str= $page->myde_write();
        }


        $categoryModel = new \Model\CategoryModel();
        $categoryList = $categoryModel->getAll(array('pid'=>0));
//        \Libs\Tools::getTree($categoryList);

        $this->Smarty->assign('categoryList',$categoryList);
        $this->Smarty->assign('category_id',$pid);
        $this->Smarty->assign('str',$str);
        $this->Smarty->assign('articleList',$articleList);
        $this->Smarty->assign('page',$curpage);
        $this->Smarty->display('index.html');
    }

    public function detail()
    {


        $categoryModel = new \Model\CategoryModel();
        $categoryList = $categoryModel->getAll(array('pid'=>0));
        $this->Smarty->assign('categoryList',$categoryList);

        $id = (int)$_GET['id'];

        $articlesModel = new \Model\ArticlesModel;

        $articleData = $articlesModel->getOne($id);
        $this->Smarty->assign('articleData',$articleData);

        $shang= $articlesModel->shang($id);
        $xia = $articlesModel->xia($id);

        $this->Smarty->assign('shang',$shang);
        $this->Smarty->assign('xia',$xia);


        $commentsModel= new \Model\CommentsModel();
        $commentsList = $commentsModel->getAll($id);
//        echo "<pre>";
//        print_r($commentsList);die;


//        echo "<pre>";
//        print_r($GLOBALS['tree']);die;
        if(!empty($commentsList)){
            \Libs\Tools::getTree($commentsList);
            $this->Smarty->assign('commentsList',$GLOBALS['tree']);
        }




        $huname = isset($_SESSION['home_userinfo']['uname'])?$_SESSION['home_userinfo']['uname']:'1';
        $this->Smarty->assign('user_info',$huname);


        $this ->Smarty->display('detail.html');
    }

}