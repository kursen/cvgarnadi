<?php
include('chat_func.php');
require_once('controller/model/config.php');
$msgreturn = get_msg($connection);
$arrreturn = array('allmsg'=>$msgreturn);
print json_encode($arrreturn);