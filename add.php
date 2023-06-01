<?php
include('header2.php');?>
<?php
  include('session.php');
 ?>

<?php
    include('post.php');
?>
<?php
    include('image_upload_function.php');
?>
<?php
  include('Tag.php');
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
<br><br><br><br><br><br><br><br><br><br><br>

 <?php
     $tags = new Tag($db);
     $post = new Post($db);
     ?>
<?php
    if(isset($_POST['btnSubmit'])){

       	$data = date('Y-m-d');

    	if(!empty($_POST['title'])&&!empty($_POST['description'])){
    		$title = strip_tags($_POST['title']);
    		$description = $_POST['description'];
        $slug = createSlug($title);
    		$record = $post->addPost($title,$description,uploadImage(),$data,$slug);
    		if($record==True){
    			echo"<div class='text-center alert alert-success'>Post added Successfully!</div>";
    		}
    	}else{
    		echo"<div class='text-center alert alert-danger'>Every field is required</div>";
    	}
    }
?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<form action="add.php" method="POST" enctype="multipart/form-data">
			<div class="card">
				<div class="card-header">Gönderi Yayınla</div>
				<div class="card-body">
					<div class="form-group">
						<label for="title">Başlık</label>
						<input type="text" name="title" class="form-control">
					</div>

					<div class="form-group">
						<label for="description">Bilgi</label>
						<textarea cols="10" id="editor" name="description" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<label for="image">Görsel</label>
						<input type="file" name="image" class="form-control">
					</div>
          <div class="form-group form-check-inline">
            <label for="image"><b>Etiketler</b>&nbsp;&nbsp;</label>
            <?php  foreach($tags->getAllTags() as $tag){ ?>
              <input type="checkbox" name="tags[]" class="form-check-input" value="<?php echo $tag['id'] ?>"><?php echo $tag['tag']; ?>
            <?php } ?>
          </div>

					<div class="form-group">
						<button type="submit" name="btnSubmit" class="btn btn-primary">Onayla</button>
					</div>
				</div>
			</div>
		</form>
        </div>
	</div>

</div>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
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