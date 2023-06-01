<?php
  // include('session.php');
 ?>
<?php include('header2.php'); ?>
<?php include('post.php');
	$post = new Post($db);
?>
<?php
$post->deletePostBySlug($_GET['slug']);
header('Location:result.php');
?>