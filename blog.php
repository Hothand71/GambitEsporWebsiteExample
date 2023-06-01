<?php
include('header.php');
include('post.php');
include('Tag.php')
?>
<?php
$post = new Post($db);
$tags = new Tag($db);
?>
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
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <?php foreach($post->getPost() as $post) { ?>
            <div class="media">
                <div class="media-left media-top">
                    <img src="img/<?php echo $post['image']; ?>" class="media-object" style="width:200px; margin-right: 10px;"/>
                    <p>
                      Yayınlayan:Admin<br>
          						Yayınlanma Tarihi:<?php echo date('Y-m-d',strtotime($post['created_at'])); ?>
                    </p>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="view.php?slug=<?php echo $post['slug'];?>"><?php echo $post['title']; ?></a></h4>
                  <?php echo htmlspecialchars_decode(substr($post['description'],0,100));?>                 </div>
            </div>

            <?php } ?>

            <div class="col-md-4">
            	<h4>Etiketlere göre göz atın
</h4>
            	<p>
            	<?php
            	foreach($tags->getAllTags() as $tag){?>
            		<a href="blog.php?tag=<?php  echo $tag['tag'];?>"><button type="button" class="btn btn-outline-warning btn-sm">
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



<?php include('footer.php') ?>
</body>

</html>