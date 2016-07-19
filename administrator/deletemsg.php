<?php
require_once("../controller/model/sessionadmin.php");
require_once('../controller/model/config.php');
$id=$_POST['id'];
$query="delete from leavemessage where Id='$id'";
$execute = mysql_query($query);
if(!$execute){
	print json_encode(0);
}else{
	print json_encode(1);
}
?>