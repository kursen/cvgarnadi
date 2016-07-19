<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

  

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="../js/jquery-2.1.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
	<script type='text/javascript'>
	
		var loadcountmessage = function(){
		$.post("getcountmessage.php",function(data,status){
			$('#total').text(data.read);
			$('#unread').after().text(" "+data.unread+" New Mail");
		},'json');
	}
	
var strhtml='';
var loadmsg = function(){
	$.post('getnewmessage.php',function(data,status){
		for(var i=0;i<data.data.length;i++){
			strhtml+='<li class="message-preview">';
			strhtml+='<a href="read.php?id='+data.data[i].Id+'">';
            strhtml+='<div class="media">';
            strhtml+='<div class="media-body">';
            strhtml+='<h5 class="media-heading"><strong>'+data.data[i].name+'</strong>';
            strhtml+='</h5>';
            strhtml+='<p class="small text-muted"><i class="fa fa-clock-o"></i> '+ data.data[i].datereceive+'</p>';
            strhtml+='<p>'+data.data[i].message+'... <i class="fa fa-arrow-circle-right"></i></p>';
            strhtml+='</div>'
            strhtml+='</div>';
            strhtml+='</a>';
            strhtml+='</li>';
		}
		$('.message-dropdown').append(strhtml);
	},'json');
}
	$(document).ready(function(){
		loadcountmessage();
		loadmsg();
	});
	</script>
</head>