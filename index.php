<?php
include('header.php');
include('post.php');
include('Tag.php');
?>
<?php
$post = new Post($db);
$tags = new Tag($db);
?>
<!doctype html>
<html lang="tr">

<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>GAMBIT Esports</title>
	
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/flaticon/flaticon.css">
	
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="home_left_img">
							<img class="img-fluid" src="img/masters.png"  alt="masterslogo">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="banner_content">
							<h2>
								GAMBIT Esport <br>
								VALORANT Champions Tour 2021:<br>
								Stage 3 Masters<br>
								Şampiyonu
							</h2>
							<p>
								Valorant takımımız tek bir mağlubiyet bile görmeden Valorant Masters şampiyonasında kupayı kazanmayı başardı. <br>Bizi destekleyen herkese teşekkürler!
							</p>
							<div class="d-flex align-items-center">
								<a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?v=KEuAgEnmsF4">
									<span></span>
								</a>
								<div class="watch_video text-uppercase">
									Videoyu Oynat
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    
	
<?php include('footer.php') ?>

    <script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>