<?php
require_once("../controller/model/sessionadmin.php");
require_once('../controller/model/config.php');
$query="select ifnull(count(Id),0) as total from leavemessage where status='R'";
$queryunread="select ifnull(count(Id),0) as totalunread from leavemessage where status='D'";
$execute = mysql_query($query) or die("Error Mengambil Data");
$executeunread = mysql_query($queryunread) or die("Error Mengambil Data");
$count = mysql_fetch_assoc($execute);
$countunread=mysql_fetch_assoc($executeunread);
mysql_close($connection);
$result = array('read'=>$count['total'],
'unread'=>$countunread['totalunread']);
print json_encode($result);
?>