<?php include('header.php'); ?>
<?php include('Account.php');  ?>

<?php
 $user = new Account($db);
?>
<?php
if(isset($_POST['btnLogin'])){
	$user->login($_POST['username'],md5($_POST['password']));


}

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
<section class="about_us_area section_gap_top">
			<div class="container">
				<div class="row about_content align-items-center">
					<div class="col-lg-6">
						<div class="section_content">
							<h6>Giriş Yap</h6>
<form action="login.php" method="POST">
				<div class="container">
		<h1>Admin Girişi</h1>
		<div class="col-md-4">
			<div class="form-group">
				<label for="username"><h3>KullanıcıAdı</h3></label>
				<input type="text" name="username" class="form-control"  placeholder="kullanıcı adı giriniz">
			</div>
			<div class="form-group">
				<label for="password"><h3>Şifre</h3></label>
				<input type="password" name="password" class="form-control" placeholder="şifre">
			</div>
			<div class="form-group">
				<button type="submit" name="btnLogin" class="btn btn-success">Giriş</button>
			</div>

		</div>
	</div>
</form>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about_us_image_box justify-content-center">
							<img class="img-fluid w-100" src="img/kullanici.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>


<?php include('footer.php') ?>
</body>

</html>