<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/11
 * Time: 18:15
 */
namespace Core;
class Controller
{
    protected $Smarty;
    protected $Xss;
    public function __construct()
    {
        $this->initSession();
        $this->initSmarty();
        $this->initXss();
    }

    private function initXss(){
        $this->Xss = new \HTMLPurifier;
    }
    public function initSession(){
        session_start();
    }
    public function initSmarty(){
        $this->Smarty = new \Smarty();
        $this->Smarty->setTemplateDir(VIEW_PATH.PLATFORM_NAME.DS.CONTROLLER_NAME.DS);
        $this->Smarty->setCompileDir(APP_PATH.'View_c');
    }
    /**
     * 操作成功提示
     * @param string  $url   跳转地址
     * @param string  $msg   信息
     * @param int     $time  跳转时间
     */
    public function success($url, $msg = '操作成功', $time = 3)
    {
        $this->jump($url, $time, 'success', $msg);
    }
    /**
     * 操作失败提示
     * @param string  $url   跳转地址
     * @param string  $msg   信息
     * @param int     $time  跳转时间
     */
    public function error($url, $msg = '操作失败', $time = 3)
    {
        $this->jump($url, $time, 'error', $msg);
    }

    /**
     * 跳转方法
     * @param string  $url   跳转地址
     * @param int     $time  跳转时间
     * @param string  $state 状态：success-成功,error-失败
     * @param string  $msg   信息
     */
    public function jump($url, $time = 3, $state, $msg)
    {
        echo <<<STR
    <!doctype html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="{$time};URL={$url}">
    <title>提示页面</title>
    <style type="text/css">
    #img{text-align:center;margin-top:50px;margin-bottom:20px;}
    .info{text-align:center;font-size:24px;font-family:'微软雅黑';font-weight:bold;}
    #success{color:#060;}
    #error{color:#F00;}
    </style>
    <script type="text/javascript">
        var second={$time};
        var timer;
        function change()
        {
            second--;

            if(second>-1)
            {
                document.getElementById("second").innerHTML=second;
                timer = setTimeout('change()',1000);
            }
            else
            {
                clearTimeout(timer);
            }
        }
        timer = setTimeout('change()',1000);
    </script>
    </head> 
    <body>
        <div id="img"><img src="./Public/img/{$state}.png" width="160" height="200" /></div>
        <div id='{$state}' class="info">{$msg}</div>
        <div id="second" class="info" style="text-align: center; color: Red; font-weight: bolder  margin: 0 auto;">{$time}</div>
    </body>
    </html>    
STR;
        die; //终止脚本执行
    }

}