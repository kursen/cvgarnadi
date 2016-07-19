<?php
require_once("../controller/model/sessionadmin.php");
require_once("../controller/model/sessionadmin.php");
require_once('../controller/model/config.php');
$query="select * from leavemessage where status='R' order by datereceive asc";
$execute = mysqli_query($connection,$query);
$data = array();
while($arrdata = mysqli_fetch_array($execute)){
	$getdata = array('Id' => $arrdata[0],
	'name' => $arrdata[1],
	'email' => $arrdata[2],
	'contactnumber' => $arrdata[3],
	'companyname' => $arrdata[4],
	'message' => $arrdata[5]
	);
	array_push($data,$getdata);
}
mysqli_close($connection);
$result = array('data'=>$data);
print json_encode($result);
?>