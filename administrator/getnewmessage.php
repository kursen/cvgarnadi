<?php
require_once("../controller/model/sessionadmin.php");
require_once('../controller/model/config.php');
$query="select * from leavemessage where status='D' order by datereceive asc";
$execute = mysqli_query($connection,$query);
$data = array();

//$result    = date('Y-m-d', strtotime(($day - $dayofweek).' day', strtotime($date)));

$now =date('Ymd');
while($arrdata = mysqli_fetch_array($execute)){
	$day="";
	$countday=$now-date('Ymd',strtotime($arrdata[7]));
	if($countday>=2){
		$day=date('l',strtotime($arrdata[7]))." at ".date('H:m',strtotime($arrdata[7]));
	}else if($countday==1){
		$day="Yesterday";
	}else{
		$day="Today";
	}
	$getdata = array('Id' => $arrdata[0],
	'name' => $arrdata[1],
	'message' => substr($arrdata[5],0,15),
	'datereceive' => $day
	);
	array_push($data,$getdata);
}
mysqli_close($connection);
$result = array('data'=>$data);
print json_encode($result);
?>