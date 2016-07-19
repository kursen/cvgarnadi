<!DOCTYPE html>
<html lang="en">
<?php
require_once("../controller/model/sessionadmin.php");
include ("AdminLayOut/header.php");
?>
<link rel="stylesheet" type='text/css' href='library/css/jquery.dataTables.min.css' />
<link rel="stylesheet" type='text/css' href='../css/alertify.min.css' />
<link rel="stylesheet" type='text/css' href='../css/themes/default.min.css' />

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
                            <li >
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
							<li class="active">Read</li>
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
				<?php
				$data="";
				if(isset($_GET['id'])){
					$Id = $_GET['id'];
					if(preg_match("/^\-?\+?[0-9e1-9]+$/", $Id)){
						if($Id>0){
							$Id = mysql_real_escape_string($Id);
							//update status
							require_once('../controller/model/config.php');
							$updatequery =mysql_query("update leavemessage set status='R' where Id=$Id");
							if($updatequery){
									//get all messages
								$getmsg = mysql_query("select * from leavemessage where Id ='$Id'");
								$check =mysql_num_rows($getmsg);
								if($check>0){
									if($getmsg){
										$data = mysql_fetch_assoc($getmsg); 
									}
								}else{
									print "<script type=text/javascript>alert('tidak ada data');window.location.href='index.php';</script>";
								}
							}
							
						}else{
							print "<script type=text/javascript>alert('tidak ada data');window.location.href='index.php';</script>";
						}
					}else{
						print "<script type=text/javascript>alert('tidak ada data');window.location.href='index.php';</script>";
					}
				}else{
					print "<script type=text/javascript>alert('tidak ada data');window.location.href='index.php';</script>";
				}				
				?>
				
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-envelope"></i>
											Pengirim : <?php print $data['email']; ?>
											
                                    </div>
                                    
                                </div>
                            </div>
							<div class="panel-body">
								<div class="col-lg-6 col-md-6 col-sm-6">
									<label>Nama : <?php print $data['name']; ?></label><p/>
									<label>Nomor Kontak : <?php print $data['contactnumber']; ?></label><p/>
									<label>Nama Perusahaan : <?php print $data['companyname']; ?></label><p/>
									<label>Waktu Kirim : <?php print $data['datereceive']; ?></label>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
								<label>Pesan : <?php print $data['message']; ?></label>
								</div>
							</div>
                            <a href="index.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Kembali</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>						   
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
	
</body>

</html>
