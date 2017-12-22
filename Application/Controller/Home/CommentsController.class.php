<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/17
 * Time: 14:44
 */
namespace Controller\Home;

class CommentsController extends \Core\Controller
{
    public function add(){
        if(!empty($_POST)){
            $uid = isset($_SESSION['home_userinfo']['id'])?$_SESSION['home_userinfo']['id']:'';
            if (!$uid) $this->error("index.php?p=home&c=index&a=index",'登录后再评论',1);
            $pid = $_POST['pid'];
            $aid = $_POST['aid'];

            $content = $_POST['content'];

            $commentsModel = new \Model\CommentsModel();
            $rs = $commentsModel->add($pid,$uid,$aid,$content);
            if($rs){
                $this->success("./index.php?p=home&c=articles&a=detail&id={$aid}",'评论成功',1);
            }else{
                $this->error("./index.php?p=home&c=articles&a=detail&id={$aid}",'评论失败',1);
            }
        }
    }
}