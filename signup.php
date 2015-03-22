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
$pwd1=$_POST["pass1"];
$pwd2=$_POST["pass2"];
if(strlen($username)>0 && strlen($pwd1)>0 && strlen($pwd2)>0){
    $success=FALSE;
    if($pwd1==$pwd2){
      //  $success=FALSE;
        $sql="select * from $tbl_name where username=$username";
        $result=  mysql_query($sql, $db_link);
        $count=mysql_num_rows($result);
        $success=FALSE;
        if($count == 0 ){
            $sql="insert into $tbl_name(username,password) values('$username','$pwd1')";
            mysql_query($sql, $db_link);
            $success=TRUE;
        }
    }
}
if($success==TRUE){
    header("location: login_success.php");
    $success=FALSE;
}
else{
    header("location: test01.htm");
}
    
mysql_close($db_link);
?>
