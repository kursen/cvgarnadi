<?php
if(isset($_POST['message'])){
	$messages= $_POST['message'];
	$user_id=$_POST['user_id'];
	$arrreturn = array();
	include('chat_func.php');
	require_once('controller/model/config.php');
	$stat=send_msg($connection,$user_id,$messages);
	if($stat==1){
		$msgreturn = get_msg($connection);
		$arrreturn = array('stat'=>$stat,'allmsg'=>$msgreturn);
		print json_encode($arrreturn);
	}
	//mysqli_close($connection);
}
else{
	return false;
}