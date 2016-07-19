<!DOCTYPE html>
<html lang="en">
  <?php
	include('layout/head.php');
  ?>
  <body>
	<?php
	include('layout/header.php');
	?>
	<!--Carousell-->
	<div id="myCarousel" class="carousel slide wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active" id="firstslide">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Produk 1</h1>
            </div>
          </div>
        </div>
        <div class="item" id="secondslide">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Produk 2</h1>
            </div>
          </div>
        </div>
        <div class="item" id="thirdslide">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Produk 3</h1>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
	<!--End Of Carousell-->
	<div class="about">
		<div class="container">
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
				<h2>Tentang Perusahaan</h2>
				<img src="images/empty-spaces-logo.jpg" style="width:450px;height:150px;" class="img-responsive"/>
				<p>	Perusahaan adalah sebuah perusahaaan yang didirikan tahun 2015 dan bergerak di bidang teknologi informasi yang berfokus pada pengembangan sistem informasi, teknologi internet dan telekomunikasi. Perusahaan kami berpedoman “IT Terintegrasi“ merupakan potret penyedian jasa solusi atas kebutuhan mitra kami dalam pengembangan, paket pendidikan dan pelatihan di bidang informasi teknologi. Tim Mitra Informatika memiliki spesialisasi di bidang Teknologi Informasi dan Industri Telekomunikasi, sehingga memiliki pemahaman yang komprehensif dan aktual mengenai pemanfaatan IT bagi para mitra.
				</p>
			</div>
			
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
				<h2>Visi Dan Misi</h2>
				<p><strong><i class="glyphicon glyphicon-asterisk"></i> VISI</strong></p>
				<ul class="custom-bullet">
					<li>Menjadi perusahaan yang kompeten, profesional, berkualitas dan terpercaya dalam penyedia sistem terintegrasi teknologi informatika di berbagai wilayah di Indonesia.</li>
				</ul>
				
				<p><strong><i class="glyphicon glyphicon-asterisk"></i> MISI</strong></p>
				<ul class="custom-bullet">
					<li>Mengembangkan Produk IT yang berkualitas dan Kompetitif.</li>
					<li>Memberikan pelayanan/servis yang profesional kepada mitra.</li>
					<li>Mengembangkan kemitraan yang saling menguntungkan.</li>
					<li>Mengembangkan inovasi terbaik dan terkini dalam setiap produk.</li>
					<li>Meningkatkan benefit dan nilai tambah bagi mitra</li>
				</ul>
				
			</div>
		</div>
	</div>
	
	<?php
	include('layout/footer.php');
	?>
	<div class="col-md-offset-6">
	<?php
	include('chatbox.php');
	?>
	</div>
  </body>
</html>