<?php

function get_msg($con){
	$messages = array();
	$getquery = "select user_id,message,sent_on from chat";
	$run = mysqli_query($con,$getquery);
	while($fetch = mysqli_fetch_assoc($run)){
		
		$messages =array('sender'=>$fetch['user_id'],'message'=>$fetch['message'],
		'time_on'=>$fetch['sent_on']);
	}
	//mysqli_close($connection);
	return $messages;
}

function send_msg($con,$sender,$message){
	$returnval=false;
	$dt=date('Y-m-d H:i:s');
	if(!empty($sender) && !empty($message)){
		$sender = mysqli_escape_string($con,$sender);
		$message = mysqli_escape_string($con,$message);
		$query="insert into chat(user_id,message,sent_on) values 
		('$sender','$message','$dt')";
		if($execute = mysqli_query($con,$query)){
			$returnval=true;
			//mysqli_close($connection);
		}
	}
	return $returnval;
}
function getchatTime ($time)
{

    $time = time() - $time; // to get the time since that moment
    $time = ($time<0.5)? 0.5 : $time;
    $tokens = array (
        31536000 => 'tahun',
        2592000 => 'bulan',
        604800 => 'minggu',
        86400 => 'hari',
        3600 => 'jam',
        60 => 'menit',
        1 => 'detik',
		0.5=>'baru saja'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }

}