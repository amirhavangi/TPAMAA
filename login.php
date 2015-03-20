<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'connectDB.php';

$success=FALSE;
$tbl_name="tbl_login";

$username=$_POST["username"];
$pwd=$_POST["password"];
if(strlen($username)>0&& strlen($pwd)>0){
    $query="select * from $tbl_name where username='$username' and password='$pwd'";
    $result=  mysql_query($query,$db_link);
    $count=  mysql_num_rows($result);
    if($count==1){
        $success=TRUE;
    }
}
if($success==TRUE){
    header("location: login_success.php");
}
else{
    header("location: test01.htm");
}


mysql_close($db_link);


?>
