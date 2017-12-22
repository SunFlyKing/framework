<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/21
 * Time: 10:55
 */
namespace Controller\Home;

class MessageController extends BaseController
{
    public function index()
    {

        $messageModel = new \Model\MessageModel();

        $messagedata = $messageModel->getAll();
        $this->Smarty->assign('messagedata',$messagedata);


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