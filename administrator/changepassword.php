<?php
require_once("../controller/model/sessionadmin.php");
if(isset($_REQUEST['password'],$_REQUEST['confirmpassword'])){
	require_once('../controller/model/config.php');
	$pass = $_POST['password'];
	$confirm = $_POST['confirmpassword'];
	if($pass==$confirm){
		$query = "update user set
		password='$pass'
		where username ='administrator'";
		$execute =mysql_query($query);
		if($execute){
			print "<script type='text/javascript'>alert('berhasil ganti password');window.location.href='index.php'</script>";
		}
	}
}else{
	header('location:index.php');
}
?>