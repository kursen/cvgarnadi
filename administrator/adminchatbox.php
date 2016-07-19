<div class="container">
    <div class="row">
        <div class="col-md-5" id="container">
            <div class="panel panel-danger">
                <div class="panel-heading" id="accordion">
                    <span class="glyphicon glyphicon-comment"></span> Chat
                    <div class="btn-group pull-right">
                        <a type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                    </div>
                </div>
            <div class="panel-collapse collapse" id="collapseOne">
                <div class="panel-body">
                    <ul class="chat">
                        
                    </ul>
                </div>
                <div class="panel-footer">
				<form method="post" id="chatform" action='../savechat.php'>
                    <div class="input-group">
                        <input name="message" type="text" class="form-control input-sm" placeholder="Tulis Pesan..." />
						<input type="hidden" name="user_id" value="2" />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat">
                                Kirim</button>
                        </span>
                    </div>
				</form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<script type='text/javascript'>
var htmlstr='';
var fngetmessage = function(){
	$.post('../getchatmsg.php',function(data,status){
		data=JSON.parse(data);
		htmlstr+='<li class="left clearfix"><span class="chat-img pull-left">';
		htmlstr+='<img src="http://placehold.it/50/E21111/fff&text=A" alt="User Avatar" class="img-circle" /></span>';
		htmlstr+='<div class="chat-body clearfix">';
		htmlstr+='<div class="header">';
		htmlstr+='<strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">';
		htmlstr+='<span class="glyphicon glyphicon-time"></span>'+data.allmsg.time_on+'</small>';
		htmlstr+='</div>';
		htmlstr+='<p>'+data.allmsg.message+'</p>';
		htmlstr+='</div></li>';
		$('ul.chat').html(htmlstr);
		htmlstr='';
		$('#chatform').trigger('reset');
	});
	
	//console.log(htmlstr);
}
var fnInsert = function(url,data){
	//var returnval=null;
			$.ajax({
					type: 'POST',
					url: url,
					data: data,
					dataType: 'json',
					success: function (data) {
							if(data.stat==true){
									
									htmlstr+='<li class="left clearfix"><span class="chat-img pull-left">';
									htmlstr+='<img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" /></span>';
									htmlstr+='<div class="chat-body clearfix">';
									htmlstr+='<div class="header">';
                                    htmlstr+='<strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">';
                                     htmlstr+='<span class="glyphicon glyphicon-time"></span>'+data.allmsg.sent_on+'</small>';
									htmlstr+='</div>';
									htmlstr+='<p>'+data.allmsg.message+'</p>';
									htmlstr+='</div></li>';
								
								$('ul.chat').append(htmlstr);
								htmlstr='';
								$('#chatform').trigger('reset');
							}
						return false;
					}/*,
					error: function (xhr,textStatus,errormessage) {
						//alertify.alert("Kesalahan! ","Error !!"+xhr.status+" "+textStatus+" "+errormessage);
						returnval ="Error !!"+xhr.status+" "+textStatus+" "+errormessage;
					},
					complete: function () {
						
						return false;
					}*/
				});
		//return returnval;
}
	$(document).ready(function(){
		//fngetmessage();
		$('#chatform').submit(function(e){
			e.preventDefault();
			fnInsert($(this).attr('action'),$(this).serialize());
		});
	});
</script>