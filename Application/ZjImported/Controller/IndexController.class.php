<?php
/**
 * Created by PhpStorm.
 * User: hebidu
 * Date: 15/8/12
 * Time: 14:14
 */

namespace ZjImported\Controller;

use Think\Controller;

/**
 *
 */
class IndexController extends Controller{

    /**
     * 首页
     */
    public function index(){
        if(!class_exists("SoapClient")){
            exit("请开启Soap扩展!");
        }
        $ws = "http://www.webservicex.net/globalweather.asmx?wsdl";//webservice服务的地址
        $ws = "http://122.224.230.4:18003/newyorkWS/ws/CheckGoodsDecl?wsdl";
//        $ws = "http://122.224.230.4:18003/newyorkWS/ws/ReceivedDeclare?wsdl";
        $client = new \SoapClient ($ws);
        /*
        * 获取SoapClient对象引用的服务所提供的所有方法
        */
        echo ("SOAP服务器提供的开放函数:");
        echo ('<pre>');
        var_dump ( $client->__getFunctions () );//获取服务器上提供的方法
        echo ('</pre>');
        echo ("SOAP服务器提供的Type:");
        echo ('<pre>');
        var_dump ( $client->__getTypes () );//获取服务器上数据类型
        echo ('</pre>');
        echo ("执行GetGUIDNode的结果:");
//        $result=$client->checkReceived(array('xmlStr'=>'zhengzhou','xmlType'=>'IMPORT_COMPANY','sourceType'=>'1'));//查询中国郑州的天气，返回的是一个结构体
//        var_dump($result);
        $result=$client->check(array('companyCode'=>'zhengzhou','subCarriageNo'=>'1'));//查询中国郑州的天气，返回的是一个结构体
        dump(simplexml_load_string($result->return));
//        $this->display();
//        echo $result->return;
        exit();
    }

}