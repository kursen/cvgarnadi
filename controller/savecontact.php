<?php
 session_start();
if(isset($_POST['name'],$_POST['email'],$_POST['contactnumber'],$_POST['companyname'],$_POST['message'])){
	if($_SESSION['Captcha'] !=$_POST['captchatext']){
		print json_encode(3);
	}else{
	require('model/config.php');
	$name=$_POST['name'];
	$email = $_POST['email'];
	$contactnumber = $_POST['contactnumber'];
	$companyname = $_POST['companyname'];
	$message = $_POST['message'];
	$datereceive =date("Y-m-d H:i:s");
	$query ="insert into leavemessage(name,email,contactnumber,companyname,message,status,datereceive) values('$name','$email',
	'$contactnumber','$companyname','$message','D','$datereceive')";
	
	$executequery=mysql_query($query);
	if(!$executequery){
		print json_encode("0".mysql_error());
	}else{
		//mail initialize
		mysql_close($connection);
		require_once "Mail.php";
		$destinationmail = "muhammadbasri444@gmail.com";
		$subject="Pemberitahuan";
		$body = $message;
		$source =$email;
		//INITIALIZE 
		$host = "ssl://smtp.gmail.com";
		$port = "465";
		$username = "basribasbes@gmail.com";
   
		//passwordmu waktu login gmail
		$password = "";
		$headers = array('From' => $username, 'To' => $destinationmail,'Subject' => $subject,'Reply-To'=>$source);
		
		$smtp = Mail::factory('smtp', array('host' => $host,'port' => $port, 'auth' => true,'username' => $username, 'password' => $password));
		
		 $mail = $smtp -> send($destinationmail, $headers, $body);
		 if (PEAR::isError($mail)) {
				print json_encode($mail -> getMessage());
		}else{
				print json_encode(2);
		}	
	}
}
	
}else{
	print "Data Tidak Lengkap";
}
?>