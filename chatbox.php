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
				<form method="post" id="chatform" action='savechat.php' autocomplete="off">
                    <div class="input-group">
                        <input name="message" type="text" class="form-control input-sm" placeholder="Tulis Pesan..." />
						<input type="hidden" name="user_id" value="1" />
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
var strhtml='';
var fnInsert_Message = function(url,data){
	//var returnval=null;
			$.ajax({
					type: 'POST',
					url: url,
					data: data,
					dataType: 'json',
					success: function (data) {
							if(data.stat==true){
									
									strhtml+='<li class="left clearfix"><span class="chat-img pull-left">';
									strhtml+='<img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" /></span>';
									strhtml+='<div class="chat-body clearfix">';
									strhtml+='<div class="header">';
                                    strhtml+='<strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">';
                                     strhtml+='<span class="glyphicon glyphicon-time"></span>'+data.allmsg.time_on+'</small>';
									strhtml+='</div>';
									strhtml+='<p>'+data.allmsg.message+'</p>';
									strhtml+='</div></li>';
								
								$('ul.chat').append(strhtml);
								strhtml='';
								$('#chatform').trigger('reset');
							}
						return false;
					},
					error: function (xhr,textStatus,errormessage) {
						alert("Kesalahan! ","Error !!"+xhr.status+" "+textStatus+" "+errormessage);
						//returnval ="Error !!"+xhr.status+" "+textStatus+" "+errormessage;
					},
					complete: function () {
						
						return false;
					}
				});
		//return returnval;
}
	$(document).ready(function(){
		$('#chatform').submit(function(e){
			e.preventDefault();
			fnInsert_Message($(this).attr('action'),$(this).serialize());
			//console.log(insert);
		});
	});
</script>