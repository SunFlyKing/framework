<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/15
 * Time: 19:22
 */
namespace Controller\Home;
class IndexController extends BaseController
{
    public function index(){

        $showrow = 7; //一页显示的行数
        $url = "./index.php?p=home&c=index&a=index&page= {page}"; //分页地址
        $curpage = empty($_GET['page']) ? 1 : $_GET['page']; //当前的页,还应该处理非数字的情况

        $articlesModel = new \Model\ArticlesModel;

        $total = $articlesModel->gettotal(array('display'=>1));

        if (!empty($_GET['page']) && $total != 0 && $curpage > ceil($total / $showrow))
        {
            $curpage = ceil($total_rows / $showrow); //当前页数大于最后页数，取最后一页
        }

        $articledata = $articlesModel->getdata($showrow,$curpage,array('display'=>1));
        $str = "";
        if ($total > $showrow) {//总记录数大于每页显示数，显示分页
            $page = new \Libs\page($total, $showrow, $curpage, $url, 2);
            $str= $page->myde_write();
        }

        $this->Smarty->assign('str',$str);
        $this->Smarty->assign('articledata',$articledata);
        $this->Smarty->assign('page',$curpage);

        $categoryModel = new \Model\CategoryModel();
        $categoryList = $categoryModel->getAll(array('pid'=>0));
//        \Libs\Tools::getTree($categoryList);
        $this->Smarty->assign('categoryList',$categoryList);

        $newcomment = new \Model\CommentsModel();
        $commentData = $newcomment->newComment();
        $this->Smarty->assign('commentData',$commentData);

        $tuijian = new \Model\ArticlesModel();
        $tuijianData = $tuijian->tuijian();
        $this->Smarty->assign('tuijianData',$tuijianData);

        $imgData = $tuijian->headerimg();
        $this->Smarty->assign('imgData',$imgData);


        $this->Smarty->display('index.html');
    }

}