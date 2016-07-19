<?php
require_once("../controller/model/sessionadmin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV.GARNADI KOMPUTINDO</title>

    <!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
 <link href="../css/bootstrap-theme.min.css" rel="stylesheet"/>
 <link href="../css/bootstrapValidator.min.css" rel="stylesheet"/>
 
 <script src="../js/jquery-2.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrapValidator.min.js"></script>
</head>

<body>
<p><br/><br/><br/><br/></p>
<div class="col-md-4"></div>
 <div class="container">
      <div class="row">  
  <div class="col-md-4">
       <div class="panel panel-default">
       <div class="panel-body">
          <div class="page-header">
         <h3>Ganti Password</h3>
      </div>
      <form action="changepassword.php" id="change-pass" method="post" accept-charset="utf-8" role="form">
         
         <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
           <input type="password" class="form-control" name="password" placeholder="Password" required />
        </div>
         </div>
		  <div class="form-group">
            <label for="password">Konfirmasi Password</label>
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-repeat"></span></span>
           <input type="password" class="form-control" name="confirmpassword" placeholder="Password" required />
        </div>
         </div>
         <hr/>
         
         <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Simpan</button>
		 <a href="Index.php" class="btn btn-success"><span class="glyphicon glyphicon-chevron-left"></span> Kembali</a>
         <p>
</p>
      </form>
       </div>
    </div>
    
     </div>
  </div>
    </div>
 
 <script type='text/javascript'>
	$(document).ready(function(){
		$('#change-pass').bootstrapValidator({
				live: 'enabled',
				message: 'This value is not Valid',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				excluded:'disabled',
				fields: {
					password: {
						validators: {
							identical :{
								field:'confirmpassword',
								message:'Password tidak sama!'
							}
							,
							notEmpty: {
								message: 'Password tidak boleh kosong'
							}
						}
					},
					confirmpassword: {
						validators: {
							notEmpty: {
								message: 'Silahkan konfirmasi password'
							},
							identical :{
								field:'password',
								message:'Password tidak sama!'
							}
							
						}
					}
				}
			});
	});
 </script>
</body>
</html>