<?php
include('header.php');
?>
<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
  header("location:index.php");
}
include 'config.php';
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
<br><br><br><br><br><br><br><br>

<center>
<section class="upcoming_games_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
        <h3>Siparişlerim</h3>
        <hr>

        <?php
          $user = $_SESSION["username"];
          $result = $mysqli->query("SELECT * from orders where email='".$user."'");
          if($result) {
            while($obj = $result->fetch_object()) {
              //echo '<div class="large-6">';
              echo '<p><h4>Sipariş ID ->'.$obj->id.'</h4></p>';
              echo '<p><strong>Sipariş Tarihi</strong>: '.$obj->date.'</p>';
              echo '<p><strong>Sipariş Adı</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Ürün Adı</strong>: '.$obj->product_name.'</p>';
              echo '<p><strong>Adet Fiyatı</strong>: '.$obj->price.'</p>';
              echo '<p><strong>Miktar</strong>: '.$obj->units.'</p>';
              echo '<p><strong>Toplam</strong>: '.$currency.$obj->total.'</p>';
              //echo '</div>';
              //echo '<div class="large-6">';
              //echo '<img src="images/products/sports_band.jpg">';
              //echo '</div>';
              echo '<p><hr></p>';

            }
          }
        ?>
      </div>
    </div></div>
		</div>
	</section>




    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        
		
      </div>
    </div>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>









<section class="testimonials_area section_gap">
		<div class="container">
			<div class="testi_slider owl-carousel">
				<div class="testi_item">
          </div>
			</div>
		</div>
	</section>


<?php include('footer.php') ?>
</body>

</html>