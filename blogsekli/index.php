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
	<title>GAG Esports</title>
	
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

	<!--================Header Menu Area =================-->
	
	<!--================Header Menu Area =================-->
	 <!--================blog alanım =================-->
	 <section class="about_us_area section_gap_top">
	<div class="container">
    <div class="row">
        <div class="col-md-8">
        <?php foreach($post->getPost() as $post) { ?>
            <div class="media">
                <div class="media-left media-top">
                    <img src="images/<?php echo $post['image']; ?>" class="media-object" style="width:200px; margin-right: 10px;"/>
                    <p>
                      Author:Admin<br>
          						Created:<?php echo date('Y-m-d',strtotime($post['created_at'])); ?>
                    </p>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="view.php?slug=<?php echo $post['slug'];?>"><?php echo $post['title']; ?></a></h4>
                  <?php echo htmlspecialchars_decode(substr($post['description'],0,100));?>                 </div>
            </div>

            <?php } ?>

            <div class="col-md-4">
            	<h4>Browse by Tags</h4>
            	<p>
            	<?php
            	foreach($tags->getAllTags() as $tag){?>
            		<a href="index.php?tag=<?php  echo $tag['tag'];?>"><button type="button" class="btn btn-outline-warning btn-sm">
            			<?php  echo $tag['tag'];?>
            		</button></a>

            	<?php  } ?>

            	</p>

        </div>
    </div>
</div>
</div>
</div>

<style type="text/css">
    body{
        text-align: justify;
    }
    img{
        margin-right: 10px;
    }
    .media{
        margin-top: 20px;
    }
</style>
 <!--================blog alanım =================-->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




    <!--================Footer Area =================-->
	
	<!--================End Footer Area =================
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
	<!--gmaps Js
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>-->
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