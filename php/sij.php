<?php
require "conn.php";
if(isset($_POST['sid'])&&isset($_POST['password'])){
$sid = $_POST['sid'];
$password =$_POST['pass'];
$result=$conn->query("select * from projrctuser  where sid='$sid'and password='$password");

if ($result->fetch_assoc()) { //成功
        echo true;
    } else { //失败
        echo false;
    }
}



