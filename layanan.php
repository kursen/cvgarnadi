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
				<li><a href="index.html">Beranda</a></li>
				<li>Layanan</li>			
			</div>		
		</div>	
	</div>
	
	<section id="portfolio">	
        <div class="container">
            <div class="center">
               <p>Segera hubungi kami, kami akan memberikan pelayanan terbaik untuk anda.</p>
            </div>

            <ul class="portfolio-filter text-center">
                <li>
				<div class="panel panel-default">
					  <div class="panel-body">
						<img src="images/support.png" style="width: 350px;height: 180px;" class="img-responsive" alt="img1"/>
						<label>Support</label>
					  </div>
					  <div class="panel-footer"><a href="support.html" class="text-dropdown">Lanjut <span class="glyphicon glyphicon-arrow-right"></span></a></div>
					</div>
				
                <li>
					<div class="panel panel-default">
					  <div class="panel-body">
						<img src="images/training.png" style="width: 350px;height: 180px;" class="img-responsive" alt="img1"/>
						<label>Training </label>
					  </div>
					  
					  <div class="panel-footer"><a href="training.html" class="text-dropdown">Lanjut <span class="glyphicon glyphicon-arrow-right"></span></a></div>
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