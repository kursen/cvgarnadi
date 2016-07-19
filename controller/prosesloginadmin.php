<?php
if(isset($_POST['username'],$_POST['password'])){
	include("model/config.php");
	$username=mysqli_real_escape_string($connection,$_POST['username']);
	$password=mysqli_real_escape_string($connection,$_POST['password']);
	session_start();
	
	$cek=mysqli_query($connection,"select distinct(username),(password) from user where (username='".$_POST['username']."') and (password='".$_POST['password']."') ");
	$rows=mysqli_num_rows($cek);
	if ($rows == 1)
		{
			$_SESSION['username'] =$_POST['username'];
			$_SESSION['password']=$_POST['password'];
			$data = array('stat' =>1);
			print json_encode($data);
	}
	else
		{
			$data=array('stat'=>0);
			print json_encode($data);
	}
}











?>