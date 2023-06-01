<?php include('header.php');
	  include('post.php');

$posts = new Post($db);

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
<section class="recent_update_area section_gap">
			<div class="container">
				<div class="recent_update_inner">
				<div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							<div class="row recent_update_text">
								<div class="col-lg-6">
								<?php foreach($posts->getSinglePost($_GET['slug']) as $post){ ?>
 		<div class="card">
 			<img  class="img-fluid"src="images/<?php echo $post['image']; ?>" >
 		</div>
								</div>
								<div class="col-lg-6">
								<div class="section-content">
 			<h1 class="main_title"><?php echo $post['title']; ?></h1>
 			<p class="main-text"><?php echo $post['description']; ?></p>
 		</div>
 	<?php } ?>
									</div>
									</div>
			</div>
		</section>

 



</body>
<?php include('footer.php') ?>
</html>