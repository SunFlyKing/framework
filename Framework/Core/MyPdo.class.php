<?php
/**
 * Created by PhpStorm.
 * User: DeLL
 * Date: 2017/9/8
 * Time: 19:42
 */
namespace Core;
use PDO;
use PDOException;
header("content-type:text/html;charset=utf-8");

class MyPdo
{
    private $pdo;
    private $host;
    private $port;
    private $user;
    private $pwd;
    private $dbname;
    private $charset;

    /**
     * MyPdo constructor.构造函数
     */
    private function __construct($prama)
    {
        $this->initPrama($prama);
        $this->initPdo();

    }
    private function initPrama($prama)
    {
        $this->host = isset($prama['host'])?$prama['host']:'localhost';
        $this->port = isset($prama['port'])?$prama['port']:'3306';
        $this->user = isset($prama['user'])?$prama['user']:'root';
        $this->pwd = isset($prama['pwd'])?$prama['pwd']:'505050';
        $this->charset = isset($prama['charset'])?$prama['charset']:'utf8';
        $this->dbname = isset($prama['dbname'])?$prama['dbname']:'pdo';

    }
    private function initPdo()
    {
        try
        {
            $dsn ='mysql:dbname='.$this->dbname.';host='.$this->host.';charset='.$this->charset.';port='.$this->port;
            $this->pdo = new PDO($dsn ,$this->user,$this->pwd);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $ex)
        {
            $this->geterror($ex);
        }
    }
    /**
     * 禁克隆
     */
    private function __clone(){}

    /**
     * @param 获取一行
     * @return mixed
     */
    public function getRow($sql)
    {
        $pdoStatement = $this->pdo->query($sql);
        return $pdoStatement->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param $sql
     * @return array 返回一个数组
     */
    public function getAll($sql)
    {
        $pdoStatement = $this->pdo->query($sql);
        return $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getCount($sql)
    {
        $pdoStatement = $this->pdo->query($sql);
        return $pdoStatement->rowCount();
    }
    /**
     * @param $sql
     * @return int 返回执行成功的行数
     */
    private function geterror($ex){
        echo '错误信息:'.$ex->getMessage().'<br>';
        echo '错误行号:'.$ex->getLine().'<br>';
        echo '错误文件:'.$ex->getFile().'<br>';
    }
    public function exec($sql)
    {
        try{
            return $this->pdo->exec($sql);
        }catch(PDOException $ex){
            $this->geterror($ex);
        }

    }

    public function fileslist($sql)
    {

    }
    public function filescount($sql)
    {
//        $fileslist = $this->fileslist($sql);
//        return $pdoStatement->mysql_num_fields($fileslist);
    }

    /**
     * @return string 返回ID
     */
    public function getInsertid()
    {
        return $this->pdo->lastInsertId();
    }

    private static $Instance;
    public static function getInstance($prama = array()){
        if(!self::$Instance instanceof self){
            self::$Instance = new self($prama);
        }
        return self::$Instance;
    }


}

