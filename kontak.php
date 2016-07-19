<!DOCTYPE html>
<html lang="en">
  <?php
	include('layout/head.php');
  ?>
  <body>
	<?php
		include('layout/header.php');
	?>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.php">Beranda</a></li>
				<li>Kontak</li>			
			</div>		
		</div>	
	</div>
	<div class="map">
		<iframe style="height: 450px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.4759514438538!2d98.69524822914924!3d3.6094832382805495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031319ad89b9ced%3A0x948222593be4acca!2sCV.+GARNADI+KOMPUTINDO!5e0!3m2!1sen!2sid!4v1461829769034" width="800" height="600" frameborder="0" style="border:0"></iframe>
	</div>
	<div class="row wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
		<div class="col-sm-12">
			<div class="col-sm-5 col-sm-offset-1">
				<label>Kantor</label>
                <p>Alamat Kantor Pusat Dan Detail Kontak Sebagai Berikut :</p>
<p>CV. GARNADI KOMPUTINDO</p>
<p>Jl. Durung No.20, Kode Pos 20222</p>
<p>Medan - Indonesia</p>
<p>Telepon : (061) 6624338.</p>
<p>Email : garnadi7170@gmail.com</p>
<p>Web : </p>
<p>Kontak : Tito (081372243777)</p>

</p>
			</div>
			
			<div class="col-sm-6">
			   
                <label>Tinggalkan Pesan</label>
                <p>Silahkan Isi Pesan Anda.</p>

				<form id="kontak-frm" class="contact-form form-horizontal" method="post" action="controller/savecontact.php">
					<div class="form-group">
						<label class="control-label col-sm-4">Nama</label>
						<div class="col-sm-6">
							<input type="text" name="name" class="form-control" required="required">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4">E-mail</label>
						<div class="col-sm-6">
							<input type="email" name="email" class="form-control" required="required">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4">Nomor Kontak</label>
						<div class="col-sm-4">
							<input type="text" maxlength="13" name="contactnumber" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4">Nama Perusahaan</label>
						<div class="col-sm-6">
							<input type="text" name="companyname" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4">Pesan</label>
						<div class="col-sm-6">
							<textarea name="message" required="required" class="form-control" rows="4"></textarea>
						</div>
					</div>
					<div class="form-group" >
					<img id="captcha" src="controller/captcha.php" class="col-sm-offset-4" alt="gambar" /> 
					</div>
					<div class="form-group" id="captchagroup">
						<label class="control-label col-sm-4">Ketik Teks</label>
						<div class="col-sm-4">
							<input maxlength="6" type="text" name="captchatext" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-4 col-xs-offset-1 col-md-offset-4 col-lg-offset-4">
							<button type="submit" id="btnsubmit" class="btn btn-primary">
									<i class="glyphicon glyphicon-send"></i> Kirim
							</button>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
	<?php
	include('layout/footer.php');
	?>
	<script type='text/javascript' src='js/alertify.min.js'></script>
	<script type="text/javascript" src="js/bootstrapValidator.min.js"></script>

	<script type="text/javascript">
	
		$(document).ready(function(){
		$('#kontak-frm').bootstrapValidator({
				live: 'enabled',
				message: 'This value is not Valid',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				excluded:'disabled',
				fields: {
					name: {
						validators: {
							notEmpty: {
								message: 'Silahkan isi nama'
							}
						}
					},
					email: {
						validators: {
							notEmpty: {
								message: 'Silahkan isi e-mail'
							},
							emailAddress: {
								message: 'Silahkan isi e-mail dengan benar'
							}
							
						}
					},
					contactnumber: {
						validators: {
							notEmpty: {
								message: 'Silahkan isi nomor kontak'
							},
							 numeric: {
								message: 'Nomor telepon salah',
								// The default separators
								thousandsSeparator: '',
								decimalSeparator: '.'
							}	
						}
					},
					companyname: {
						validators: {
							notEmpty: {
								message: 'Silahkan isi nama perusahaan'
							}
						}

					},
					message: {
						validators: {
							notEmpty: {
								message: 'Silahkan isi pesan'
							}
						}

					},
					captchatext:
						validators:{
							notEmpty{
								message: 'Silahkan isi dengan teks diatas'
							}
						}
				}
			}).on('success.form.bv', function (e) {
        // Prevent form submission
				e.preventDefault();
				// Get the form instance
				var $form = $(e.target);
				// Get the BootstrapValidator instance
				var bv = $form.data('bootstrapValidator');
				// Use Ajax to submit form data
				
				//formData.append('file','file);
				var data = $form.serialize();
				$('#kontak-frm input').attr("disabled", "disabled");
				$.ajax({
					type: 'POST',
					url: $form.attr('action'),
					data: data,
					dataType: 'json',
					success: function (data) {
							data=parseInt(data);
						if(data==3){
							$('#captchagroup').addClass('has-error').find('input').val('');
							alertify.error('Captcha Salah');
						}else{
							console.log('Gagal mengirim ke email');
							$('#captchagroup').removeClass('has-error').find('input').val('');;
							$('#kontak-frm').bootstrapValidator('resetForm',true);
							alertify.success('Data berhasil dikirim');
						}
						return false;
					},
					error: function (xhr,textStatus,errormessage) {
						alertify.alert("Kesalahan! ","Error !!"+xhr.status+" "+textStatus+" "+errormessage);
					},
					complete: function () {
						$('#btnsubmit').removeAttr('disabled');
						$('#kontak-frm input').removeAttr("disabled", "disabled");
						$('#captcha').attr('src','controller/captcha.php');
					}
				});
		});
	});
	</script>
  </body>
</html>