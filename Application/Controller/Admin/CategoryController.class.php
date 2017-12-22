<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/13
 * Time: 11:01
 */
namespace Controller\Admin;
class CategoryController extends BaseController
{
    public function index(){
        $showrow = 10; //一页显示的行数
        $url = "./index.php?p=admin&c=Category&a=index&page= {page}"; //分页地址
        $curpage = empty($_GET['page']) ? 1 : $_GET['page']; //当前的页,还应该处理非数字的情况

        $cateModel = new \Model\CategoryModel();
        $total = $cateModel->gettotal();
        if (!empty($_GET['page']) && $total != 0 && $curpage > ceil($total / $showrow))
        {
            $curpage = ceil($total_rows / $showrow); //当前页数大于最后页数，取最后一页
        }

        $cateList = $cateModel->getdata($showrow,$curpage);
        $str = "";
        if ($total > $showrow) {//总记录数大于每页显示数，显示分页
            $page = new \Libs\page($total, $showrow, $curpage, $url, 2);
            $str= $page->myde_write();
        }
        //$this->Smarty->assign('cateList',$cateList);
//        echo "<pre>";
//        print_r($cateList);
        \Libs\Tools::getTree($cateList);
//        echo "<hr>";
//        print_r($GLOBALS['tree']);die;
        $this->Smarty->assign('cateList',$GLOBALS['tree']);
        $this->Smarty->assign('str',$str);
        $this->Smarty->display('index.html');
    }

    public function delete(){
        $id = (int)$_GET['id'];
        $cateModel = new \Model\CategoryModel();
        if($cateModel->isSon($id)){
            $this->error('./index.php?p=admin&c=Category&a=index','删除失败,请先删除子集分类',1);

        }
        $rs = $cateModel->delete($id);
        if($rs){
            $this->success('./index.php?p=admin&c=Category&a=index','删除成功',1);
        }else{
            $this->error('./index.php?p=admin&c=Category&a=index','删除失败',1);

        }
    }

    public function add(){
        if(!empty($_POST)){
            $pid = $_POST['pid'];
            $name = $_POST['name'];
            $sort = $_POST['sort'];

            $cateModel = new \Model\CategoryModel();
            $rs = $cateModel->add($pid,$name,$sort);
            if($rs){
                $this->success('./index.php?p=admin&c=Category&a=index','添加成功',5);
            }else{
                $this->error('./index.php?p=admin&c=Category&a=add','添加失败',1);

            }

        }else{
            $cateModel = new \Model\CategoryModel();
            $cateList = $cateModel->getAll();

            \Libs\Tools::getTree($cateList);
//            echo "<pre>";
//            var_dump($GLOBALS['tree']);die;
            $this->Smarty->assign('cateList',$GLOBALS['tree']);
            $this->Smarty->display('add.html');

        }
    }

    public function update(){

        if(!empty($_POST)) {
            $id = (int)$_POST['id'];
            $pid = $_POST['pid'];
            $name = $_POST['name'];
            $sort = $_POST['sort'];

            if($pid == $id){
                $this->error("./index.php?p=admin&c=Category&a=update&id=$id",'父类不能是自己');
            }
            $cateModel = new \Model\CategoryModel();
            $cateList = $cateModel->getAll();
            \Libs\Tools::getTree($cateList);
            if(!empty($GLOBALS['tree']))
            {
                $son = array();
                foreach ($GLOBALS['tree'] as $cate){
                    $son[]=$cate['id'];
                    if($cate['id' == $pid]){
                        $this->error("./index.php?p=admin&c=Category&a=update&id=$id",'父级分类不能是自己的儿子');
                    }
                }
//                //第二种判断
//                if(in_array($pid,$son)){
//                    $this->error("./index.php?p=admin&c=Category&a=update&id=$id",'父级分类不能是自己的儿子');
//
//                }
            }

            $rs = $cateModel->update($id, $pid, $name, $sort);
            if ($rs) {
                $this->success('./index.php?p=admin&c=Category&a=index', '修改成功', 1);
            } else {
                $this->error("./index.php?p=admin&c=Category&a=update&id=$id", '修改失败', 1);

            }

        }else{
            $cateModel = new \Model\CategoryModel();
            $cateList = $cateModel->getAll();
            \Libs\Tools::getTree($cateList);
            $this->Smarty->assign('cateList', $GLOBALS['tree']);

            $id = (int)$_GET['id'];
            $cateInfo = $cateModel->getRow($id);
            $this->Smarty->assign('cateInfo', $cateInfo);
            $this->Smarty->display('update.html');
        }

    }


}