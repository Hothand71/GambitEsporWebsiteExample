<?php
  include('session.php');
 ?>
<?php
	include('header2.php');
?>
<?php
include('session.php');
?>
<?php
include('image_upload_function.php');
?>
<?php
include('post.php');
$posts = new Post($db);
?>
<?php
if(isset($_POST['btnUpdate'])){
	$result = $posts->updatePost($_POST['title'],$_POST['description'],$_GET['slug']);
	if($result==true){
		echo"<div class='text-center alert alert-success'>Post updated Successfully!</div>";
	}
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
<br><br><br><br><br><br><br><br><br>
<div class="container">
	<div class="row justify-content-center">
		<?php foreach($posts->getSinglePost($_GET['slug'])as $post){ ?>
		<div class="col-md-8">
			<form action="#" method="POST" enctype="multipart/form-data">
			<div class="card">
				<div class="card-header">Düzenle</div>
				<div class="card-body">
					<div class="form-group">
						<label for="title">Başlık</label>
						<input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
					</div>

					<div class="form-group">
						<label for="description">Açıklama</label>
						<textarea cols="10" id="editor" name="description" class="form-control"><?php echo $post['description'] ;?></textarea>
					</div>

					<div class="form-group">
						<label for="image">Görsel</label>
						<input type="file" name="image" class="form-control">
						<img style="width: 180px;" src="images/<?php echo $post['image'] ?>">
					</div>



					<div class="form-group">
						<button type="submit" name="btnUpdate" class="btn btn-primary">Güncelle </button>
					</div>


				</div>
			</div>
		</form>

		</div>
	<?php }?>
	</div>

</div>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<style type="text/css">
	.card{
		margin-top: 10px;
	}
</style>
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