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
				<li>Download</li>			
			</div>		
		</div>	
	</div>
	
	<section id="portfolio" class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">	
        <div class="container">
            <div class="center">
               <p>Download brosur mengenai produk kami</p>
            </div>

            <ul class="portfolio-filter text-center">
               
                <li>
				<div class="panel panel-default">
					  <div class="panel-body">
						<img src="images/produk/sistemakutansi.jpg" style="width:180px;" class="img-responsive" alt="img1"/>
						<label>Sistem Akutansi Terintegrasi</label>
					  </div>
					  <div class="panel-footer">
					  <a href="#" class="text-dropdown">Download</a>
					  </div>
					</div>
				</li>
                <li>
				<div class="panel panel-default">
					  <div class="panel-body">
						<img src="images/produk/antrianmultimedia.jpg" style="width:180px;" class="img-responsive" alt="img1"/>
						<label>Sistem Akutansi Terintegrasi</label>
					  </div>
					  <div class="panel-footer"><a href="#" class="text-dropdown">Download</a></div>
					</div>
				
                <li>
					<div class="panel panel-default">
					  <div class="panel-body">
						<img src="images/produk/palangparkir.jpg" style="width:180px;" class="img-responsive" alt="img1"/>
						<label>Palang Parkir</label>
					  </div>
					  
					  <div class="panel-footer"><a href="#" class="text-dropdown">Download</a></div>
					</div>
				
				</li>
				<li>
					<div class="panel panel-default">
					  <div class="panel-body">
						<img src="images/produk/palangparkir.jpg" style="width:180px;" class="img-responsive" alt="img1"/>
						<label>Pesanan</label>
					  </div>
					  
					  <div class="panel-footer"><a href="#" class="text-dropdown">Download</a></div>
					</div>
				
				</li>
            </ul><!--/#portfolio-filter-->
		</div>
		
		
    </section><!--/#portfolio-item-->
	

	<?php
	include('layout/footer.php');
	?>
	
  </body>
</html>