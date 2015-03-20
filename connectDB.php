<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$host="localhost";
$host_username="root";
$host_password="";
$db_name="db_firstweb";
$db_link=  mysql_connect($host,$host_username,$host_password) or die(mysql_error());
mysql_select_db($db_name,$db_link) or die(mysql_error());
