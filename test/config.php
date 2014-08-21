<?php
$q = mysql_connect("localhost","root","a123456");
if(!$q)
{
die('Could not connect: ' . mysql_error());
}
mysql_query("set names utf8"); //以utf8读取数据
mysql_select_db("guestbook",$q); //数据库
?>

