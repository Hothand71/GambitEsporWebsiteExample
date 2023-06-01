<?php
include('header.php');
?>
<?php
//$post = new Post($db);
//$tags = new Tag($db);
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
<section class="upcoming_games_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h2>Yönetici Kadromuz</h2>
						<h1>Yönetici Kadromuz</h1>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="new_games_item">
						<img src="img/k3mo.png" height=350 weight=350 alt="">
						<div class="upcoming_title">
							<h3><a href="https://www.vct.gg/users/1745204-k3mo">K3MO<br>(Ceo)</a></h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="new_games_item">
						<img src="img/yalfajer.png" height=350 weight=350 alt="">
						<div class="upcoming_title">
							<h3><a href="https://www.vlr.gg/player/9810/alfajer">Alfajer<br>(Co-Founder)</a></h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="new_games_item">
						<img src="img/toronto.png" height=350 weight=350 alt="">
						<div class="upcoming_title">
							<h3><a href="https://www.vlr.gg/player/558/toronto">Toronto<br>(Manager)</a></h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="new_games_item">
						<img src="img/hiko.png" height=350 weight=350 alt="">
						<div class="upcoming_title">
							<h3><a href="https://www.vlr.gg/player/57/hiko">Hiko<br>(Manager)</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="contact_area section_gap">
            <div class="container">
                <div id="mapBox" class="mapBox">
				<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1531.016570001374!2d33.44975170723299!3d39.873495577849475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4081e0613b8e3921%3A0x1ac9a665ed4cccba!2zWWVuacWfZWhpciwgS8SxcsSxa2thbGUgw5xudi4sIDcxNDUwIEthcmFjYWFsaS9ZYWjFn2loYW4vS8SxcsSxa2thbGU!5e0!3m2!1str!2str!4v1657170227809!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </center></div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Kırıkkale/Merkez</h6>
                                <p>Kırıkkale Üniversitesi</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">+03182455947</a></h6>
                                <p>Hafta içi 9-18 arası</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">kemalaltun7108@gmail.com</a></h6>
                                <p>E-posta adresimizden bize ulaşabilirsiniz</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="İsim giriniz">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="E-Posta adresi giriniz">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Başlık giriniz">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Mesaj giriniz"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="primary_btn">Mesaj Gönder</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>





<?php include('footer.php') ?>
</body>
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
	<script src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1531.016570001374!2d33.44975170723299!3d39.873495577849475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4081e0613b8e3921%3A0x1ac9a665ed4cccba!2zWWVuacWfZWhpciwgS8SxcsSxa2thbGUgw5xudi4sIDcxNDUwIEthcmFjYWFsaS9ZYWjFn2loYW4vS8SxcsSxa2thbGU!5e0!3m2!1str!2str!4v1657170087723!5m2!1str!2str"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>

</html>