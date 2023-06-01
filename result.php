<?php
include('session.php');
include('header2.php'); ?>
<?php
include('post.php');
$post = new Post($db);

?>

<div class="container">
	<h2>Tüm Yazılar</h2>


	<?php
		if(!empty($_SESSION['username'])){
			echo "Hello, {$_SESSION['username']}";
		}else{
			echo"You're not logged in!";
		}
	?>

	</h2>
	<table class="table table-striped">
		<thead><br><br><br>
			<tr>
				<th>Başlık</th>
				<th>Tanım</th>
				<th>zaman</th>
				<th>Eylem</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($post->getPost() as $post){ ?>
			<tr>
				<td><?php echo $post['title']; ?></td>
				<td><?php echo $post['description'] ?></td>
				<td><?php echo date('Y-m-d',strtotime($post['created_at'])); ?></td>
				<td>
					<a href="view.php?slug=<?php echo $post['slug'];?>"><button type="submit" class="btn btn-outline-success btn-sm">Görüntüle</button></a>
					<a href="edit.php?slug=<?php echo $post['slug'];?>"><button type="submit" class="btn btn-outline-primary btn-sm">Düzenle</button></a>
					<a href="delete.php?slug=<?php echo $post['slug'];?>"><button type="submit" class="btn btn-outline-danger btn-sm">Sil</button></a>
				</td>
			<?php }?>
			</tr>
		</tbody>
	</table>
</div>
<?php include('footer.php') ?>
