<!DOCTYPE html>
<html lang="en">

<?php
require_once("../controller/model/sessionadmin.php");
include ("AdminLayOut/header.php");
?>
<link rel="stylesheet" type='text/css' href='library/css/jquery.dataTables.min.css' />
<link rel="stylesheet" type='text/css' href='../css/alertify.min.css' />
<link rel="stylesheet" type='text/css' href='../css/themes/default.min.css' />
<link href="../css/chat.css" rel="stylesheet" />	

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ("AdminLayOut/navigasi.php"); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small><?php print $_SESSION['username']; ?></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <i class="fa fa-info-circle"></i>  <strong>Welcome</strong> <?php print $_SESSION['username']; ?> 
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-envelope fa-2x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <strong id="total"></strong>
                                        <div>Total Pesan</div>
                                    </div>
                                </div>
                            </div>
							<div class="panel-body">
								<table class="table table-striped" id="tblmsg">
									<thead>
										<tr>
											<th>Nama</th>
											<th>E-mail</th>
											<th>Nomor Kontak</th>
											<th>Nama Perusahaan</th>
											<th>Pesan</th>
										</tr>
									</thead>
								</table>
								<?php include('adminchatbox.php'); ?>
							</div>
                           
						   
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
	
	<!--end modal-->
	
<script type='text/javascript' src='library/js/jquery.dataTables.min.js'></script>
<script type='text/javascript' src='../js/alertify.min.js'></script>

<script type="text/javascript">
$(document).ready(function(){
	fngetmessage();
	setInterval(function () {
               loadcountmessage();}, 2000);
	
	var gentable=$('#tblmsg').DataTable({
		'info':false,
		'ajax':'getmessage.php',
		'columns':[
				{"data": "name","bSortable": false},
				{"data":"email"},
				{"data":"contactnumber"},
				{"data":"companyname"},
				{"className": "action text-center",
								"data": null,
								"bSortable": false,
								"defaultContent": "" +
								"<div class='btn-group' role='group'>" +
								"<button class='show btn btn-primary btn-xs' data-toggle='modal' data-target='.bs-example-modal-sm'><i class='fa fa-envelope'></i></button>" +
								"<button class='delete btn btn-danger btn-xs' rel='tooltip' data-toggle='tooltip' data-placement='left' title='Hapus'><i class='fa fa-trash-o'></i></button>"+
								"</div>"}
			]
	});
	var sbody = $('#tblmsg tbody');
	sbody.on('click','.show',function(){
		var data = gentable.row($(this).parents('tr')).data();
		window.location.href='read.php?id='+data.Id;
	}).
	on('click','.delete',function(){
		var data = gentable.row($(this).parents('tr')).data();
		alertify.confirm("Konfirmasi","Anda yakin ingin menghapus data?",
		  function(){
			  $.post("deletemsg.php",{'id':data.Id},function(data,status){
						if(data==1){
							alertify.success('Data berhasil dihapus!');
							gentable.ajax.reload();
							loadcountmessage();
						}else{
							alertify.error('Gagal menghapus');
						}
						
					},'json');
								
		  },
		  function(){
			alertify.error('Batal');
		  });
		
	});
//console.log(gentable.fnGetData().length);

});

</script>

</body>

</html>
