<?php
header("content-type:text/html;charset=utf-8");
define('HOST','localhost');//主机名
define('USERNAME','root');//用户名
define('PASSWORD','root');//密码
define('DBNAME',"project");//数据库名称
$conn= @new mysqli(HOST,USERNAME,PASSWORD,DBNAME);
if($conn->connect_error){
die("数据库链接错误".$conn->connect_error);


$conn->query("SET NAMES UTF-8");  //编译模块<utf-8></utf-8>

}



?>