<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/20
 * Time: 17:55
 */
namespace Controller\Admin;

class AdminsController extends BaseController
{

    public function index()
    {
        $adminsModel = new \Model\AdminModel();
        $adminsData = $adminsModel->getallUser();

        $this->Smarty->assign('adminsData',$adminsData);
        $this->Smarty->display('index.html');
    }


    public function deleteall(){

        if($_POST['btnSave']){

            if(empty($_POST['del_id'])){
                echo"<script>alert('必须选择一个产品,才可以删除!');history.back(-1);</script>";
                exit;
            }else{
                /*如果要获取全部数值则使用下面代码*/

                $id= implode(",",$_POST['del_id']);
                $adminsModel = new \Model\AdminModel();
                $rs = $adminsModel->deleteall($id);
                if($rs){
                    $this->success('./index.php?p=admin&c=Admins&a=index','批量删除成功',1);
                    die;
                }else{
                    $this->error('./index.php?p=admin&c=Admins&a=index','批量删除失败',1);
                    die;
                }
            }
        }
    }
    public function delete(){



        //单个删除
        $id = (int)$_GET['id'];
        $adminsModel = new \Model\AdminModel();
        $rs = $adminsModel->delete($id);
        if($rs){
            $this->success('./index.php?p=admin&c=Admins&a=index','删除成功',1);
        }else{
            $this->error('./index.php?p=admin&c=Admins&a=index','删除失败',1);

        }
    }
}