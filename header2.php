<!DOCTYPE html>
<html>
<head>
	<title>GAMBIT Esports</title>

<!-- Required meta tags -->
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/gmbt.png" type="image/png">
	<title>GAMBIT Esports</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/flaticon/flaticon.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">


</head>
<body>
  <header class="header_area">
    <div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
<div class="container">
  <a class="navbar-brand logo_h" href="index.php"><img src="img/gmbt.png" alt="" height=85></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
  <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
  <ul class="nav navbar-nav menu_nav justify-content-center">
							<li class="nav-item active"><a class="nav-link" href="index.php">Ana Sayfa</a></li>
							<li class="nav-item"><a class="nav-link" href="takim.php">Oyuncularımız</a></li>
                            <li class="nav-item submenu dropdown">
              <a href="blog.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
                 <ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="result.php">Blog Düzenle</a></li>
                                    <li class="nav-item"><a class="nav-link" href="add.php">Blog Ekle</a></li>
                                    </ul>
              <li class="nav-item submenu dropdown">
              <a href="magaza.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Mağaza</a>
                 <ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="urunler.php">ürünler</a></li>
									<li class="nav-item"><a class="nav-link" href="sepet.php">sepet</a></li>
									<li class="nav-item"><a class="nav-link" href="siparisler.php">siparişlerim</a></li>
								</ul>
         
         <li class="nav-item submenu dropdown">
								<a href="hakkimizda.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">hakkımıza</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="hakkimizda.php">hakkımızda</a></li>
                  <li class="nav-item"><a class="nav-link" href="sss.php">s.s.s</a></li>
									<li class="nav-item"><a class="nav-link" href="iletisim.php">iletişim</a></li>
								</ul>
							</li>
              </ul>
    <?php if(!empty($_SESSION['username'])){ ?>
      <ul class="nav navbar-nav navbar-right">
							<li class="nav-item">
                <a href="logout.php" class="primary_btn">çıkış yap</a>
      </li> </ul>
    <?php }
    else{  ?><ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
        <a href="login.php" class="primary_btn">giriş yap</a>
      </li>
    </ul>
<?php  } ?>


   
  </div>
  </div>
</nav>
</div>
    </header>
</html>
